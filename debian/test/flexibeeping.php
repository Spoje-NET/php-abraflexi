#!/usr/bin/env php
<?php
/**
 * FlexiPeeHP - Test in Debian.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  2017 Spoje.Net
 */
$autoload = '/tmp/flexipeehpdebiantest/autoload.php';
if (file_exists($autoload)) {
    require_once $autoload;
} else {
    echo 'composer install ???';
    exit(2);
}

if (file_exists('/usr/share/doc/FlexiPeeHP/config.json')) {
    $config = '/usr/share/doc/FlexiPeeHP/config.json';
} else {
    $config = './config.json';
}

\Ease\Shared::instanced()->loadConfig($config,true);

$tester = new \FlexiPeeHP\Company();

$records = $tester->getAllFromFlexibee();

if (isset($records) && count($records)) {
    foreach ($records as $companyInfo) {
        $tester->addStatusMessage($companyInfo['nazev'], 'success');
    }
    exit(0);
} else {
    $tester->addStatusMessage('Error', 'danger');
    exit(1);
}
