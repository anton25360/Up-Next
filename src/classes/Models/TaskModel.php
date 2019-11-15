<?php

namespace Example\Models;

class taskModel
{
    private $db;

    /**
     * taskModel constructor.
     * @param $db
     */
    public function __construct($db)
    {
        $this->db = $db;
    }

    //get incomplete tasks
    public function getTasks()
    {
        $query = $this->db->query('SELECT `name`,`id` FROM `tasks` WHERE `done` =0');
        $tasks = $query->fetchAll();
        return $tasks;
    }

    //get complete tasks
    public function getCompletedTasks()
    {
        $query = $this->db->query('SELECT `name`,`id` FROM `tasks` WHERE `done` =1');
        $tasks = $query->fetchAll();
        return $tasks;
    }

    //mark task as completed
    public function markAsCompleted($id)
    {
        $query = $this->db->query("UPDATE `tasks` SET done = 1 WHERE id = '$id' ");
        $tasks = $query->fetchAll();
        return $tasks;
    }

    //add task to DB
    public function addToDB($name)
    {
        $query = $this->db->query("INSERT INTO `tasks`(`name`,done) VALUES ('$name',0)");
        $tasks = $query->fetchAll();
        return $tasks;
    }

    //remove task from DB
    public function removeFromDB($id)
    {
        $query = $this->db->query("DELETE FROM tasks WHERE id= '$id'");
        $tasks = $query->fetchAll();
        return $tasks;
    }

}
