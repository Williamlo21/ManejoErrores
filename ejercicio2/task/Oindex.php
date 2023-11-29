<?php
require_once "model/taskmodel.php";
require_once "view/TaskView.php";
require_once "controller/TaskController.php";

$model = new TaskModel();
$view = new TaskView();
$controller = new TaskController($model, $view);

// agregar tareas
echo ("<pre>");
$controller->addTask("Hacer las compras de mercado");
$controller->addTask("");//esto deberia lanzar una excepcion

// listar tareas
$controller->listTasks();