<?php
echo "Hi there";
require("functions.php");
require("Database.php");


$config = require("config.php");
$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts");
//$comments = $db->query("SELECT * FROM comments");
//$user = $db->query("SELECT * FROM users WHERE user_id = $id");
//$db_>query("INSERT INTO posts")

echo "<ul>";
foreach ($posts as $post){
    echo"<li>" .  $post["content"] . "</li>";
}
echo"</ul>";
