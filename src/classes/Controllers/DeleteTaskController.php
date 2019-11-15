<?php

namespace Example\Controllers;

use Example\Models\TaskModel;
use Slim\Http\Request;
use Slim\Http\Response;

class DeleteTaskController
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
        $input = $args['id']; //gets id from route (args)
        $this->model->removeFromDB($input);
        return $response->withRedirect('/done');
    }


}