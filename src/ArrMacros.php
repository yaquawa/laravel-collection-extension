<?php

namespace Yaquawa\Laravel\CollectionExtension;

use Illuminate\Support\Arr;

if (!Arr::hasMacro('deepMerge')) {
    Arr::macro('deepMerge', function (array $array, ...$arrays) {
        $merged = $array;

        foreach ($arrays as $array2) {
            $merged = Helper::mergeArrayRecursively($merged, $array2);
        }

        return $merged;
    });
}