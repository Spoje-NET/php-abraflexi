<?php
/**
 * FlexiBee - Objekt závazky.
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  (C) 2015-2019 Spoje.Net
 */

namespace FlexiBee;
/**
 * Description of Zavazek
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */
class Zavazek extends \FlexiBee\RW
{
    use Stitky;
    use Firma;
    use Sum;

    public $evidence = 'zavazek';
}
