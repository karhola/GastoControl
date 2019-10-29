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
    /*'facebook' => [
        'client_id' => '392337008359476',
        'client_secret' => '36d4e128235cc11b43dd1e43c60bafa5',
        'redirect' => 'http://gastocontrol.test/login/facebook/callback',
    ],*/
    'google' => [
        'client_id' => '975100669721-mckntj0i2ob07rpoqqrj7jvlhst0sfla.apps.googleusercontent.com',
        'client_secret' => 'Xy3X48jfhFMlHaGucaYRkx8o',
        'redirect' => 'http://localhost:8000',
    ],


];
