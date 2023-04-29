<?php

use Framework\Core\Database\Drivers\MySql;
use Framework\Core\Database\Drivers\PgSql;

return [
    'driver' => env('DB_DRIVER'),
    'drivers' => [
        'mysql' => [

            'port' => env('DB_PORT', '3306'),
            'host' => env('DB_HOST', 'localhost'),
            'database' => env('DB_NAME'),
            'user' => env('DB_USER', 'root'),
            'password' => env('DB_PASSWORD'),
            'options' => [],
        ],
        'pgsql' => [
            'port' => env('DB_PORT', '3306'),
            'host' => env('DB_HOST', 'localhost'),
            'database' => env('DB_NAME'),
            'user' => env('DB_USER', 'root'),
            'password' => env('DB_PASSWORD'),
            'options' => [],
        ],
    ],

    'adapters' => [
        'mysql' => MySql::class,
        'pgsql' => PgSql::class,
    ],

];
