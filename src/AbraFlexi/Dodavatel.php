<?php

declare(strict_types=1);

/**
 * Shopping prices
 *
 * @author     Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  2023 Vitex Software
 */

namespace AbraFlexi;

/**
 * Description of Dodavatel
 *
 * @author vitex
 */
class Dodavatel extends RW
{
    use stitky;
    use firma;

    /**
     * The agenda used by the object.
     *
     * @var string
     */
    public $evidence = 'dodavatel';
}
