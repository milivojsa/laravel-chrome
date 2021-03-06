<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Chrome Path
    |--------------------------------------------------------------------------
    |
    | Manually set the path where Google Chrome is installed.
    |
    */

    'exec_path' => env('CHROME_PATH', null), // 'google-chrome', 'chromium-browser', ...

    /*
    |--------------------------------------------------------------------------
    | User Agent
    |--------------------------------------------------------------------------
    |
    | Change the user agent that will be used by Google Chrome.
    |
    */

    'user_agent' => null,

    /*
    |--------------------------------------------------------------------------
    | Timeout
    |--------------------------------------------------------------------------
    |
    | Specify a timeout in seconds.
    | (null = no timeout)
    |
    */

    'timeout' => null,

    /*
    |--------------------------------------------------------------------------
    | Viewport
    |--------------------------------------------------------------------------
    |
    | Specify a viewport.
    |
    */

    'viewport' => null,

    /*
    |--------------------------------------------------------------------------
    | Blacklist
    |--------------------------------------------------------------------------
    |
    | Specify a list of regular expressions to filter resources.
    |
    */

    'blacklist' => [],

    /*
    |--------------------------------------------------------------------------
    | Excluded
    |--------------------------------------------------------------------------
    |
    | Specify a list of resource types that should be excluded.
    | Available types: document, stylesheet, image, media, font and script.
    |
    */

    'excluded' => [],

    /*
    |--------------------------------------------------------------------------
    | Additional Request Headers
    |--------------------------------------------------------------------------
    |
    | Specify additional headers.
    |
    */

    'headers' => [],

];
