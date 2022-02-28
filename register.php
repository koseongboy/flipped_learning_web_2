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
        <article id="register">
        <?php
    require_once("MYDB.php");
    $pdo=db_connect();
    $sql="select * from user.system where setting='register'";
                    $stmh=$pdo->query($sql);
                    while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
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
    <form action="insert.php" method = "post">
           <select name="grade">
           <option>1</option>
           <option>2</option>
           <option>3</option>
           </select> 
           <b>학년</b>
           <br>
           <br>
           <select name="class">
           <option>01</option>
           <option>02</option>
           <option>03</option>
           <option>04</option>
           <option>05</option>
           <option>06</option>
           <option>07</option>
           <option>08</option>
           <option>09</option>
           <option>10</option>
           <option>11</option>
           <option>12</option>
           </select>
           <b>반</b>
           <br>
           <br><br><br>
           <label for="num">번호</label>
           <br>
					<input type="number" id="num" name="number" required/>
                    <br>
                    <label for="name">이름</label>
                    <br>
					<input type="text" id="name" name="name" required/>
					<br>
                    <label for="pw">비밀 번호</label>
                    <br>
					<input type="password" id="pw" name="pw" required/>
					
                    
                <p>
				
					<input type="submit" value="회원가입"/>

                </p>    
            </fieldset>            
        </form>
</article>
                
        </section>
        <footer>
            <span>방재덕 | tel:070-7731-3176 | cube17623@gmail.com<br>
                <address>경기도 남양주시 와부읍 덕소로 194</address></span>
            
        </footer>
    </div>
    </body>
</html>
