<?php

if(isset($_POST['newTodo'])) {

  // $newTodo = [
  //   'name' => $_POST['newTodo'],
  //   'completed' => false,
  // ];

  $todosJSON = file_get_contents('todos.json');

  $todos = json_decode($todosJSON);

  // var_dump($_POST['newTodo']);

  // $key = array("name", "completed");
  // $value = array($_POST['newTodo'], false);

  // $newTodo = array_combine($key, $value);
  // var_dump($newTodo);

  $todos[] = $_POST['newTodo'];

  // var_dump($todos);

  $newTodoJSON = json_encode($todos);

  file_put_contents('todos.json', $newTodoJSON);


} else {

  $JSONtoString = file_get_contents('todos.json');
  
  $todos = json_decode($JSONtoString);



  
  header('Content-type: application/json');
  
  echo json_encode($todos);

}
