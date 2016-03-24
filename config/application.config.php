<?php

return array(

    'modules' => array(
        'DI\ZendFramework2',
        'Application',
        'Test'
    ),

    'module_listener_options' => array(

        'module_paths' => array(
            './module',
            './vendor',
        ),

        'config_glob_paths' => array(
            'config/autoload/{{,*.}global,{,*.}local}.php',
        ),

    ),

    'service_manager' => array(
        'factories' => [
            'DI\Container' => 'DI\ZendFramework2\Service\DIContainerFactory',
        ]
    )
);
