<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php";
$rno = $_POST['rno']; 
$sql = mq("select * from reply where idx='".$rno."'");
$reply = $sql->fetch_array();

$bno = $_POST['b_no'];
$sql2 = mq("select * from board where idx='".$bno."'");
$board = $sql2->fetch_array();

$pwk = $_POST['pw'];
$bpw = $reply['pw'];

if($_SESSION['id_num']==$bpw||$_SESSION['id_num']=="admin") 
	{
		$sql = mq("delete from reply where idx='".$rno."'"); ?>
	<script type="text/javascript">alert('댓글이 삭제되었습니다.'); location.replace("read.php?idx=<?php echo $board["idx"]; ?>");</script>
	<?php 
	}else{ ?>
		<script type="text/javascript">alert('작성자가 아닙니다.');history.back();</script>
	<?php } ?>