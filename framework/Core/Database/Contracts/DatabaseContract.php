<?php

namespace Framework\Core\Database\Contracts;

interface DatabaseContract
{
    public function loadConfigs(array $configs):self;

    public function conn():self;
}