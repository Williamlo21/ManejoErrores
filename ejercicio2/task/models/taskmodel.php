<?php

require_once "config/db.php";
class TaskModel

{
  public $task;
  public $id;
  public $db;
  
  private $tasks = [];

  public function __construct()
  {
    $this->db = Database::connect();
  }

  public function guardar(){
    $sql = "INSERT INTO task VALUES (NULL, '{$this->getTask()}')";
    $save = $this->db->query($sql);
  }
  public function getAll(){
    $tareas = $this->db->query("SELECT * FROM task;");
    return $tareas;
  }
  public function delete()
  {
    $sql = "DELETE FROM task WHERE id={$this->id}";
    $delete = $this->db->query($sql);

    $result = false;
    if ($delete) {
      $result = true;
    }
    return $result;
  }
  
  public function getTask()
  {
    return $this->task;
  }
  public function setTask($task)
  {
    $this->task = $task;

    return $this;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }
}
