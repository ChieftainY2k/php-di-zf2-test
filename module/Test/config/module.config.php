<?php
return array(

    /*
    'controllers' => array(
        'invokables' => array(
            'Test\Controller\Website' => 'Test\Controller\WebsiteController'
        )
    ),
    */

    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        'controller' => 'Test\Controller\WebsiteController',
                        'action' => 'index'
                    )
                )
            ),
        )
    ),
    
    'view_manager' => array(
        'template_path_stack' => array(
            'website' => __DIR__ . '/../view'
        )
    )
    
 );


