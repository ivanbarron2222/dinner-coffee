<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course the
    | usual Laravel view path has already been registered for you.
    |
    */

    'paths' => [
        resource_path('views'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    |
    */

    'compiled' => env(
        'VIEW_COMPILED_PATH',
        realpath(storage_path('framework/views')) ?: storage_path('framework/views')
    ),

    /*
    |--------------------------------------------------------------------------
    | View Cache
    |--------------------------------------------------------------------------
    |
    | This option determines if the Blade view compiler will cache the views
    | or not. When set to false, views will be recompiled on every request.
    | This is only recommended for local development.
    |
    */

    'cache' => env('VIEW_CACHE', true),

    /*
    |--------------------------------------------------------------------------
    | Compiled Extension
    |--------------------------------------------------------------------------
    |
    | This option determines the file extension that should be used for the
    | compiled view files. The default value is "php" which is suitable for
    | most applications.
    |
    */

    'compiled_extension' => 'php',

    /*
    |--------------------------------------------------------------------------
    | View Cache Timestamps
    |--------------------------------------------------------------------------
    |
    | This option determines if the Blade compiler should check the view file
    | modification timestamps before re-compiling. This is useful in local
    | development, but can be disabled for performance in production.
    |
    */

    'check_cache_timestamps' => true,
];
