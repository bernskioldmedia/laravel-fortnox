<?php

return [

    /**
     * The access token that Fortnox needs to authenticate.
     * You can use the built-in generation command to generate it.
     */
    'access_token' => env('FORTNOX_ACCESS_TOKEN', ''),

    /**
     * The client secret provided by Fortnox for your application.
     */
    'client_secret' => env('FORTNOX_CLIENT_SECRET', ''),

    /**
     * The URL to the Fortnox API.
     * This package currently only supports version 3.
     */
    'base_url' => env('FORTNOX_BASE_URL', 'https://api.fortnox.se/3/'),

];
