<?php

$todos = file_get_contents('assets/todos.json');
$todos = json_decode($todos, true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>Todo List</title>

	<link rel="stylesheet" type="text/css" href="assets/css/todos.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">

</head>
<body>

    <div id="container">

        <h1>To-Do List <i class="fa fa-plus"></i></h1>

        <input type="text" placeholder="Add New Todo">

        <ul>
        <?php

        foreach ($todos as $key => $todo) {

            if ($todo['done'] == false)
                echo '<li id='.$key.'><span><i class="fa fa-trash"></i></span>'.$todo['task'].'</li>';
            else
                echo '<li id='.$key.' class="completed"><span><i class="fa fa-trash"></i></span>'.$todo['task'].'</li>';
        }

        ?>
        </ul>

    </div> <!-- /#container -->

    <!-- Imports jQuery -->
	<script type="text/javascript" src="assets/js/lib/jquery-2.1.4.min.js"></script>

    <!-- Imports custom JavaScript -->
    <script type="text/javascript" src="assets/js/todos.js"></script>

</body>
</html>
