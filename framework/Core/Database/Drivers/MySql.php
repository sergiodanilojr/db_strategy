<?php

namespace Framework\Core\Database\Drivers;

use Framework\Core\Database\Contracts\DatabaseContract;

class MySql implements  DatabaseContract
{
    protected array $configs = [] ;

    public function loadConfigs(array $configs):self
    {
        $this->configs = $configs;
        return $this;
    }

    public function conn():self
    {
        echo "Estou conectando no banco {$this->configs['database']} através do driver MySQL...";
        return $this;
    }
}