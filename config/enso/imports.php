<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validations
    |--------------------------------------------------------------------------
    | This flag sets whether validations are also executed in production
    | or only in local/development.
    | Values: 'always/local/yourEnv...'
    |
    */

    'validations' => 'local',

    /*
    |--------------------------------------------------------------------------
    | Configurations
    |--------------------------------------------------------------------------
    | Holds your import configuration. 'label' is used for the main page select
    | and template is the full path to your import template JSON.
    |
    */

    'configs' => [
        'userGroups' => [
            'label' => 'UserGroup',
            'template' => 'vendor/laravel-enso/examples/src/app/Imports/Templates/userGroups.json',
        ],
    ],
];
