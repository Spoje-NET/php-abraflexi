<?php

namespace Test;

/**
 * Class used to test Object To Array Conversion
 */
class ObjectForTesting extends \stdClass
{
    /**
     * Simple Item
     * @var integer
     */
    public $item = 1;

    /**
     * Array item
     * @var array
     */
    public $arrItem = ['a', 'b' => 'c'];

    /**
     * Simple method
     *
     * @return boolean
     */
    public function method()
    {
        return true;
    }
}
