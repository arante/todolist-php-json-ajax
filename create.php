<?php

$task = $_POST['task'];

$todos = file_get_contents('assets/todos.json');
$todos = json_decode($todos, true);

array_push($todos, array('task' => $task, 'done' => false));

$file = fopen('assets/todos.json', 'w');
fwrite($file, json_encode($todos));
fclose($file);

$id = count($todos) - 1;

echo $id;
