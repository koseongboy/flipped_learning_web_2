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
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
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
                <article style="width:70%; float : right;">
                <?php 
    if(isset($_SESSION['id_num'])){
    ?>

    <div id="board_write">
        <h2>자유게시판</a></h2>
        <h4>1. 자유롭게 글을 쓰실 수 있는 공간입니다.</h4>

        <h4>2. 비회원 및 선생님은 입장하실 수 없습니다. (몰래 하는 중) 들키지 않는 이상 계속 이 상태를 유지할 것이고, 만약 들키면 공지 후 전환하겠습니다.</h4>

        <h4>3. 비속어 같은 거는 제제하지 않을 예정입니다.</h4>

        <h4>4. 자유롭게 써주세요</h4>
        <h4>5. 파일 첨부에 이미지 및 영상 파일을 첨부할 경우 글 맨 아래에 이미지 및 영상이 보입니다.</h4>
        <h4>6. 글 하나 당 파일은 한 개씩만 업로드 가능합니다.</h4>
            <div id="write_area">
                <form action="write_ok.php" method="post" enctype="multipart/form-data" multiple>
                    <div id="in_title">
                        <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
                    </div>
                    <div class="wi_line"></div>
                    <div id="in_content">
                        <textarea name="content" id="ucontent" placeholder="내용" required></textarea>
                    </div>
                    <div id="in_file">
                        <input type="file" value="1" name="b_file" />
                    </div>


                    <div class="bt_se">
                        <button type="submit">글 작성</button>
                    </div>
                </form>
            
        </div>
        <?php
    }
    else{
        ?>
        <script>
            alert("로그인 후 이용해 주세요");
            history.back();
            </script>
            <?php
    }
    ?>
</article>
                
        </section>
        <footer>
            <span>방재덕 | tel:070-7731-3176 | cube17623@gmail.com<br>
                <address>경기도 남양주시 와부읍 덕소로 194</address></span>
            
        </footer>
    </div>
    </body>
</html>
