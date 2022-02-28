<?php
session_start();
$no = $_REQUEST["num"];
    require_once("MYDB.php");
    $pdo=db_connect();


    $asd="SELECT * FROM schedule WHERE no=$no";
    $stmhs = $pdo->query($asd);

    while($row = $stmhs->fetch(PDO::FETCH_ASSOC)){
        $name=$row["name"];
        try{
        $pdo->beginTransaction();
        $sql="insert into $name (id_num,student)
            values(?,?)";
            $stmht=$pdo->prepare($sql);
                    $stmht->bindValue(1,$_SESSION["id_num"],PDO::PARAM_STR);
                    $stmht->bindValue(2,$_SESSION["name"],PDO::PARAM_STR);
                    $stmht->execute();
                    $pdo->commit();
                } catch (Exception $Exception) {
                    $pdo->rollBack();
                    print "오류: ".$Exception->getMessage();
           }
        }
?>
<script>
alert ("신청되었습니다");
history.back();
</script>