<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php";

$date = date('Y-m-d');
$username = $_SESSION['name'];
$userpw = $_SESSION['id_num'];
$title = $_POST['title'];
$content = $_POST['content'];
$hit = 0;
$tmpfile =  $_FILES['b_file']['tmp_name'];
$o_name = $_FILES['b_file']['name'];
$folder = "upload/".$o_name;
move_uploaded_file($tmpfile,$folder);

$mqq = mq("alter table board auto_increment =1");

require_once("MYDB.php");
$pdo=db_connect();

    $pdo->beginTransaction();
    $sql="insert into board(name,pw,title,content,date,hit,file)
        values(?,?,?,?,?,?,?)";
        $stmh=$pdo->prepare($sql);
        $stmh->bindValue(1,$username,PDO::PARAM_STR);
        $stmh->bindValue(2,$userpw,PDO::PARAM_STR);
        $stmh->bindValue(3,$title,PDO::PARAM_STR);
        $stmh->bindValue(4,$content,PDO::PARAM_STR);
        $stmh->bindValue(5,$date,PDO::PARAM_STR);
        $stmh->bindValue(6,$hit,PDO::PARAM_STR);
        $stmh->bindValue(7,$o_name,PDO::PARAM_STR);
        $stmh->execute();
        $pdo->commit();
?>

<script type="text/javascript">alert("글쓰기 완료되었습니다.");
location.href="index.php";</script>
