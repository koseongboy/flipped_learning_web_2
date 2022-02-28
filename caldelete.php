<?php
    $no=$_REQUEST["num"];
    require_once("MYDB.php");
    $pdor = db_connect();
    $asd="SELECT * FROM schedule WHERE no=$no";
    $stmhs = $pdor->query($asd);


while($row = $stmhs->fetch(PDO::FETCH_ASSOC)){
    $name=$row["name"];
    $name=str_replace(" ", "_", $name);
    $sql = "DROP TABLE IF EXISTS $name";
    $pdor->query($sql);
}
        
    require_once("MYDB.php");
    $pdo = db_connect();
        
     try{
       $pdo->beginTransaction();
       $sql = "delete from user.schedule where no = ?";   
       $stmh = $pdo->prepare($sql);
       $stmh->bindValue(1,$no,PDO::PARAM_STR);
       $stmh->execute();
       $pdo->commit();
       header("Location:http://125.141.139.75/cal.php");
        
       } catch (Exception $ex) {
                $pdo->rollBack();
                print "오류: ".$Exception->getMessage();
       }
  ?>
