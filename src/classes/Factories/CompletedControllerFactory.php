<?php


namespace Example\Factories;


use Example\Controllers\CompletedController;

class CompletedControllerFactory
{
    public function __invoke($container)
    {
        $model = $container->get('TaskModel');
        $view = $container->get('renderer');
        $completedController = new CompletedController($model, $view);

        return $completedController;
    }

}