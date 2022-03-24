<?php

require "model.php";
require "../helpers/form-helper.php";
require "../helpers/auth-helper.php";

function validateInputs($inputs) {
    $errors = [];
    if(empty(trim($inputs['title']))) {
       $errors['title'] = 'Title is required';
    }
    if(empty(trim($inputs['content']))) {
        $errors['content'] = 'Content is required';
    }
    return $errors;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $validations = validateInputs($_POST);
    
    $article = [
        'title' => sanitize_input($_POST['title']),
        'content' => sanitize_input($_POST['content'])
    ];

    if(sizeof($validations) === 0) {
        try {
            insertArticle($article);
            redirect(' ../articles');
        }
        catch (PDOException $exception) {
            echo "Connection error:".$exception->getMessage();
        }
    }
}

require "view.php";