<?php

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function getSelfUrl() {
    return htmlspecialchars(dirname($_SERVER['PHP_SELF']));
}
