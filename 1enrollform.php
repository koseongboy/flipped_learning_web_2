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
        
    <?php 
    if(!isset($_SESSION["id_num"])){
        ?>
        <script>
        alert("먼저 로그인해주세요.");
        history.back();
        </script>
     <?php

    }else {
    
        ?>
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
            <div id="main">
            <article id="login">
                    <?php
                    if(!isset($_SESSION['id_num'])){
                        ?>
                    <h2>로그인</h2>
                    <form action="loginresult.php" method = "post">
                        <label class="label" for="id">아이디</label>
                        <br>
                        <input type="text" id="id" name="id_num" required/>
                        <br>
                        <label class="label" for="pw">비밀번호</label>
                        <br>
                        <input type="password" id="pw" name="pw" required/>                   
                        <br>
                        <input type="submit" value="로그인"/>
                        <input type="button" value="회원가입" onClick="location.href='http://125.141.139.75/register.php'"/>
                    </form>
                    <?php
}

else
{
?>
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
<?php
}
?>


                </article>
                <article id="enroll">
                <h2>수강신청</h2>
    <form action="enrolment.php" method = "post" enctype="multipart/form-data">
                <select id="subject" name="sub">
                    <?php
                    require_once("MYDB.php");
                    $pdo= db_connect();
                    $sql="select * from 1subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
                    ?>
                    

        <option><?=$row['name']?></option>
                <?php
        }
             ?>

                </select>
                <br>
                <input type="submit" value="신청하기" name="submit"/>
                    </form>
                </article>
                <article id="enrollcancel">
                <h2>수강신청 취소</h2>
                    <form action="enrolcancel.php" method = "post" enctype="multipart/form-data" name="sss" id="sss">
                <select id="subject" name="sub">
                    <?php
                    require_once("MYDB.php");
                    $pdo= db_connect();
                    $sql="select * from 1subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
                    ?>
        <option><?=$row['name']?></option>
                <?php
        }
             ?>
                </select>
                <br>
                <input type="button" onClick="button_event();" value="취소하기"/>
                    </form>
                    <?php
    }
    ?>
                <script type="text/javascript">

function button_event(){

if (confirm("정말 수강취소하시겠습니까?") == true){    //확인

    document.getElementById('sss').submit();


}else{   

    return;

}

}

</script>
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
   
                    
    </body>
</html>