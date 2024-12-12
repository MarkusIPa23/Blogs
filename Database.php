<?php


class Database{
    public $pdo;
    public function __construct($config){
        dd("mysql:" . http_build_query($config, "", ";"));
        $this->pdo = new PDO($dsn); 
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    public function query($sql){
        $statament = $this->pdo->prepare($sql);
        $statament->execute();  
        return $statament;
    }
}
