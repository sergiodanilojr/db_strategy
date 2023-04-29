<?php
require_once __DIR__ . '/vendor/autoload.php';

use Framework\Core\Database\Database;
use Framework\Support\Config;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__)->load();


$config = new Config;
$dbDriver = $config->load('database');

$conn = (new Database('pgsql'))->connect();

dd($conn);