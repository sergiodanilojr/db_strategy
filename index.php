<?php
require_once __DIR__ . '/vendor/autoload.php';

use Framework\Core\Database\Database;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__)->load();

$conn = (new Database())->connect();

dd($conn);