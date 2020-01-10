<?php

namespace Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Yaquawa\Laravel\CollectionExtension\CollectionExtensionServiceProvider;

abstract class TestCase extends BaseTestCase
{
    /**
     * Get package providers.
     *
     * @param \Illuminate\Foundation\Application $app
     * @return string[]
     */
    protected function getPackageProviders($app)
    {
        return [
            CollectionExtensionServiceProvider::class,
        ];
    }
}