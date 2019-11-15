<?php

namespace Example\Factories;

use Example\Controllers\DeleteTaskController;

class DeleteTaskControllerFactory
{
    public function __invoke($container)
    {
        $model = $container->get('TaskModel');
        $view = $container->get('renderer');
        $deleteTaskController = new DeleteTaskController($model, $view);

        return $deleteTaskController;
    }

}