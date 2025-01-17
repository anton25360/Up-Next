<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    // view renderer
    $container['renderer'] = function ($c) {
        $settings = $c->get('settings')['renderer'];
        return new \Slim\Views\PhpRenderer($settings['template_path']);
    };

    // monolog
    $container['logger'] = function ($c) {
        $settings = $c->get('settings')['logger'];
        $logger = new \Monolog\Logger($settings['name']);
        $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
        $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
        return $logger;
    };

    $container['db'] = function(){
        $db = new PDO('mysql:host=127.0.0.1;dbname=todo', 'root', 'password');
        $db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $db;
    };

    $container['TaskModel'] = new \Example\Factories\taskModelFactory();

    $container['HomepageController'] = new \Example\Factories\HomepageControllerFactory();
    $container['CompletedController'] = new \Example\Factories\CompletedControllerFactory();
    $container['MarkTaskController'] = new \Example\Factories\MarkTaskControllerFactory();
    $container['AddTaskController'] = new \Example\Factories\AddTaskControllerFactory();
    $container['DeleteTaskController'] = new \Example\Factories\DeleteTaskControllerFactory();
};
