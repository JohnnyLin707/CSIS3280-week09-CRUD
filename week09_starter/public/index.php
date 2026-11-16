<?php
require_once __DIR__ . '/../vendor/autoload.php';

session_start();

use CSIS3280\Application;
$app = new Application();
$app->run();
