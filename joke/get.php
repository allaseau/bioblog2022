<?php

require './model.php';

$jokeIndex = array_rand($jokes);

$theJoke = $jokes[$jokeIndex];

header('Content-Type: application/json; charset=UTF-8');

echo json_encode($theJoke);