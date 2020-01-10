<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Arr;

class ArrTest extends TestCase
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
            Arr::deepMerge($array1, $array2, $array3)
        );
    }
}