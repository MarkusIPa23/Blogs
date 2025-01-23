<?php

if(!isset($_GET["id"]) || $_GET["id"] == "") {
    redirectIfNotFound();
}

    $sql = "SELECT * FROM posts WHERE id = :id";
    $params = ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetchAll();

    if(!$post) {
        redirectIfNotFound();
    }

require "view/posts/show.view.php";