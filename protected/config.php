<?php

return [
    'domain' => 'test.com',
    'db' => [
        'default' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'user' => 'root',
            'password' => '',
            'dbname' => 'fw',
        ]
    ],
    'mail' => [
        'method' => 'smtp',
        'host' => 'smtp.mail.ru',
        'port' => 465,
        'secure' => 'ssl',
        'auth' => [
            'username' => 'ginger_kitten@list.ru',
            'password' => '{{mailpassword}}',
        ],
        'sender' => 'Ольга'
    ],
];