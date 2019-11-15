<?php


namespace Example\Factories;


use Example\Controllers\MarkTaskController;

class MarkTaskControllerFactory
{
    public function __invoke($container)
    {
        $model = $container->get('TaskModel');
        $view = $container->get('renderer');
        $markTaskController = new MarkTaskController($model, $view);

        return $markTaskController;
    }

}