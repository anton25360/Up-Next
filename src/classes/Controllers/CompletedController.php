<?php

namespace Example\Controllers;

use Example\Models\TaskModel;
use Slim\Http\Request;
use Slim\Http\Response;

class CompletedController
{

    private $model;
    private $view;

    /**
     * HomepageController constructor. taskMode
     * @param $model
     * @param $view
     */
    public function __construct(TaskModel $model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {

        $tasks = $this->model->getCompletedTasks();
        $this->view->render($response, 'completed.phtml', ['tasks' => $tasks]);

    }


}