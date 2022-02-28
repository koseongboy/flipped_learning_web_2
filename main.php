<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link  href="style11.css" type="text/css" rel="stylesheet">
        <link href="style22.css" type="text/css" rel="stylesheet">
      
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
                <article id="notice">
                    <h2>거꾸로수업 관련 공지사항</h2>
                    <ul id="noticelist">
                        <?php
                        require_once("MYDB.php");
                        $pdo= db_connect();
                        $sql="select * from main_notice";
             $stmh=$pdo->query($sql);
             $count=$stmh->rowCount();
             while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
                
                 $content = $row['content'];
                 $file = $row['file'];
                 if(isset($row['link'])){
    
                    $link = $row['link'];
                 
                        ?>
                        
               
                    <li><a href="<?=$link?>"><?=$content?></a></li>
                    
                    <?
         }
         else if (isset($row['file'])){

            $file = $row['file'];
            ?>
                
           
            <li><a href="mainnotice/<?=$file?>" download><?=$content?></a></li>
            
                <?

         }
         else {
             ?>
            <li><?=$content?></li>
            <?
         }
        

?>
                    
                    <?php
             }
             ?>
             </ul>
                </article>
                <article id="usage">
                    <h2>사이트 사용 시 주의사항</h2>
                    <ul>
                        <li>회원 정보는 수행평가와 직결되니 자신과 맞게 작성해 주세요</li>
                        <li>학번은 5자리 숫자입니다. 양식 : 학년1자리+반 2자리(ex. 3반일 경우 03)+번호2자리(ex. 3번일 경우 03) = 다섯자리</li>
                        <li>처음 로그인하는 학생들은 자기 학번/비밀번호 1111로 로그인 후 우측 상단 회원정보 수정을 해주세요.</li>
                        <li>모바일 수강 시 어플리케이션을 이전 앱과 혼동하지 말고 다운받아주세요.</li>
                        <li>사이트 관련 질문은 (cube17623@gmail.com)으로 연락주시면 가장 빠르게 답변받으실 수 있습니다.</li>
                        <li>사이트가 깨져 보일 경우 Ctrl+F5를 눌러주세요. </li>
                    </ul>

                </article>
            </div>
        </section>
        
        <footer>
            <span>방재덕 | tel:010-5414-8918 | cube17623@gmail.com<br>
                <address>경기도 남양주시 와부읍 덕소로 194</address></span>
            
        </footer>
    </div>
    </body>
</html>