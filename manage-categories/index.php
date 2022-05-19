<?php

require_once '../helpers/auth-helper.php';
require './model.php';

init_session();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['create'])) {
        $latest = end($_SESSION['categories']);
        if ($latest) {
            array_push(
                $_SESSION['categories'],
                [ 'id' => ($latest['id'] + 1), 'name' => $_POST['name'] ]
            );
        } else {
            $_SESSION['categories'] = [
                [ 'id' => 1, 'name' => $_POST['name'] ]
            ];
        }
    }
}

require './view.php';
