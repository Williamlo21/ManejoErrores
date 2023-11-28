<?php

class TaskModel
{

  private $task = [];

  public function addTask($task)
  {
    if (empty($task)) {
      throw new InvalidArgumentException("La tarea no puede estar vacía");
    }
    $this->tasks[] = $task;
  }

  public function getTasks(){
    return $this->tasks;
  }
}
