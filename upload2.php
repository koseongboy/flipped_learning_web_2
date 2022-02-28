<?php
$sub = $_REQUEST["sub"];
$cla = $_REQUEST["cla"];
$link = $_REQUEST["link"];
$sub1 = $sub."link";

$link1 = "http://www.youtube.com/embed/".$link;
$title = $_REQUEST["title"];
$name = $cla."강";

$name2 = $name."제목";


                require_once("MYDB.php");
                $pdo= db_connect();
                
                $sqlt= "SHOW COLUMNS FROM `$sub` LIKE '$name'";
                $stmt = $pdo->prepare($sqlt);
                $stmt->execute();

            if($stmt->rowCount() == 0){
                require_once("MYDB.php");
                $pdo= db_connect();
                $pdo->beginTransaction();
                $sql="alter table $sub add $name CHAR(30) null";
                $stmh=$pdo->prepare($sql);
                $stmh->execute();
                $pdo->commit();

                $name1=$name."시작";
                $pdo->beginTransaction();
                $sql="alter table $sub add $name1 CHAR(30) null";
                $stmh=$pdo->prepare($sql);
                $stmh->execute();
                $pdo->commit();

                $pdo->beginTransaction();
                $sql="alter table $sub1 add $name TEXT null";
                $stmh=$pdo->prepare($sql);
                $stmh->execute();
                $pdo->commit();
                
                
               
                
                



                    }
                    $sqlt= "SHOW COLUMNS FROM `spcclass` LIKE '$name2'";
                    $stmt = $pdo->prepare($sqlt);
                    $stmt->execute();
                    if($stmt->rowCount() == 0){

                    $pdo->beginTransaction();
                $sql="alter table spcclass add $name2 CHAR(30) null DEFAULT '아직 업로드되지 않았습니다.'";
                $stmh=$pdo->prepare($sql);
                $stmh->execute();
                $pdo->commit();



                    }
$k = "1";
                    $pdo->beginTransaction();
                    $sql="update spcclass set $name2=? where name=?";
                        $stmh=$pdo->prepare($sql);
                        $stmh->bindValue(1,$title,PDO::PARAM_STR);
                        $stmh->bindValue(2,$sub,PDO::PARAM_STR);
                        $stmh->execute();
                        $pdo->commit();
                        $pdo->beginTransaction();
                    $sql="update $sub1 set $name=? where idx=?";
                        $stmh=$pdo->prepare($sql);
                        $stmh->bindValue(1,$link1,PDO::PARAM_STR);
                        $stmh->bindValue(2,$k,PDO::PARAM_STR);
                        $stmh->execute();
                        $pdo->commit();

?>
<script>
    alert("업로드가 완료되었습니다.");
    history.back();
</script>
