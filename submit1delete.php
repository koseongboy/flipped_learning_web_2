<!DOCTYPE html>
<head>
<meta charset = "UTF-8">
</head>
<body>
  <?php
    $num=$_REQUEST["num"];
    $s=$_POST["content"];
    $zipa=str_replace(" ", "_", $s);
    require_once("MYDB.php");
    $pdo = db_connect();
        
     try{
      $pdo->beginTransaction();
      $sql = "delete from user.submit where num = ?";   
      $stmh = $pdo->prepare($sql);
      $stmh->bindValue(1,$num,PDO::PARAM_STR);
      $stmh->execute();   
      $pdo->commit();
      
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
      
      $rmdir_all=rmdir_all("paper/$zipa");
      
      unlink("paper/$zipa".'.zip');

       
        

        header("Location:http://125.141.139.75/submit1.php");
       } catch (Exception $ex) {
                $pdo->rollBack();
                print "오류: ".$Exception->getMessage();
       }
  ?>
  <script>
    alert("삭제되었습니다.");
    history.back();
  </script>
</body>