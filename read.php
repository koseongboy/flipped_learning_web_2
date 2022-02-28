
<?php
	include $_SERVER['DOCUMENT_ROOT']."/db.php"; /* db load */
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
                <article id="reader">
				<?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$hit = mysqli_fetch_array(mq("select * from board where idx ='".$bno."'"));
		$hit = $hit['hit'] + 1;
		$fet = mq("update board set hit = '".$hit."' where idx = '".$bno."'");
		$sql = mq("select * from board where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$board = $sql->fetch_array();
	?>
<!-- 글 불러오기 -->
<div id="board_read">
	<h2><?php echo $board['title']; ?></h2>
		<div id="user_info">
			 <?php echo $board['date']; ?> 조회:<?php echo $board['hit']; ?>
				<div id="bo_line"></div>
			</div>
			<div id="bo_content">
				<?php echo nl2br("$board[content]"); 
				$file_name = "$board[file]";
				$file_type_check = explode('.',$file_name);
				$file_type = $file_type_check[count($file_type_check)-1];

				if ($file_type == "jpeg"||$file_type == "gif"||$file_type == "jpg"||$file_type == "png"||$file_type == "tiff") {
					echo("<br><image style='margin : 0 auto; height : 400px; width : 600px;' type='image' src='upload/$board[file]'></image>");
				}
				if ($file_type == "mp4"||$file_type == "avi"||$file_type == "mov") {
					echo("<br><video src='upload/$board[file]' controls style='margin-top : 5rem;'></video>");
				}
				
				?>
				
			</div>
	<!-- 목록, 수정, 삭제 -->
	<div id="bo_ser">
		<ul>
			<li><a href="index.php">[목록으로]</a></li>
			<?php
			if (isset($_SESSION["id_num"])){
				if ($_SESSION["id_num"]=="admin"||$_SESSION["id_num"]==$board["pw"]){
			?>
			<li><a href="page/board/delete.php?idx=<?php echo $board['idx']; ?>">[삭제]</a></li>
			<?php
				}
			}
			?>
		</ul>
	</div>
	<div id="bo_line"></div>
	<div>
첨부 파일 : <a href="../../upload/<?php echo $board['file'];?>" download><?php echo $board['file']; ?></a>
</div>
<div id="bo_line"></div>
	<!--- 댓글 불러오기 -->
<div class="reply_view">
	<h3>댓글목록</h3>
		<?php
			$sql3 = mq("select * from reply where con_num='".$bno."' order by idx desc");
			while($reply = $sql3->fetch_array()){ 
		?>
		<div class="dap_lo">
			<div><b><?php echo "익명";?></b></div>
			<div class="dap_to comt_edit"><?php echo nl2br("$reply[content]"); ?></div>
			<div class="rep_me dap_to"><?php echo $reply['date']; ?></div>
			<div class="rep_me rep_menu">
				<a class="dat_delete_bt" href="#">삭제</a>
			</div>
			<!-- 댓글 삭제 비밀번호 확인 -->
			<div class='dat_delete'>
				<form action="reply_delete.php" method="post">
					<input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" /><input type="hidden" name="b_no" value="<?php echo $bno; ?>">
			 		<input type="hidden" name="pw" value="<?=$_SESSION['id_num']?>" /> <input style="position : absolute; left : 48%; top : 48%;" type="submit" value="확인">
				 </form>
			</div>
		</div>
	<?php }if(isset($_SESSION['id_num'])){ ?>

	<!--- 댓글 입력 폼 -->

	<div class="dap_ins">
			<input type="hidden" name="bno" class="bno" value="<?php echo $bno; ?>">
			<input type="hidden" name="dat_user" id="dat_user" class="dat_user" value="<?=$_SESSION['name']?>">
			<input type="hidden" name="dat_pw" id="dat_pw" class="dat_pw" value="<?=$_SESSION['id_num']?>">
			<div>
				<textarea name="content" class="reply_content" id="re_content" ></textarea>
				<button style="margin-top : 0;" id="rep_bt" class="re_bt">댓글</button>
			</div>
	</div>
	<?php
	}
	?>
</div><!--- 댓글 불러오기 끝 -->
<div id="foot_box"></div>
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
