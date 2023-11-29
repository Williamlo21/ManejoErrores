<?php
include_once "models/taskmodel.php";

class TaskController{

    public function crear(){
        require_once "views/task/crear.php";
    }
    public function guardar(){
        $task = isset($_POST['task']) ? $_POST['task'] : false;

        try{
            if ($task){
                $tarea = new TaskModel;
                $tarea->setTask($task);
                $tarea->guardar();
                $tasks = $tarea->getAll();
                require_once "views/task/index.php";
            }else{
                throw new Exception("La tarea no puede estar vacía");
            }
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }
    public function modificar(){
        $id = isset($_GET['id']) ? $_GET['id'] : false;
        try {
            if ($id) {
                $tarea = new TaskModel;
                $tarea->setId($id);
                $tar = $tarea->getOne();
                // var_dump(gettype($tar));
                var_dump($tar->task);
                die();
                require_once "views/task/actualizar.php";
            } else {
                throw new Exception("No se ha pasado ID");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
    }
    public function actualizar(){
        $id = isset($_GET['id']) ? $_GET['id'] : false;
        try {
            if ($id) {
                $tarea = new TaskModel;
                $tarea->setId($id);
                $tarea->update();
                $tasks = $tarea->getAll();
                require_once "views/task/index.php";
            } else {
                throw new Exception("No se ha pasado ID");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function listTask(){
        $tarea = new TaskModel;
        $tasks = $tarea->getAll();
        require_once "views/task/index.php";
    }
    public function eliminar(){
        $id = isset($_GET['id']) ? $_GET['id'] : false;
        try{
            if ($id){
                $tarea = new TaskModel;
                $tarea->setId($id);
                $tarea->delete();
                $tasks = $tarea->getAll();
                require_once "views/task/index.php";
            }else{
                throw new Exception("No se ha pasado ID");
            }
        }catch (Exception $e){
            echo $e->getMessage();
        }

    }
}
