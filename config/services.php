<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id'     => '541555386012797',
        'client_secret' => '7de44a98b2621232c76bdbc16c9827ae',
        'redirect'      => 'http://localhost:8000/login/callback/facebook',
    ],
    'github' => [
        'client_id' => '82be56c0b0040909685f',
        'client_secret' => '8f8c69f473d3484d5a4deed2f4853a877af1a7a5',
        'redirect' => 'http://localhost:8000/login/callback/github',
    ],

];
