<?php


$stringaDelFile = file_get_contents('todos.json');

$todos = json_decode($stringaDelFile);

header('Content-type: application/json');

echo json_encode($todos);
