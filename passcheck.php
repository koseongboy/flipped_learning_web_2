<?php
$id = $_REQUEST['id'];
$sub = $_REQUEST['sub'];
$pass = $sub."pass";
require_once("MYDB.php");
$pdo=db_connect();

    $pdo->beginTransaction();
    $sql="insert into $sub(id_num)
        values(?)";
        $stmh=$pdo->prepare($sql);
        $stmh->bindValue(1,$id,PDO::PARAM_STR);
        $stmh->execute();
        $pdo->commit();

        $pdo->beginTransaction();
            $sqlt="delete from $pass where id_num=?";
                $stmhs=$pdo->prepare($sqlt);
                $stmhs->bindValue(1,$id,PDO::PARAM_STR);
                $stmhs->execute();
                $pdo->commit();
?>
<script>
location.href ="http://125.141.139.75/pass.php?sub=<?=$sub?>";
</script>
