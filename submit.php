<?php
session_start();
$datesring = date("Y-m-d G:i",time());
$id_num=$_SESSION["id_num"];
$sub=$_POST["sub"];
$cla=$_POST["cla"];
$time=$_POST["time"];
$aa=$time."분/".$datesring;
print_r($id_num);
require_once("MYDB.php");
$pdo=db_connect();

try {
    $pdo->beginTransaction();
    $sql="update $sub set $cla=? where id_num=?";
        $stmh=$pdo->prepare($sql);
        $stmh->bindValue(1,$aa,PDO::PARAM_STR);
        $stmh->bindValue(2,$id_num,PDO::PARAM_STR);
        $stmh->execute();
        $pdo->commit();
        ?>
        <script>
            alert ("진도율이 저장되었습니다.");
            location.href="1lecturelist.php";
            </script>
            <?php 
 } catch (PDOException $Exception) {
    $pdo->rollBack();
    echo "오류 :".$Exception->getMessage();
}
?>