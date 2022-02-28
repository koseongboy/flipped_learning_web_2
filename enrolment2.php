<?php
    session_start();
    $sub=$_REQUEST["sub"];
$pass=$sub."pass";
    require_once("MYDB.php");
$pdo=db_connect();
$s=0;

    
         try {
            $pdo->beginTransaction();
            $sqlt="insert into $pass (id_num)
                values(?)";
                $stmhs=$pdo->prepare($sqlt);
                $stmhs->bindValue(1,$_SESSION["id_num"],PDO::PARAM_STR);
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