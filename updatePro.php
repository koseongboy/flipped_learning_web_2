<?php
$id_num=$_POST["id_num"];
$pw=$_POST["pw"];
$name=$_POST["name"];
require_once("MYDB.php");
$pdo=db_connect();

try {
    $pdo->beginTransaction();
    $sql="update students set pw=?, name=? where id_num=?";
        $stmh=$pdo->prepare($sql);
        $stmh->bindValue(1,$pw,PDO::PARAM_STR);
        $stmh->bindValue(2,$name,PDO::PARAM_STR);
        $stmh->bindValue(3,$id_num,PDO::PARAM_STR);
        $stmh->execute();
        $pdo->commit();
        ?>
        <script>
    alert("데이터가 수정되었습니다. 다시 로그인해주세요");
    history.back();
</script>
<?php
header ("Location:logout.php");
} catch (PDOException $Exception) {
    $pdo->rollBack();
    echo "오류 :".$Exception->getMessage();
}
?>