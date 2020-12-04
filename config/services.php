<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    // CAMBIO AGREGADO
    'firebase' => [
    'api_key' => 'AIzaSyD6mzwyq406RdszJITSo1U40x4v3j6PGRA', // Nueva
    'auth_domain' => 'tuscomprashoy-279019.firebaseapp.com', // Nueva
    'database_url' => 'https://tuscomprashoy-279019.firebaseio.com/', //Nueva
    'storage_bucket' => 'tuscomprashoy-279019.appspot.com', // Nueva
    ],

];




    //    'api_key' => 'AIzaSyApO_UUrzwR4cQmcW4G-QkVFWpvsJTqqRM', 
    // 'auth_domain' => 'crudm-39788.firebaseapp.com', 
    // 'database_url' => 'https://crudm-39788.firebaseio.com',
    // 'storage_bucket' => 'crudm-39788.appspot.com', 