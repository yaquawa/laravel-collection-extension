<?php

namespace Tests\Unit;

use Tests\TestCase;

class CollectionTest extends TestCase
{
    /**
     * @test
     */
    public function deepMerge(): void
    {
        $array1 = ["color" => ["red", "green"], "aa"];
        $array2 = ["color" => ["green", "blue"], "bb"];
        $array3 = ["color" => ["yellow", "blue"], "ccc"];

        $this->assertEquals(
            [
                'color' => [
                    'red',
                    'green',
                    'blue',
                    'yellow'
                ],
                'aa',
                'bb',
                'ccc'
            ],
            collect($array1)->deepMerge($array2, $array3)->all()
        );
    }
}