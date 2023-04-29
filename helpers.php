<?php

use Framework\Support\Config;

if (!function_exists('env')) {
    function env(?string $key = null, $default = null)
    {

        if(! $key){
            return $_ENV;
        }
        
        return array_key_exists($key, $_ENV) ? $_ENV[$key] : $default;
    }
}

if(! function_exists('config')){
    function config(string $config){
        return (new Config)->load($config);
    }
}
