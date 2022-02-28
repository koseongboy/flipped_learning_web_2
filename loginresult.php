<?php
session_start();

$id_num = $_REQUEST["id_num"];
$pw = $_REQUEST["pw"];

require_once("MYDB.php");
$pdo= db_connect();
try{
    $sql = "select * from students where id_num=?";
    $stmh =$pdo->prepare($sql);
    $stmh->bindValue(1,$id_num,PDO::PARAM_STR);
    $stmh->execute();
    
    $count = $stmh->rowCount();

} catch(PDOException $Exception){
    print "오류 :".$Exception->getMessage();
}
$row=$stmh->fetch(PDO::FETCH_ASSOC);
if ($id_num == "admin" && $pw == "ejrth17623!"){
    $_SESSION["id_num"]="admin";
    $_SESSION["name"]="선생님";
    ?>
    <script>
        history.back();
        </script>
    <?php
}
elseif($id_num!=$row["id_num"]){
    ?>
    <script>
        alert("학번이 일치하지 않습니다.");
        history.back();
        </script>
        <?php
} elseif($pw!=$row["pw"]){
?>
<script>
    alert("비밀번호가 일치하지 않습니다.");
    history.back();
</script>
<?php
} 
else{
    $_SESSION["id_num"]=$row["id_num"];
    $_SESSION["pw"]=$row["pw"];
    $_SESSION["name"]=$row["name"];
    ?>
    <script>
        history.back();
        </script>
    <?php
}

?>