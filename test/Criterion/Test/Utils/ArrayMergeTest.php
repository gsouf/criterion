<?php

namespace Criterion\Test;
use Criterion\Application;
use Criterion\Utils;

class ArrayMergeTest extends TestCase
{

    public function testFlatArrayMerge()
    {
        $array1 = array(
            'key1' => 1,
            'key2' => 2,
        );
        $array2 = array(
            'key2' => 'two',
            'key3' => 'three'
        );
        $array3 = Utils::array_merge($array1, $array2);
        $this->assertEquals($array3, array(
            'key1' => 1,
            'key2' => 'two',
            'key3' => 'three'
        ));
    }

}
