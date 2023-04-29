<?php

namespace Framework\Support;

class Config
{
    protected $basePath = 'configs';

    public function load(string $path)
    {
        $file = __DIR__.'/../../'.$this->basePath."/{$path}.php";
        return require $file;
    }
}