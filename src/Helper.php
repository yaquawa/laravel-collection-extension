<?php

namespace Yaquawa\Laravel\CollectionExtension;

class Helper
{
    /**
     * Merge arrays recursively with out duplicated values.
     * @see https://stackoverflow.com/a/25712428
     * @param array $array1
     * @param array $array2
     * @return array
     */
    public static function mergeArrayRecursively(array $array1, array $array2): array
    {
        $merged = $array1;

        foreach ($array2 as $key => & $value) {
            if (is_array($value) && isset($merged[$key]) && is_array($merged[$key])) {
                $merged[$key] = static::mergeArrayRecursively($merged[$key], $value);
            } else if (is_int($key)) {
                if (!in_array($value, $merged)) {
                    $merged[] = $value;
                }
            } else {
                $merged[$key] = $value;
            }
        }

        return $merged;
    }
}