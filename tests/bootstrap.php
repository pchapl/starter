<?php

require dirname(__DIR__) . '/vendor/autoload.php';

$frameworkBootstrap = dirname(__DIR__) . '/framework/tests/bootstrap.php';
if (file_exists($frameworkBootstrap)) {
    require $frameworkBootstrap;
}
