<?php

declare(strict_types=1);

/**
 * This file is part of the EaseCore package.
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AbraFlexi;

/**
 * Description of Zavazek.
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
