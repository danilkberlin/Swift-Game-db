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
    'admin/user/detail' => [
        'controller' => 'admin',
        'action' => 'detail'   
    ],
    'admin/user' => [
        'controller' => 'admin',
        'action' => 'user'   
    ],
    'admin/user/delete' => [
        'controller' => 'admin',
        'action' => 'delete'   
    ],
    'admin' =>[
        'controller' => 'admin',
        'action' => 'index'
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

    'new' => [
        'controller' => 'new',
        'action' => 'list'   
    ],
    'new/delete' =>[
        'controller' => 'new',
        'action' => 'delete'  
    ],
    //gallery
    'gallery/show' => [
        'controller' => 'gallery',
        'action' => 'show'   
    ],

    'gallery' => [
        'controller' => 'gallery',
        'action' => 'list'   
    ],
    //Tournaments
    'tournaments/show' => [
        'controller' => 'tournaments',
        'action' => 'show'   
    ],

    'tournaments' => [
        'controller' => 'tournaments',
        'action' => 'list'   
    ],
    'tournaments/live' => [
        'controller' => 'tournaments',
        'action' => 'live'   
    ],
    'user/login' => [
        'controller' => 'user',
        'action' => 'index'
    ],
    'user/register' => [
        'controller' => 'user',
        'action' => 'register'
    ],
    'user/signout' => [
        'controller' => 'user',
        'action' => 'signout'
    ],
    //Settings
    'settings/profile' => [
        'controller' => 'settings',
        'action' => 'profile'
    ],
    'profile' => [
        'controller' => 'profile',
        'action' => 'profile'
    ],
    'profile/change' => [
        'controller' => 'profile',
        'action' => 'change'
    ],
    'profile/foto' => [
        'controller' => 'profile',
        'action' => 'foto'
    ],
];