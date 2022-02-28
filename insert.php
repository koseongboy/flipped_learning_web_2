<?php
$id_num=$_POST["id_num"];
$pw=$_POST["pw"];
$name=$_POST["name"];


require_once("MYDB.php");
$pdo=db_connect();
try {
    $pdo->beginTransaction();
    $sql="insert into students(id_num,pw,name)
        values(?,?,?)";
        $stmh=$pdo->prepare($sql);
        $stmh->bindValue(1,$id_num,PDO::PARAM_STR);
        $stmh->bindValue(2,$pw,PDO::PARAM_STR);
        $stmh->bindValue(3,$name,PDO::PARAM_STR);
        $stmh->execute();
        $pdo->commit();
} catch(PDOException $Exception){
    ?>
    <script>
    alert("아이디가 중복되었습니다.");
</script>
<?php
}
    

                    


?>
<script>
    alert("회원가입이 완료되었습니다.");
    location.href="loginForm.php";
</script>
