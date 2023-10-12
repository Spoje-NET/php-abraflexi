<?php

declare(strict_types=1);

/**
 * AbraFlexi - Objekt závazky.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2019 Spoje.Net
 */

namespace AbraFlexi;

/**
 * Description of Zavazek
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Zavazek extends \AbraFlexi\RW
{
    use stitky;
    use firma;
    use sum;
    use email;

    public $evidence = 'zavazek';
}
