<?php
$content = $_REQUEST['content'];
require_once("MYDB.php");
$pdo=db_connect();
$pdo->beginTransaction();
$sqlt="delete from main_notice where content=?";
    $stmhs=$pdo->prepare($sqlt);
    $stmhs->bindValue(1,$content,PDO::PARAM_STR);
    $stmhs->execute();
    $pdo->commit();
?>
<script>
alert("삭제되었습니다.");
history.back();
</script>