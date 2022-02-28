<?php
$grade=$_REQUEST['grade'];
$class=$_REQUEST['class'];
$num_end=$_REQUEST['num'];
$pw="1111";
require_once("MYDB.php");
$pdo=db_connect();

for($i="1";$i<=$num_end;$i++){
    $num = sprintf('%02d',$i);
$id_num=$grade.$class.$num;

$pdo->beginTransaction();
$sql="insert into students(id_num,pw)
    values(?,?)";
    $stmh=$pdo->prepare($sql);
    $stmh->bindValue(1,$id_num,PDO::PARAM_STR);
    $stmh->bindValue(2,$pw,PDO::PARAM_STR);
    $stmh->execute();
    $pdo->commit();
}
?>
<script>
alert("회원 입력이 완료되었습니다.");
history.back();
</script>