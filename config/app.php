<?php

return [
    'debug' => true,
    'factories' => require_once(__DIR__ . '/factories.php'),
    'routes' => require_once(__DIR__ . '/routes.php'),
    'smarty' => require_once(__DIR__ . '/smarty.php'),
    'db' => require_once(__DIR__ . '/db.php'),
];