<?php

require_once "../config/database.php";

function getArticles() {
    global $db_default_connection; 
    $query = "SELECT id, title, content, creation_date FROM articles";
    $stmt = $db_default_connection ->prepare($query);
    $stmt->execute();
    return $stmt;
}

function getMappedArticles() {
    $stmt = getArticles();
    $count = $stmt->rowCount();

    $articles = [];

    if ($count > 0) {
        while ($article = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $mapped_article = [
                "id" => $article["id"],
                "title" => $article["title"],
                "content" => $article["content"],
                "creationDate" => date_create($article["creation_date"])
            ];
        }
    }
}