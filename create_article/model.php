<?php

require_once "../config/database.php";

function insertArticle($article) {
    global $db_default_connection;
    $query = "INSERT INTO articles(title, content, creation_date) VALUES(:title, :content, now())"; 
    $stmt = $db_default_connection ->prepare($query);
    $stmt ->execute($article);
    return $stmt;
}