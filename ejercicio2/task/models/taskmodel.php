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
    try {
      $this->db = Database::connect();
    }
    catch (Exception $e) {
      echo "Error de conexión: " . $e->getMessage();
      
      exit; 
    }
  }
  public function guardar(){
    $sql = "INSERT INTO task VALUES (NULL, '{$this->getTask()}')";
    $save = $this->db->query($sql);
  }
  public function getAll(){
    $tareas = $this->db->query("SELECT * FROM task;");
    return $tareas;
  }
  public function getOne()
  {
    $tarea = $this->db->query("SELECT * FROM task WHERE id={$this->id};");
    return $tarea->fetch_object();
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
  public function update(){
    $sql = "UPDATE task SET task='{$this->getTask()}' WHERE id={$this->id}";
    $save = $this->db->query($sql);
    $result = false;
    if ($save) {
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
