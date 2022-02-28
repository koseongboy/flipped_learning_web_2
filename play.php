<?php
session_start();
$sub = $_REQUEST["sub"];

$cla = $_REQUEST["cla"];

$id = $_SESSION["id_num"];
$link = $sub."link";
$grade = substr($sub,0,1);
$grade1 = $grade."subjects";
$datesring = date("Y-m-d G:i",time());
$classname = $cla."강";

require_once("MYDB.php");
    $pdor = db_connect();
    $asd="SELECT * FROM $link WHERE idx='1'";
    $stmhs = $pdor->query($asd);
         while($row=$stmhs->fetch(PDO::FETCH_ASSOC)){
             $src=$row[$classname];
         }
         
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="style11.css">
        <link type="text/css" rel="stylesheet" href="style22.css">
        <script language="JavaScript">
	
    var SetTime = 0;
    var SubTime;		// 최초 설정 시간(기본 : 초)

    function msg_time() {	// 1초씩 카운트
        
        m = Math.floor(SetTime / 60) + "분 ";	// 남은 시간 계산
        
        var msg = "현재 재생 시간은 <font color='red'>" + m + "</font> 입니다.";
        
        document.all.ViewTimer.innerHTML = msg;		// div 영역에 보여줌 
                
        SetTime++;					// 1초씩 감소
        
        SubTime = Math.floor(SetTime / 60);
        document.all.time.value=SubTime;
        
    }

    window.onload = function TimerStart(){ tid=setInterval('msg_time()',1000) };
</script>
<script>

function abc(){

	event.returnValue = "진도율이 저장되지 않습니다. 그래도 닫으시겠습니까?";
    
    if (event.returnValue=true){
        document.getElementById('submit').submit();
    }

}

</script>
    </head>
    <body oncontextmenu='return false' onselectstart='return false' ondragstart='return false'>
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
                <article id="play">
                <?php
    
    require_once("MYDB.php");
    $pdo=db_connect();
    $sql="SELECT 1강 FROM $sub WHERE id_num = $id";

     $result = $pdo->query($sql); // query() 메소드는 실패시 데이터, 성공시 FALSE 가 리턴됨
     $count=$result->rowCount();

     




if($count != 0){
    ?>

    
            <br>
            <br>
            <h4>제출 버튼을 누르지 않으면 진도율이 저장되지 않습니다. 강의를 전부 수강하고 꼭 눌러주세요.</h4>
            <h4>모바일 데이터 사용자는 데이터 사용량 절약을 위해 우측 하단 톱니바퀴 버튼을 눌러서 화질을 조정해주세요.</h4>
            <form action="submit.php" method ="POST" id="submit">
            <iframe src="<?=$src?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            
                        <div id=ViewTimer></div>
                        <div class="controlgroup">
                        </div>
                        <input type="hidden" name="sub" value="<?=$sub?>"/>
                        <input type="hidden" name="cla" value="<?=$cla?>강"/>
                        <input type="hidden" name="time" id="time" value=""/>
                        <b id="msg" name="msg" value=""></b>
        <input style="font-size : 2.5rem; height : 3.5rem" type = "submit" value = "제출">
        <br><br><br><br>
        </form>
    
            <?php
                
                }
            else {
    ?>
    <script>
    alert("먼저 수강신청 해주세요.");
    history.back();
    </script>
<?php
            }
            $datesring = date("Y-m-d G:i",time());
     $cla1=$_REQUEST["cla"]."강시작";

     
     try {
         $pdo->beginTransaction();
         $sql="update $sub set $cla1=? where id_num=?";
             $stmh=$pdo->prepare($sql);
             $stmh->bindValue(1,$datesring,PDO::PARAM_STR);
             $stmh->bindValue(2,$id,PDO::PARAM_STR);
             $stmh->execute();
             $pdo->commit();
             ?>
            
                 <?php 
      } catch (PDOException $Exception) {
         $pdo->rollBack();
         echo "오류 :".$Exception->getMessage();
     }
     
?>
<script language=JavaScript>function click() {if ((event.button==2) || (event.button==2)) {alert('마우스 우클릭은 이용하실 수 없습니다.');}}document.onmousedown=click// --></script>

</article>
        </section>
        <footer>
            <span>방재덕 | tel:070-7731-3176 | cube17623@gmail.com<br>
                <address>경기도 남양주시 와부읍 덕소로 194</address></span>
            
        </footer>
    </div>
    </body>
</html>