<?php

namespace Framework\Core\Database;

use Framework\Core\Database\Contracts\DatabaseContract;

class Database
{
    protected $config;
    protected $driver;

    public function __construct()
    {
        $this->driver = config('database')['driver'];
        $this->config = config('database')['drivers'][$this->driver];
    }

    public function connect(): DatabaseContract
    {

        $adapter = config('database')['adapters'][$this->driver];

        return (new $adapter())->loadConfigs($this->config)->conn();
    }
}
