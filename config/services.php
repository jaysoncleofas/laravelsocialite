<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '918335444999165',         // Your GitHub Client ID
        'client_secret' => 'b32a601203f950697c49cdd4de6bb896', // Your GitHub Client Secret
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '663818822540-h5l2s8ngb1t1ukboqptd1srf9gmekdi9.apps.googleusercontent.com',         // Your GitHub Client ID
        'client_secret' => 'QKD1xO6_SjhmjRRLdiF7MDbz', // Your GitHub Client Secret
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

];
