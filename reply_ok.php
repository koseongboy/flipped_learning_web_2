<?php
	include $_SERVER['DOCUMENT_ROOT']."/db.php";

	$bno = $_POST['bno'];
	$name = $_POST['dat_user'];
	$pw = $_POST['dat_pw'];
	$content = $_POST['content'];

	require_once("MYDB.php");
	$pdo=db_connect();

    $pdo->beginTransaction();
    $sql="insert into reply(con_num,name,pw,content)
        values(?,?,?,?)";
        $stmh=$pdo->prepare($sql);
        $stmh->bindValue(1,$bno,PDO::PARAM_STR);
        $stmh->bindValue(2,$name,PDO::PARAM_STR);
        $stmh->bindValue(3,$pw,PDO::PARAM_STR);
        $stmh->bindValue(4,$content,PDO::PARAM_STR);
        $stmh->execute();
        $pdo->commit();
?>
<script type="text/javascript" src="/js/common.js"></script>

	<h3>댓글목록</h3>
		<?php
			$sql3 = mq("select * from reply where con_num='".$bno."' order by idx desc");
			while($reply = $sql3->fetch_array()){ 
		?>
		<div class="dap_lo">
			<div><b><?php echo $reply['name'];?></b></div>
			<div class="dap_to comt_edit"><?php echo nl2br("$reply[content]"); ?></div>
			<div class="rep_me dap_to"><?php echo $reply['date']; ?></div>
			<div class="rep_me rep_menu">
				
				<a class="dat_delete_bt" href="#">삭제</a>
			</div>
			
			<!-- 댓글 삭제 비밀번호 확인 -->
			<div class='dat_delete'>
				<form action="reply_delete.php" method="post">
					<input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" /><input type="hidden" name="b_no" value="<?php echo $bno; ?>">
			 		<input type="hidden" name="pw" value="<?=$_SESSION['id_num']?>" /><input type="submit" value="확인">
				 </form>
			</div>
		</div>
	<?php } ?>

<div class="dap_ins">
	<input type="hidden" name="bno" class="bno" value="<?php echo $bno; ?>">
	<input type="hidden" name="dat_user" id="dat_user" class="dat_user" value="<?=$_SESSION['name']?>">
			<input type="hidden" name="dat_pw" id="dat_pw" class="dat_pw" value="<?=$_SESSION['id_num']?>">
	<div style="margin-top:10px; ">
		<textarea name="content" class="reply_content" id="re_content" ></textarea>
		<button id="rep_bt" class="re_bt">댓글</button>
	</div>
</div>
</div><!--- 댓글 불러오기 끝 -->
<div id="foot_box"></div>
</div>