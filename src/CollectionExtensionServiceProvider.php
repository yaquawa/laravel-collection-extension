<?php

namespace Yaquawa\Laravel\CollectionExtension;

use Illuminate\Support\ServiceProvider;

class CollectionExtensionServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        require __DIR__ . '/ArrMacros.php';
        require __DIR__ . '/CollectionMacros.php';
    }
}