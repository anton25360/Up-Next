<?php

namespace Example\Controllers;

use Example\Models\TaskModel;
use Slim\Http\Request;
use Slim\Http\Response;

class HomepageController
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

        //get tasks from db and populate homepage
        $tasks = $this->model->getTasks();
        $this->view->render($response, 'homepage.phtml', ['tasks' => $tasks]);


//
//        //get cookie val and pass it into here to mark task as completed
////        $input = $_GET['taskID'];
//        $input = $args['id'];
//        $tasks = $this->model->markAsCompleted($input);
//        $this->view->render($response, 'completed.phtml', ['tasks' => $tasks]);
//
////        return $response->withRedirect('/');


    }


}