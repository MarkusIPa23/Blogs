<?php

require 'views/posts/create.view.php';
require 'Validator.php';

if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $errors = [];
    if (!Validator::string($_POST["content"], max: 50)){
    $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
}
    if (empty($errors)) {
    $sql = "

    INSERT INTO posts (content)
    VALUES
    (:content);
    
    ";
    
    
    $params = ["content" => $_POST["content"]];
    $db->query($sql, $params);
    header("Location: /");
    exit();
    }
}