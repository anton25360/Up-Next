<?php

namespace Example\Controllers;

use Example\Models\TaskModel;
use Slim\Http\Request;
use Slim\Http\Response;

class AddTaskController
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
        $input = $_GET['newTask']; //get text input from HTTP GET
        $this->model->addToDB($input);
        return $response->withRedirect('/');
    }


}