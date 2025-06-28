#!/usr/bin/env php
<?php
/**
 * Generátor tříd pro všechny evidence v AbraFlexi
 * - Pokud třída neexistuje, vytvoří ji
 * - Pokud existuje, zkontroluje a doplní potřebné traity
 *
 * Spouštějte ve složce projektu.
 */

$evidenceListFile = __DIR__ . '/../static/EvidenceFullList.json';
$srcDir = __DIR__ . '/../src/AbraFlexi/';
$propertiesDir = __DIR__ . '/../static/';

if (!file_exists($evidenceListFile)) {
    fwrite(STDERR, "EvidenceFullList.json not found!\n");
    exit(1);
}

$evidenceList = json_decode(file_get_contents($evidenceListFile), true);

function camelize($input) {
    return str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $input)));
}

function getTraitsForEvidence($evidence, $propertiesDir) {
    $traits = [];
    $propertiesFile = $propertiesDir . 'Properties.' . $evidence . '.php';
    if (file_exists($propertiesFile)) {
        $props = require $propertiesFile;
        if (is_array($props)) {
            if (isset($props['firma']) || isset($props['idFirma'])) $traits[] = 'firma';
            if (isset($props['stitky'])) $traits[] = 'stitky';
            if (isset($props['sum'])) $traits[] = 'sum';
            if (isset($props['lock'])) $traits[] = 'lock';
            if (isset($props['subItems'])) $traits[] = 'subItems';
            if (isset($props['email'])) $traits[] = 'email';
            if (isset($props['getChanges'])) $traits[] = 'getChanges';
        }
    }
    return $traits;
}

foreach ($evidenceList as $evidenceKey => $evidenceInfo) {
    $className = camelize($evidenceInfo['evidencePath'] ?? $evidenceKey);
    $filePath = $srcDir . $className . '.php';
    $traits = getTraitsForEvidence($evidenceInfo['evidencePath'] ?? $evidenceKey, $propertiesDir);
    $traitLines = array_map(fn($t) => "    use $t;", $traits);
    $traitBlock = $traitLines ? (implode("\n", $traitLines) . "\n") : '';
    // Zjisti, zda má evidence nějaké sloupce s právem zápisu
    $parent = 'RW';
    $propertiesFile = $propertiesDir . 'Properties.' . ($evidenceInfo['evidencePath'] ?? $evidenceKey) . '.php';
    if (file_exists($propertiesFile)) {
        $props = require $propertiesFile;
        $writable = false;
        if (is_array($props)) {
            foreach ($props as $col) {
                if (is_array($col) && (!isset($col['readonly']) || $col['readonly'] === false)) {
                    $writable = true;
                    break;
                }
            }
        }
        if (!$writable) {
            $parent = 'RO';
        }
    }

    if (!file_exists($filePath)) {
        $php = "<?php\n\nnamespace AbraFlexi;\n\nclass $className extends $parent\n{\n$traitBlock    public ?string \$evidence = '{$evidenceInfo['evidencePath']}';\n}\n";
        file_put_contents($filePath, $php);
        echo "Created: $filePath\n";
    } else {
        $code = file_get_contents($filePath);
        $changed = false;
        foreach ($traits as $trait) {
            if (!preg_match("/use\\s+$trait;/", $code)) {
                $code = preg_replace('/(class\\s+' . $className . '\\s+extends\\s+' . $parent . '\\s*{)/', "\\1\n    use $trait;", $code, 1);
                $changed = true;
            }
        }
        if ($changed) {
            file_put_contents($filePath, $code);
            echo "Updated: $filePath\n";
        }
    }
}
