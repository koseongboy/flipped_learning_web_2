<?php
    session_start();
    function rmdir_all($dir) {
        if (!file_exists($dir)) {
          return;
        }
        $dhandle = opendir($dir);
        if ($dhandle) {
          while (false !== ($fname = readdir($dhandle))) {
             if (is_dir( "{$dir}/{$fname}" )) {
                if (($fname != '.') && ($fname != '..')) {
                   rmdir_all("$dir/$fname");
                }
             } else {
                unlink("{$dir}/{$fname}");
             }
          }
          closedir($dhandle);
        }
        rmdir($dir);
      }


    if($_SESSION["id_num"]=="admin"){
                    require_once("MYDB.php");
                    $pdo= db_connect();
                    $sql="select * from 1subjects";
                    $stmh=$pdo->query($sql);
                    $count=$stmh->rowCount();


                    while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
                        require_once("MYDB.php");
                    $pdot= db_connect();
                        $a = $row['name'];
                        $link = $a."link";
                        $sqlt = "DROP TABLE IF EXISTS $a";
                        $pdot->query($sqlt);
                        $sqlt = "DROP TABLE IF EXISTS $link";
                        $pdot->query($sqlt);
                        require_once("MYDB.php");
                    $pdow= db_connect();
                        $pdow->beginTransaction();
                        $sqla="delete from 1subjects where name=?";
                        $stmhs=$pdow->prepare($sqla);
                        $stmhs->bindValue(1,$a,PDO::PARAM_STR);
                        $stmhs->execute();
                        $pdow->commit();

        }
        require_once("MYDB.php");
                    $pdo= db_connect();
                    $sql="select * from 2subjects";
                    $stmh=$pdo->query($sql);
                    $count=$stmh->rowCount();


                    while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
                        require_once("MYDB.php");
                    $pdot= db_connect();
                        $a = $row['name'];
                        $link = $a."link";
                        $sqlt = "DROP TABLE IF EXISTS $a";
                        $pdot->query($sqlt);
                        $sqlt = "DROP TABLE IF EXISTS $link";
                        $pdot->query($sqlt);
                        require_once("MYDB.php");
                    $pdow= db_connect();
                        $pdow->beginTransaction();
                        $sqla="delete from 2subjects where name=?";
                        $stmhs=$pdow->prepare($sqla);
                        $stmhs->bindValue(1,$a,PDO::PARAM_STR);
                        $stmhs->execute();
                        $pdow->commit();
                        require_once("MYDB.php");
                    }

                    $pdo= db_connect();
                    $sql="select * from 3subjects";
                    $stmh=$pdo->query($sql);
                    $count=$stmh->rowCount();
                    

                    while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
                        require_once("MYDB.php");
                    $pdot= db_connect();
                        $a = $row['name'];
                        $link = $a."link";
                        $sqlt = "DROP TABLE IF EXISTS $a";
                        $pdot->query($sqlt);
                        $sqlt = "DROP TABLE IF EXISTS $link";
                        $pdot->query($sqlt);
                        require_once("MYDB.php");
                    $pdow= db_connect();
                        $pdow->beginTransaction();
                        $sqla="delete from 3subjects where name=?";
                        $stmhs=$pdow->prepare($sqla);
                        $stmhs->bindValue(1,$a,PDO::PARAM_STR);
                        $stmhs->execute();
                        $pdow->commit();
                    }
                    require_once("MYDB.php");
                    $pdo= db_connect();
                    $sql="select * from spcclass";
                    $stmh=$pdo->query($sql);
                    $count=$stmh->rowCount();


                    while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
                        require_once("MYDB.php");
                    $pdot= db_connect();
                        $a = $row['name'];
                        $link = $a."link";
                        $pass - $a."pass";
                        $sqlt = "DROP TABLE IF EXISTS $a";
                        $pdot->query($sqlt);
                        $sqlt = "DROP TABLE IF EXISTS $link";
                        $pdot->query($sqlt);
                        $sqlt = "DROP TABLE IF EXISTS $pass";
                        $pdot->query($sqlt);
                        require_once("MYDB.php");
                    $pdow= db_connect();
                        $pdow->beginTransaction();
                        $sqla="delete from 1subjects where name=?";
                        $stmhs=$pdow->prepare($sqla);
                        $stmhs->bindValue(1,$a,PDO::PARAM_STR);
                        $stmhs->execute();
                        $pdow->commit();

        }
        

        


        
          
    
        require_once("MYDB.php");
                    $pdo= db_connect();
                    $sql="select * from students";
                    $stmh=$pdo->query($sql);
                    $count=$stmh->rowCount();


                    while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
                        $id_num=$row["id_num"];

                        require_once("MYDB.php");
                        $pdot= db_connect();
        $pdot->beginTransaction();  
        $sqlq="delete from students where id_num=?";
            $stmhk=$pdot->prepare($sqlq);
            $stmhk->bindValue(1,$id_num,PDO::PARAM_STR);
            $stmhk->execute();
            $pdot->commit();
                    
          
          
          }


    }
?>
<script>
  alert("초기화가 완료되었습니다.");
  history.back();
</script>