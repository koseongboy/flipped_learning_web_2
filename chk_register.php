<?php
require_once("MYDB.php");
$pdo=db_connect();
$sql="select * from user.system where setting='register'";
                $stmh=$pdo->query($sql);
                while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
if($row['pass']=="1"){
    header("location:register.php");
}
if($row['pass']=="0"){
    ?>
<script>
alert("회원가입은 이용하실 수 없습니다.");
history.back();
</script>
    <?php
}
                }
?>