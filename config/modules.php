<?php

return [
    'modules'           => [

        /*
        |--------------------------------------------------------------------------
        | Modules Namespace
        |--------------------------------------------------------------------------
        |
        | Here you should set the Modules namespace
        |
        */
        'namespace' => 'Hello',

        /*
        |--------------------------------------------------------------------------
        | Modules Registration
        |--------------------------------------------------------------------------
        |
        | Here you should register all your Modules
        |
        */
        'register'  => [

            'Core' => [
                'dependencies' => [
                    'services' => [
                        'Authorization',
                        'Configuration',
                    ],
                ],
                'extraServiceProviders' => [
                    Hello\Modules\Core\Providers\RoutesServiceProvider::class,
                ],
            ],

            'User' => [

                /*
                |--------------------------------------------------------------------------
                | Module Routes
                |--------------------------------------------------------------------------
                |
                | Here you should define the routes files names. There are two types of
                | Routes, API Routes and Web Routes.
                | For the API routes you must define the route version number in addition
                | to the route file name.
                | For the Web routes you must only define the route file name.
                |
                */
                'routes'                => [
                    'api' => [
                        ['fileName' => 'v1', 'versionNumber' => '1']
                    ],
                    'web' => [
                        ['fileName' => 'main']
                    ],
                ],

                /*
                |--------------------------------------------------------------------------
                | Module extra (additional) Service Providers
                |--------------------------------------------------------------------------
                |
                | Here you should register any extra service provider in your module.
                | By default every module must have a single (main) service provider,
                | which will get registered automatically by the core service provider,
                | without the need to define it here. However, if you have extra service
                | providers in your Module, you must register them here to get loaded.
                |
                */
                'extraServiceProviders' => [
                    Hello\Modules\User\Providers\AuthServiceProvider::class,
                ],

                /*
                |--------------------------------------------------------------------------
                | Module Dependencies
                |--------------------------------------------------------------------------
                |
                | Here you should include the names of all the Module dependencies.
                | A Module could depend on another Module or on a Service.
                |
                */
                'dependencies'          => [
                    'modules' => [

                    ],

                    'services' => [
                        'Authentication',
                    ],
                ],
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Models Factory
    |--------------------------------------------------------------------------
    |
    | Here you should set the new path of the Models Factory. This tells
    | Laravel to override the default path for the Models Factories.
    |
    */
    'modelsFactoryPath' => '/src/Modules/Core/ModelsFactory'

];