<?php
  $name=$_REQUEST["name"];
  $yy=$_REQUEST["yy"];
  $mm=$_REQUEST["mm"];
  $dd=$_REQUEST["dd"];
  $date = $yy."-".$mm."-".$dd;
 require_once("MYDB.php");
 $pdo = db_connect();
    try{
    $pdo->beginTransaction();   
    $sql = "insert into user.schedule(name, frdt, todt, insdt)";
    $sql.= "values(?, ?, ?, now())"; 
    $stmh = $pdo->prepare($sql); 
    $stmh->bindValue(1, $name, PDO::PARAM_STR);  
    $stmh->bindValue(2, $date, PDO::PARAM_STR);   
    $stmh->bindValue(3, $date, PDO::PARAM_STR);
    
    $stmh->execute();
    $pdo->commit(); 
   
   
    require_once("MYDB.php");
    $pdos = db_connect();

    $pdos->beginTransaction();
  
      $name = str_replace(" ", "_", $name);

        $sql = "CREATE TABLE $name (
            id_num INT(5) PRIMARY KEY, 
            student CHAR(10)
            )";
            $pdos->query($sql);
            header("Location:http://125.141.139.75/cal.php");
          } catch (PDOException $Exception) {
            
             print "오류: ".$Exception->getMessage();
          }
  ?>
    