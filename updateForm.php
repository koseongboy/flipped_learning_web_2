<?php
session_start();
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
    
                <article style="width : 100%; text-align : center;">
                    
    <?php
    $id_num = $_SESSION["id_num"];

    require_once("MYDB.php");
    $pdo=db_connect();
?>
<br>
<br>
<br>
<br>

    <h2>회원 정보 수정</h2>
    <fieldset>
        <?php
            try {
                $sql="select * from students where id_num=?";
                    $stmh=$pdo->prepare($sql);
                    $stmh->bindValue(1,$id_num);
                    $stmh->execute();

                    $count=$stmh->rowCount();
            } catch (PDOException $Exception) {
                echo "오류 :".$Exception->getMessage();
            }
            if($count<1){print "수정자가 없습니다.<br>";}
            else{
                $row=$stmh->fetch(PDO::FETCH_ASSOC);
            ?>
            <form method="post" action="updatePro.php">
            <p>
                <?=$row['id_num']?>
                </p>
                <p>
                    <label for="password">비밀번호:</label>
                    <br>
                    <input id="password"type ="password" value="<?=$row['pw']?>" required name="pw">
                </p>
                <p>
                    <label for="name">이름:</label>
                    <br>
                    <input id="name" value="<?=$row['name']?>" required name="name">
                </p>
                <p>
                    <input type="submit" value="정보 수정"/>
                </p> 
                <input type="hidden" name="id_num" value="<?=$id_num?>" >
            </form>
            <?php } ?>
            </div>

</article>
        </section>
        <footer>
            <span>방재덕 | tel:070-7731-3176 | cube17623@gmail.com<br>
                <address>경기도 남양주시 와부읍 덕소로 194</address></span>
            
        </footer>
    </div>
    </body>
</html>
