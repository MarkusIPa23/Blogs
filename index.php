<?php
echo "<h1>Blogs</h1>";
require("functions.php");
require("Database.php");


$config = require("config.php");
$db = new Database($config["database"]);

//$comments = $db->query("SELECT * FROM comments");
//$user = $db->query("SELECT * FROM users WHERE user_id = $id");
//$db_>query("INSERT INTO posts")

$sql = "SELECT * FROM posts";
$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
    //dd("SELECT * FROM posts WHERE content LIKE '%" . $_GET["search_query"] . "%';");
    //dd("SELECT * FROM posts WHERE content LIKE '%" . $_GET["search_query"] . "%';");
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE content LIKE :search_query;";
    $params = ["search_query" => $search_query];
}//else{
    //$posts = $db->query("SELECT * FROM posts")->fetchALL();   
//}

$posts = $db->query($sql, $params)->fetchAll();


echo "<form>";
echo "<input name='search_query' />";
echo "<button>Meklet</button>";
echo "</form>";


echo "<ul>";
foreach ($posts as $post){
    echo"<li>" .  $post["content"] . "</li>";
}
echo"</ul>";
