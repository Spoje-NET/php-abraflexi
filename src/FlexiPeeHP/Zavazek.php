<?php
/**
 * FlexiPeeHP - Objekt závazky.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2020 Spoje.Net
 */

namespace FlexiPeeHP;
/**
 * Description of Zavazek
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Zavazek extends \FlexiPeeHP\RW
{
    use Stitky;
    use Firma;
    use Sum;

    public $evidence = 'zavazek';
}
