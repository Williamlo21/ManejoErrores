<?php

class TaskView{
    public function displayTask($tasks){
        echo "Lista de tareas: ". PHP_EOL;
        foreach ($tasks as $task){
            echo "- $task". PHP_EOL;
        }
    }
}