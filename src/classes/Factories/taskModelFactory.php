<?php

namespace Example\Factories;

use Example\Models\TaskModel;

class taskModelFactory
{
    public function __invoke($container)
    {
        $db = $container->get('db');
        return new TaskModel($db);
    }

}