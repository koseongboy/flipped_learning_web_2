  <?php session_start(); ?>
  <meta charset="utf-8">
  <?php
     if(!isset($_SESSION["id_num"])) {
  ?>
    <script>
         alert('로그인 후 이용해 주세요.');
	 history.back();
     </script>
  <?php
        }
  $content=$_REQUEST["content"];
  $tea_name=$_REQUEST["tea_name"];
  $x = "x";
  $zipa=str_replace(" ", "_", $content);
 require_once("MYDB.php");
 $pdo = db_connect();
    try{
    $pdo->beginTransaction();   
    $sql = "insert into user.submit(id_num, name, content, dead)";
    $sql.= "values(?, ?, ?, ?)"; 
    $stmh = $pdo->prepare($sql); 
    $stmh->bindValue(1, $_SESSION["id_num"], PDO::PARAM_STR);  
    $stmh->bindValue(2, $tea_name, PDO::PARAM_STR);   
    $stmh->bindValue(3, $content, PDO::PARAM_STR);
    $stmh->bindValue(4, "x", PDO::PARAM_STR);
    $stmh->execute();
    $pdo->commit(); 
    umask(0);
    mkdir("paper/$zipa",0777,true);
    mkdir("paper/$zipa/1반",0777,true);
    mkdir("paper/$zipa/2반",0777,true);
    mkdir("paper/$zipa/3반",0777,true);
    mkdir("paper/$zipa/4반",0777,true);
    mkdir("paper/$zipa/5반",0777,true);
    mkdir("paper/$zipa/6반",0777,true);
    mkdir("paper/$zipa/7반",0777,true);
    mkdir("paper/$zipa/8반",0777,true);
    mkdir("paper/$zipa/9반",0777,true);
    mkdir("paper/$zipa/10반",0777,true);
    mkdir("paper/$zipa/11반",0777,true);
    mkdir("paper/$zipa/12반",0777,true);

    header("Location:http://125.141.139.75/submit1.php");
    } catch (PDOException $Exception) {
         $pdo->rollBack();
       print "오류: ".$Exception->getMessage();
    }
  ?>
    
