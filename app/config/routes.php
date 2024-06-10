<?php

return [
    //index
    '' => [
        'controller' => 'main',
        'action' => 'index'   
    ],
    //Admin 
    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login'   
    ],

    'admin/user' => [
        'controller' => 'admin',
        'action' => 'user'   
    ],
    //Account 
    'account/login' => [
        'controller' => 'account',
        'action' => 'login'   
    ],

    'account/register' => [
        'controller' => 'account',
        'action' => 'register'   
    ],
    //NEWS
    'new/show' => [
        'controller' => 'new',
        'action' => 'show'   
    ],

    'new/list' => [
        'controller' => 'new',
        'action' => 'list'   
    ],
    //gallery
    'gallery/show' => [
        'controller' => 'gallery',
        'action' => 'show'   
    ],

    'gallery/list' => [
        'controller' => 'gallery',
        'action' => 'list'   
    ],
    //Tournaments
    'tournaments/show' => [
        'controller' => 'tournaments',
        'action' => 'show'   
    ],

    'tournaments/list' => [
        'controller' => 'tournaments',
        'action' => 'list'   
    ],
    'tournaments/live' => [
        'controller' => 'tournaments',
        'action' => 'live'   
    ],
    'user/user' => [
        'controller' => 'user',
        'action' => 'index'
    ],
    'user/register' => [
        'controller' => 'user',
        'action' => 'register'
    ]
];