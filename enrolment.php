<?php
    session_start();
    $sub=$_REQUEST["sub"];

    require_once("MYDB.php");
$pdo=db_connect();
$s=0;

    
         try {
            $pdo->beginTransaction();
            $sqlt="insert into $sub (id_num,1강,2강,3강,4강,5강,6강,7강,8강,9강,10강)
                values(?,?,?,?,?,?,?,?,?,?,?)";
                $stmhs=$pdo->prepare($sqlt);
                $stmhs->bindValue(1,$_SESSION["id_num"],PDO::PARAM_STR);
                $stmhs->bindValue(2,$s,PDO::PARAM_STR);
                $stmhs->bindValue(3,$s,PDO::PARAM_STR);
                $stmhs->bindValue(4,$s,PDO::PARAM_STR);
                $stmhs->bindValue(5,$s,PDO::PARAM_STR);
                $stmhs->bindValue(6,$s,PDO::PARAM_STR);
                $stmhs->bindValue(7,$s,PDO::PARAM_STR);
                $stmhs->bindValue(8,$s,PDO::PARAM_STR);
                $stmhs->bindValue(9,$s,PDO::PARAM_STR);
                $stmhs->bindValue(10,$s,PDO::PARAM_STR);
                $stmhs->bindValue(11,$s,PDO::PARAM_STR);
                $stmhs->execute();
                $pdo->commit();
            } catch(PDOException $Exception){
                ?>
            <script>
            alert("이미 수강신청 되어있습니다.");
            </script>
            <?php
            }
            
    

?>
<script>
alert("수강신청이 완료되었습니다.");
history.back();
</script>