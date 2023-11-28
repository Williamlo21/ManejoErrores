<?php

class TaskController{
    private $model;
    private $view;

    public function __construct($model, $view)
    {
        $this->model= $model;
        $this->view = $view;
    }

    public function addTask($task){
        try{
            $this->model->addTask($task);
        }catch (InvalidArgumentException $e){
            echo "Error: ". $e->getMessage() . PHP_EOL;
        }
    }

    public function listTasks(){
        $task = $this->model->getTasks();
        $this->view->displayTask($task);
    }
}
// pagina 6 primera imagen
