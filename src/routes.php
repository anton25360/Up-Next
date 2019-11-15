<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'HomepageController'); //view incomplete tasks

    $app->get('/done', 'CompletedController'); //view completed tasks

    $app->get('/mark/{id}', 'MarkTaskController'); //mark task as done & redirect to home

    $app->get('/add','AddTaskController'); //add task to db and redirect to home

    $app->get('/delete/{id}','DeleteTaskController'); //remove tasks from db and redirect to completed tasks

};
