<?php
$id_num=$_REQUEST["id_num"];


require_once("MYDB.php");
$pdo=db_connect();

try {
    $sql="select * from 1subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             $s=$row["name"];
            $pdo->beginTransaction();
            $sqlt="delete from $s where id_num=?";
                $stmhs=$pdo->prepare($sqlt);
                $stmhs->bindValue(1,$id_num,PDO::PARAM_STR);
                $stmhs->execute();
                $pdo->commit();
         }
                $sql="select * from 2subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             $s=$row["name"];
            $pdo->beginTransaction();
            $sqlt="delete from $s where id_num=?";
                $stmhs=$pdo->prepare($sqlt);
                $stmhs->bindValue(1,$id_num,PDO::PARAM_STR);
                $stmhs->execute();
                $pdo->commit();
         }
                $sql="select * from 2subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             $s=$row["name"];
            $pdo->beginTransaction();
            $sqlt="delete from $s where id_num=?";
                $stmhs=$pdo->prepare($sqlt);
                $stmhs->bindValue(1,$id_num,PDO::PARAM_STR);
                $stmhs->execute();
                $pdo->commit();
         }
            
    
    $pdo->beginTransaction();  
    $sql="delete from students where id_num=?";
        $stmh=$pdo->prepare($sql);
        $stmh->bindValue(1,$id_num,PDO::PARAM_STR);
        $stmh->execute();
        $pdo->commit();
        
        header("Location:http://125.141.139.75/ddpwk.php");
} catch (PDOException $Exception) {

    $pdo->rollBack();
    echo "오류 :".$Exception->getMessage();
}
?>