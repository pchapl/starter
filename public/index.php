<?php

use App\Kernel;

$_SERVER['APP_RUNTIME_OPTIONS'] ??= [];
$_SERVER['APP_RUNTIME_OPTIONS']['dotenv_path'] = '/env/.env';

require_once dirname(__DIR__) . '/vendor/autoload_runtime.php';

return static fn (array $context) => new Kernel(
    $context['APP_ENV'],
    (bool)$context['APP_DEBUG'],
);
