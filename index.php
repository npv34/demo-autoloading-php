<?php

require __DIR__ . '/vendor/autoload.php';

$container = new DI\Container();
try {
    $userController = $container->get(\App\Controller\UserController::class);
} catch (\DI\DependencyException $e) {
    echo $e->getMessage();
} catch (\DI\NotFoundException $e) {
    echo $e->getMessage();
}

$userController->index();
