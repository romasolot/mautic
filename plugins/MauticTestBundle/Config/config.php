<?php

return [
    'name'        => 'Test Work',
    'description' => 'This is test work plugin.',
    'author'      => 'Developer',
    'version'     => '1.0.0',
    'routes'   => [
        'main' => [
            'plugin_list_something' => [
                'path'       => '/list-something',
                'controller' => 'MauticTestBundle:Public:test'
            ],
            'plugin_create_something' => [
                'path'       => '/create-something',
                'controller' => 'MauticTestBundle:Public:createSomething'
            ],
            'plugin_delete_something' => [
                'path'       => '/delete-something/{somethingId}',
                'controller' => 'MauticTestBundle:Public:deleteSomething',
            ],
        ],
    ],
    'services'    =>[
        'models' => [
            'mautic.mautictest.model.something' => [
                'class' => 'MauticPlugin\MauticTestBundle\Model\SomethingModel',
            ]
        ],
    ],
    'menu' => [
        'main' => [
            'test work' => [
                'route'    => 'plugin_list_something',
                'iconClass' => 'fa-gears',
                'access'    => 'admin',
                'priority' => 10,
            ],
        ],
    ]
];