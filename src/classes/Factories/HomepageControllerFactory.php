<?php


namespace Example\Factories;


use Example\Controllers\HomepageController;

class HomepageControllerFactory
{
    public function __invoke($container)
    {
        $model = $container->get('TaskModel');
        $view = $container->get('renderer');
        $homepageController = new HomepageController($model, $view);

        return $homepageController;
    }

}