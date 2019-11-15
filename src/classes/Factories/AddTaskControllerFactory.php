<?php

namespace Example\Factories;

use Example\Controllers\AddTaskController;

class AddTaskControllerFactory
{
    public function __invoke($container)
    {
        $model = $container->get('TaskModel');
        $view = $container->get('renderer');
        $addTaskController = new AddTaskController($model, $view);

        return $addTaskController;
    }

}