<?php

return [
    'title' => 'Admin Dashboard',
    'url_prefix' => 'admin',
    'roles' => [
        'user' => [
            'title' => 'User/Customer'
        ],
        'admin' => [
            'title' => 'Administrator'
        ],
        'root' => [
            'title' => 'Root User (Super Admin)'
        ],
    ],
];
