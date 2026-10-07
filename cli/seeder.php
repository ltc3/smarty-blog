<?php
declare(strict_types=1);

use App\Seeder;

define('WEBROOT', __DIR__);
define('DOCROOT', dirname(WEBROOT));

require_once DOCROOT . '/vendor/autoload.php';

$config = require_once(DOCROOT . '/config/app.php');

$app = new Seeder($config);
$app->run();