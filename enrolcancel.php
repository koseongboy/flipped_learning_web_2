<?php
session_start();
$sub = $_REQUEST['sub'];
$id = $_SESSION["id_num"];
require_once("MYDB.php");
        $pdo=db_connect();



$pdo->beginTransaction();
$sqlt="delete from $sub where id_num=?";
    $stmhs=$pdo->prepare($sqlt);
    $stmhs->bindValue(1,$id,PDO::PARAM_STR);
    $stmhs->execute();
    $pdo->commit();

?>
<script>
alert("수강신청 취소가 완료되었습니다.");
history.back();
</script>