<?php

return [
    //index
    '' => [
        'controller' => 'main',
        'action' => 'index'   
    ],
    //Admin 
    'admin/tournaments' => [
        'controller' => 'admin',
        'action' =>'tournaments'
    ],
    'admin/gallery' => [
        'controller' => 'admin',
        'action' => 'gallery'   
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
    'tournaments/account' => [
        'controller' => 'tournaments',
        'action' => 'account'   
    ],
    //User
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
    'settings' => [
        'controller' => 'settings',
        'action' => 'settings'
    ],
    // Profile
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
    //Seve
    'save' => [
        'controller' => 'save',
        'action' => 'index'
    ], 
    'save/post' => [
        'controller' =>'save',
        'action' => 'post'
    ],
    'save/delete' => [
        'controller' =>'save',
        'action' => 'delete'
    ],
];