<?php
function db_connect(){
    $db_user = "home";
    $db_pass = "ejrth17623!";
    $db_host = "125.141.139.75";
    $db_name = "user";
    $db_type = "mysql";
    $dsn = "$db_type:host=$db_host;dbname=$db_name;";

    try{
        $pdo = new PDO($dsn,$db_user,$db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
       // echo "데이터베이스 접속 성공";
    } catch (PDOException $Exception) {
        die("오류 : ".$Exception->getMessage());
    }
return $pdo;
}