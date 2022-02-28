<?php 
session_start();
$id = $_SESSION['id_num'];
$change=' ';
if(isset($_REQUEST['s'])) $change=$_REQUEST['s'];

if(!isset($_SESSION["id_num"])){
    ?>
    <script>
    alert("먼저 로그인해주세요.");
    history.back();
    </script>
 <?php

}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="style11.css">
        <link type="text/css" rel="stylesheet" href="style22.css">
    </head>
    <body>
        <div class="wrapper">
        <header>
            <h1><a href="main.php">덕소거꾸로수업</a></h1>
        </header>
        <aside>
            <nav>
                <ul class="mainmenu">
                    <li>메뉴</li>
                    <li><a href="1lecturelist.php">수업 듣기</a></li>
                    <ul class="submenu"><li><a href="1lecturelist.php">1학년</a></li><li><a href="2lecturelist.php">2학년</a></li><li><a href="3lecturelist.php">3학년</a></li><li><a href="4lecturelist.php">방과후</a></li></ul>
                    <li><a href="1enrollform.php">수강 신청</a></li>
                    <ul class="submenu"><li><a href="1enrollform.php">1학년</a></li><li><a href="2enrollform.php">2학년</a></li><li><a href="3enrollform.php">3학년</a></li><li><a href="4enrollform.php">방과후</a></li></ul>
                    <li><a href="index.php">자유 게시판</a></li>
                    <li><a href="qnabulletin.php">질문 게시판</a></li>
                    <li><a href="cal.php">대회일정</a></li>
                    <li><a href="submit1.php">과제물제출</a></li>
                </ul>
            </nav>
        </aside>
        <section>
            <div style="display : block;">
            <article id="login">
<h2>회원 정보</h2>
<br>
<h3><?=$_SESSION["name"]?>님</h3> 

    <br><a href="logout.php">로그아웃</a> | 
    <?php
     if($_SESSION["id_num"]=="admin")
     {
         ?>
         <a href="admin1.php">선생님 관리창</a>
         <?php
     }
     else{
        ?>
        <a href="updateForm.php?id=<?=$_SESSION["id_num"]?>">정보수정</a>
        <?php
    
     }
     ?>


                </article>
                <article id="watch">
                <h1>강의 듣기</h1>
    
  
   
    <form name="form" id="form" method="get">

    <select id="s" name='s' onChange="submit();">
    <option></option>
    <?
    
        require_once("MYDB.php");
        $pdo= db_connect();
        $sql="select * from 2subjects";
$stmh=$pdo->query($sql);
$count=$stmh->rowCount();
while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
 if($row['name']==$change){
        ?>
        

<option selected><?=$row['name']?></option>
    <?
 }
 else{
    ?>
        

    <option><?=$row['name']?></option>
            <?
 }
}
 ?>
    </select>

    
        
<?

if(isset($_REQUEST['s'])){

require_once("MYDB.php");
$pdor= db_connect();

$sql111="select * from $change";
$stmh1 = $pdor->prepare("$sql111");
        $n=$stmh1->columnCount();
        $stmh1->execute();
        $n=$stmh1->columnCount();
        $n=($n/2);

for ($i=1;$i<$n;$i++){
    $k = $i."강제목";
    $z = $i."강";
    require_once("MYDB.php");
$pdo= db_connect();
    $sql = "select * from user.2subjects where name='$change'";
    $stmh = $pdo->query($sql);



while($r = $stmh->fetch(PDO::FETCH_ASSOC)){
    require_once("MYDB.php");
    $pdoz= db_connect();
    $sqlq = "select * from $change where id_num = '$id'";
    $stmhz = $pdoz->query($sqlq);

    ?>

    <ul >
    
        <li><a href="play.php?sub=<?=$change?>&cla=<?=$i?>"><?=$i?>강-<?=$r[$k]?></a></li>
        <?
        while($asdfg = $stmhz->fetch(PDO::FETCH_ASSOC)){
            ?>
        <li>/<?=$asdfg[$z]?></li>
        <?
        }
        
        ?>
        
    

    </ul>
    
    <div class="clear" style="clear:both;"></div>
        <div class="linespace_10" style="height:10px;"></div>
            <?
}

    }

}
    ?>

        

</form>


</article>
</div>
        </section>
        <footer>
            <span>방재덕 | tel:070-7731-3176 | cube17623@gmail.com<br>
                <address>경기도 남양주시 와부읍 덕소로 194</address></span>
            
</footer>
</div>
    </body>
</html>
