<?php
$sub = $_REQUEST["sub"];
$link = $sub."link";
$grade = substr($sub,0,1);
$grade = $grade."subjects";
$kk = "아직 업로드되지 않았습니다.";
$cla = $_REQUEST["cla"];
$name = $cla."강";
$name1 = $cla."강제목";
$kkk = "1";
$x = " ";
require_once("MYDB.php");
$pdo=db_connect();
$pdo->beginTransaction();
    $sql="update $grade set $name1=? where name=?";
        $stmh=$pdo->prepare($sql);
        $stmh->bindValue(1,$kk,PDO::PARAM_STR);
        $stmh->bindValue(2,$sub,PDO::PARAM_STR);
        $stmh->execute();
        $pdo->commit();
 
        $pdo->beginTransaction();
            $sql="update $link set $name=? where idx=?";
                $stmh=$pdo->prepare($sql);
                $stmh->bindValue(1,$x,PDO::PARAM_STR);
                $stmh->bindValue(2,$kkk,PDO::PARAM_STR);
  
                $stmh->execute();
                $pdo->commit();
?>
<script>
    alert("삭제가 완료되었습니다.");
    history.back();
</script>