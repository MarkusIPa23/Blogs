<?php
require "functions.php";
require "Database.php";


$config = include_once("config.php");
$db = new Database($config["database"]);

require "router.php";