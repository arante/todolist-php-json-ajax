<?php

$id = $_POST['id'];

$todos = file_get_contents('assets/todos.json');
$todos = json_decode($todos, true);

array_splice($todos, $id, 1);

$file = fopen('assets/todos.json', 'w');
fwrite($file, json_encode($todos));
fclose($file);
