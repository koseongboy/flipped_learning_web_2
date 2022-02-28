<?php

        $name=$_REQUEST["sub"];
        
        require_once("MYDB.php");
        $pdo=db_connect();
    
        $pdo->beginTransaction();
        $sql="delete from spcclass where name=?";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$name,PDO::PARAM_STR);
            $stmh->execute();
            $pdo->commit();
    
    
            $sql = "DROP TABLE IF EXISTS $name";
                $pdo->query($sql);

                
                $link=$name."link";


                $sql = "DROP TABLE IF EXISTS $link";
                $pdo->query($sql);

                $pass=$name."pass";


                $sql = "DROP TABLE IF EXISTS $pass";
                $pdo->query($sql);


?>
<script>
alert("삭제가 완료되었습니다.");
history.back();
</script>