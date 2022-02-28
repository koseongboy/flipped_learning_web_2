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
        <link href="memo.css" rel="stylesheet" type="text/css">
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
                <article class="bulletin">
                <?php
            require_once("MYDB.php");
            $pdo= db_connect();

            try {
                $sql = "select * from user.qna order by num desc";
                $stmh = $pdo->query($sql);
            } catch (PDOException $Exception) {
                print "오류: ".$Exception->getMessage();
            }
        
            if(isset($_SESSION['id_num'])) {
        ?>

            <h4>1. 자유롭게 질문할 수 있는 공간입니다.</h4>
            <h4>2. 답변은 선생님들께서만 가능합니다.</h4>
            <h4>3. 사이트 관련 질문은 (cube17623@gmail.com)으로 주세요.</h4>
            <div id="memo_row1" style="width : 80%; margin-top : 0px;">
            <form name="memo_form" method="post" action="q_write.php">
                
                <div id="memo1"><textarea rows="6" cols="86" name="content" required></textarea></div>
                <div id="memo2"><input type="submit" value ="글쓰기" style=" margin-top : -0.3rem; height : 6rem;"></div>
            </form>
            </div>

        <?php
            }else{
                ?>
                <script>
                alert("로그인 후 이용해주세요");
                history.back();
                </script>
            <?php
            }
            while($row = $stmh->fetch(PDO::FETCH_ASSOC)){
                $memo_id         =$row["id_num"];
                $memo_num        =$row["num"];
                $memo_date       =$row["regist_day"];
                $memo_name       =$row["name"];
                $memo_content    =str_replace("\n","<br>",$row["content"]);
                $memo_content    =str_replace(" ", "&nbsp;", $memo_content);
            
                ?>
            
            <div id="memo_writer_title" style=" width : 80%; display : block; height : 2rem;">
                <ul>
                    <li><?=$memo_num ?></li>
                    <li><?=$memo_name ?></li>
                    <li><?=$memo_date ?></li>
                    <li>
                <?php
                if (isset($_SESSION["id_num"])){
                    if ($_SESSION["id_num"]=="admin"||$_SESSION["id_num"]==$memo_id){
                        print "<a href='qnabulletindelete.php?num=$memo_num''>[삭제]</a>";
                    }
                }
                ?>
                </li>
                </ul>
                </div>
                <div id="memo_content" style ="text-align:left;"><?= $memo_content ?> </div>
                <div id="ripple1">답변</div>
                <div id="ripple2" style="width: 80%;">
                <?php
                try {
                    $sql = "select * from user.qna_ripple where parent='$memo_num'";
                    $stmh1 = $pdo->query($sql);
                } catch (PDOException $Exception) {
                    print "오류 :".$Exception->getMessage();
                    
                }
            
                while ($row_ripple = $stmh1->fetch(PDO::FETCH_ASSOC)){
                    $ripple_num     =$row_ripple["num"];
                    $ripple_id      =$row_ripple["id_num"];
                    $ripple_name    =$row_ripple["name"];
                    $ripple_content =str_replace("\n", "<br>", $row_ripple["content"]);
                    $ripple_content =str_replace(" ", "&nbsp;", $ripple_content);
                    $ripple_date    =$row_ripple["regist_day"];
                    ?>
                        <div id="ripple_title">
                            <ul style ="display : block;">
                            <li><b><?= $ripple_name ?>선생님</b></li>
                                <li id="mdi_del" style="text-align : right;">
                    <?php
                    if(isset($_SESSION["id_num"])){
                        if($_SESSION["id_num"]=="admin"){
                            print  "<a href='qnabulletindelete_r.php?num=$ripple_num''>[삭제]</a>";
                            
                        }
                    }
                        ?>
                            </li>
                            <li style="color:gray;"> <br><?= $ripple_date ?></li>
                    </ul>
                    </div>
                    <div id="ripple_content" style=" text-align : left; width : 95%; margin : 0 auto;"><br><?= $ripple_content ?></div>
                        <?php
                    
                }
                if(isset($_SESSION["id_num"])){
                    if($_SESSION["id_num"]=="admin"){
                        ?>
                        <form name="ripple_form" method="post" action="q_write_r.php">
                            <input type="hidden" name="num" value="<?= $memo_num ?>">
                            <label for="tea_name">이름</label>
                            <input id="tea_name" name="tea_name">
                            <div id="ripple_insert">
                            
                                <div id="ripple_textarea">
                                    <textarea rows="3" cols="80" name="ripple_content" required></textarea>
                    </div>
                    <div id="ripple_button">
                        <input type="submit" value="작성"></div>
                    </div>
                    </form>
                    <?php } ?>
                    </div>
                    <div class="clear" style="clear:both;"></div>
                    <div class="linespace_10" style="height:1rem;"></div>
                    <?php

                    }
                }

                    ?>
                    </div>
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
