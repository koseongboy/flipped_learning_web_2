<?php
$setting="register";
$pass=$_REQUEST['pass'];
$o="1";
$x="0";
require_once("MYDB.php");
 $pdo=db_connect();
            try {
                
                

                    if($pass=="1"){
                        $pdo->beginTransaction();
                        $sql="update system set pass=? where setting=?";
                            $stmh=$pdo->prepare($sql);
                            $stmh->bindValue(1,$x,PDO::PARAM_STR);
                            $stmh->bindValue(2,$setting,PDO::PARAM_STR);
                            $stmh->execute();
                            $pdo->commit();
                    }
                    if($pass=="0"){
                        $pdo->beginTransaction();
                        $sql="update system set pass=? where setting=?";
                            $stmh=$pdo->prepare($sql);
                            $stmh->bindValue(1,$o,PDO::PARAM_STR);
                            $stmh->bindValue(2,$setting,PDO::PARAM_STR);
                            $stmh->execute();
                            $pdo->commit();
                        
                    }
                    
                
            } catch (PDOException $Exception) {
                echo "오류 :".$Exception->getMessage();
            }
?>
<script>
alert("전환되었습니다.");
location.href = "inputing.php";
</script>