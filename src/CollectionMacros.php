<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

if (!Collection::hasMacro('deepMerge')) {
    Collection::macro('deepMerge', function (...$allItems) {
        $arrays = [];

        foreach ($allItems as $items) {
            $arrays[] = $this->getArrayableItems($items);
        }

        return new static(Arr::deepMerge($this->all(), ...$arrays));
    });
}