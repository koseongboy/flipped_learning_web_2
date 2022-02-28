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
                <article id="submit">
                <?php
            require_once("MYDB.php");
            $pdo= db_connect();

            try {
                $sql = "select * from user.submit order by num desc";
                $stmh = $pdo->query($sql);
            } catch (PDOException $Exception) {
                print "오류: ".$Exception->getMessage();
            }

            if(!isset($_SESSION["id_num"])){
                ?>
                <br>
                <br>
                <br>
                <br>
                
                <b>과제물 제출을 위해선 먼저 로그인 해주세요</b><br>
                <?php
            }
            
            else if($_SESSION["id_num"]=="admin") {
        ?>

            <div id="memo_row1" style="width : 80%;">
            <form name="memo_form" method="post" action="s_write.php">
                <div id="memo_writer" style ="text-align : left;">
                
                <label for="tea_name">이름</label>
                <input id="tea_name" name="tea_name" required>
                </div>
                <div id="memo1"><textarea rows="6" cols="86" name="content" required style="float : left;"></textarea></div>
                <div id="memo2"><input type="submit" value ="글쓰기" style="float : left; margin : -0.35rem; height : 6rem;"></div>
            </form>
            </div>
        <?php
            }
            else if($_SESSION["id_num"]!="admin"){
                ?>
                <h2>검색은 ctrl+F 키로 찾을 수 있습니다.</h2>
                <?php
            }
            while($row = $stmh->fetch(PDO::FETCH_ASSOC)){
                $memo_id         =$row["id_num"];
                $memo_num        =$row["num"];
                $memo_name       =$row["name"];
                $memo_content    =str_replace("\n","<br>",$row["content"]);
                $memo_content    =str_replace(" ", "&nbsp;", $memo_content);
            
                ?>
            
            <div id="memo_writer_title" style=" height : 30px; clear:both;">
                <ul style="float : left; ">
                    <li><?=$memo_name ?></li>
                    <li>
                <?php
                 if (isset($_SESSION["id_num"])){
                    if ($_SESSION["id_num"]=="admin"){
                       ?>
                         <?php
                                $memo_content=str_replace("&nbsp;"," ",$memo_content);
                            ?>
                            <form method="POST" action="submit1delete.php" style="float : right; margin-top : -1.3rem;">
                                <input type="hidden" value="<?=$memo_num?>" name="num">
                                <input type="hidden" value="<?=$memo_content?>" name="content">
                                <input type="submit" value="삭제">
                            </form>
                          
                            <form action="paper/deadline.php" name="aaa" method="POST" style="float : right; margin-top : -1.3rem;">
                            <input type="hidden" value="<?=$memo_content?>" name="content">
                            <input type="hidden" value="<?=$memo_num?>" name="num">
                            <input type="submit" value="마감"/>
                            </form>
                            
                            <form method="POST" action="download.php" style="float : right; margin-top : -1.3rem;">
                            <input type="hidden" value="<?=$memo_content?>" name="content">
                            <input type="submit" value="다운로드">
                            
                            </form>
                       <?php
                    }
                    ?>
                    <br>
                    <br>
                    <br>
                    
                    <?php
                }
                                
                            ?>
            
                </li>
                </ul>
                </div>
                <div id="memo_content" style ="clear : both; text-align:left;"><b><?= $memo_content ?></b> </div>
                    <div class="clear" style="clear:both;"></div>
                    <form method="POST" action="filesubmit.php" enctype="multipart/form-data">
                        <input type="file" name="file">
                        <div class="controlgroup" >
                    
                        <select id="subject" name="cla" >
                      <option>1반</option>
                      <option>2반</option>
                      <option>3반</option>
                      <option>4반</option>
                      <option>5반</option>
                      <option>6반</option>
                      <option>7반</option>
                      <option>8반</option>
                      <option>9반</option>
                      <option>10반</option>
                      <option>11반</option>
                      <option>12반</option>

                    </select>
                    <?php
                                        $memo_content=str_replace("&nbsp;"," ",$memo_content);
                                        ?>
                    <input type="hidden" value="<?=$memo_num?>" name="num">
                    <input type="hidden" value="<?=$memo_content?>" name="content">
                    <input type="submit" value="제출">
                </div>
                    </form>
                    <div class="linespace_10" style="height:5rem;"></div>
                    <?php

                    }
                    ?>
                    </div>
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
