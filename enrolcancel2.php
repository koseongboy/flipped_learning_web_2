<?php
session_start();
$sub = $_REQUEST['sub'];
$pass = $sub."pass";
$id = $_SESSION["id_num"];
require_once("MYDB.php");
        $pdo=db_connect();

        require_once("MYDB.php");
        $pdo= db_connect();
        
        $sqlt= "SHOW COLUMNS FROM `$sub` LIKE 'id_num'";
        $stmt = $pdo->prepare($sqlt);
        $stmt->execute();

    if($stmt->rowCount() != 0){

$pdo->beginTransaction();
$sqlt="delete from $sub where id_num=?";
    $stmhs=$pdo->prepare($sqlt);
    $stmhs->bindValue(1,$id,PDO::PARAM_STR);
    $stmhs->execute();
    $pdo->commit();
    $pdo->beginTransaction();
    }
$sqlt="delete from $pass where id_num=?";
    $stmhs=$pdo->prepare($sqlt);
    $stmhs->bindValue(1,$id,PDO::PARAM_STR);
    $stmhs->execute();
    $pdo->commit();

?>
<script>
alert("수강신청 취소가 완료되었습니다.");
history.back();
</script>