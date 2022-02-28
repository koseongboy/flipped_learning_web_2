<?php
$change=' ';
if(isset($_REQUEST['s'])) $change=$_REQUEST['s'];
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
    <link href="memo.css" rel="stylesheet" type="text/css">
        <link href="main.css" rel="stylesheet" type="text/css">
        <title>
            선생님 작업 환경
        </title>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/set1.css" />
        <title>jQuery UI Controlgroup - Default Functionality</title>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Tabs - Content via Ajax</title>
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".tabs" ).tabs({
      beforeLoad: function( event, ui ) {
        ui.jqXHR.fail(function() {
          ui.panel.html(
            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
            "If this wouldn't be a demo." );
        });
      }
    });
  } );
  </script>
        <style>
            .ui-controlgroup-vertical {
            width: 150px;
            }
            .ui-controlgroup.ui-controlgroup-vertical > button.ui-button,
            .ui-controlgroup.ui-controlgroup-vertical > .ui-controlgroup-label {
            text-align: center;
            }
            #car-type-button {
            width: 120px;
            }
            .ui-controlgroup-horizontal .ui-spinner-input {
            width: 20px;
            }
        </style>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $( function() {
            $( ".controlgroup" ).controlgroup()
            $( ".controlgroup-vertical" ).controlgroup({
            "direction": "vertical"
            });
             } );
         </script>
         
        
    </head>
    <body>
        <div id="wrap"  style="width : 1450px; margin: 0 auto; text-align : center;">
    <?php include "topmenu.php"; ?>
    <?php
        require_once("MYDB.php");
        $pdo=db_connect();

     if($_SESSION["id_num"]=="admin"){
         ?>
         <br>
         <br>
         <br>
         <br>
         <h1>메인화면 공지 등록 및 삭제</h1>
        
        <fieldset>
        <legend>링크나 파일은 둘 중 하나만 업로드 가능합니다. 파일이나 링크를 업로드하실 때는 체크박스를 체크해주세요</legend>
        <div class="tabs">
<ul>
<li><a href="#write">등록</a></li>
<li><a href="#delete">삭제</a></li>

</ul>

<div id="write">
<form action="mnupload.php" method = "post" enctype="multipart/form-data">
<input type="checkbox" name="file_chk" value="o">파일등록</input>
                    <input type="file" name ="file"/>
                    <input  type="checkbox" name="link_chk" value="o">링크등록</input>
                    <span style=" margin-top : -10px; margin-left : 0px;" class="input input--isao" >
					<input  class="input__field input__field--isao" type="input" id="input-38" name="lnk"/>
					<label class="input__label input__label--isao" for="input-38" data-content="링크">
						<span class="input__label-content input__label-content--isao">링크</span>
                    </label>
                    </span>
                    <span style="margin-top : -10px;" class="input input--isao" >
					<input  class="input__field input__field--isao" type="input" id="input-38" name="content" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="공지 내용">
						<span class="input__label-content input__label-content--isao">공지 내용</span>
                    </label>
                    </span>
                    
                    <input type="submit" value="등록" name="submit"/>
            
        </form>
</div>
<div id="delete">
        

                
                <?
                    require_once("MYDB.php");
                    $pdo= db_connect();
                    $sql="select * from main_notice";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             ?>
            <div id="memo_writer_title" style="margin-top : 0px; margin-left :180px; width : 800px; display : block; height : 30px;">
            <ul style="margin-top : -10px; margin-left :0;">
            <?
             $content = $row['content'];
             $file = $row['file'];
             if(isset($row['link'])){

                $link = $row['link'];
             
                    ?>
                    
               
                    <li><a href="<?=$link?>"><?=$content?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "mndelete.php?content=<?=$content?>">[삭제]</a></li>
                    
                        <?
             }
             else if (isset($row['file'])){

                $file = $row['file'];
                ?>
                    
               
                <li><a href="mainnotice/<?=$file?>" download><?=$content?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "mndelete.php?content=<?=$content?>">[삭제]</a></li>
                
                    <?

             }
             else {
                 ?>
                <li><?=$content?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "mndelete.php?content=<?=$content?>">[삭제]</a></li>
                <?
             }
?>
</ul>
                </div>
             <div class="clear" style="clear:both;"></div>
             <div class="linespace_10" style="height:10px;"></div>
             
             <?
             }
        
             ?>
               
               
                </div>
                </fieldset>

                <h1>영상 업로드</h1>
        
        <fieldset>
            <legend>영상 링크 란에는 유튜브 링크에서 (https://www.youtube.com/watch?v=) 또는 (https://youtu.be/)를 제외하고 입력해주세요</legend>
<div class="tabs">
<ul>
<li><a href="#grade1">1학년</a></li>
<li><a href="#grade2">2학년</a></li>
<li><a href="#grade3">3학년</a></li>
<li><a href="#grade4">방과후</a></li>
</ul>
                    
                
                   
            <div id="grade1">
  <form action="upload.php" method = "post" enctype="multipart/form-data">
  
  <div class="controlgroup">
                <select id="subject" name="sub">
                <?php
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
                    </div>
                    <span style="margin-top : -10px;" class="input input--isao" >
					<input  class="input__field input__field--isao" type="input" id="input-38" name="link" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의 영상 유튜브 링크">
						<span class="input__label-content input__label-content--isao">강의 영상 유튜브 링크</span>
                    </label>
                    </span>
                    <span style="width : 40px; margin-top : -10px; margin-left : 0px;" class="input input--isao" >
					<input style="width : 40px;" class="input__field input__field--isao" type="number" id="input-38" name="cla" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span>
                    <b style=" margin-left : 0px;">강</b>
                    <span style="margin-top : -10px;" class="input input--isao" >
					<input  class="input__field input__field--isao" type="input" id="input-38" name="title" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의 제목">
						<span class="input__label-content input__label-content--isao">강의 제목</span>
                    </label>
                    </span>
                    
                    <input type="submit" value="업로드" name="submit"/>
            
        </form>
  </div>
  <div id="grade2">
  <form action="upload.php" method = "post" enctype="multipart/form-data">
  
  <div class="controlgroup">
                <select id="subject" name="sub">
                <?php
         $sql="select * from 2subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             ?>

             <option><?=$row['name']?></option>
             <?php
            }
                ?>
                </select>
                    </div>
                    <span style="margin-top : -10px;" class="input input--isao" >
					<input  class="input__field input__field--isao" type="input" id="input-38" name="link" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의 영상 유튜브 링크">
						<span class="input__label-content input__label-content--isao">강의 영상 유튜브 링크</span>
                    </label>
                    </span>
                    <span style="width : 40px; margin-top : -10px; margin-left : 0px;" class="input input--isao" >
					<input style="width : 40px;" class="input__field input__field--isao" type="number" id="input-38" name="cla" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span>
                    <b style=" margin-left : 0px;">강</b>
                    <span style="margin-top : -10px;" class="input input--isao" >
					<input  class="input__field input__field--isao" type="input" id="input-38" name="title" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의 제목">
						<span class="input__label-content input__label-content--isao">강의 제목</span>
                    </label>
                    </span>
                    <input type="submit" value="업로드" name="submit"/>
            
        </form>
  </div>
  <div id="grade3">
  <form action="upload.php" method = "post" enctype="multipart/form-data">
  
  <div class="controlgroup">
                <select id="subject" name="sub">
                <?php
         $sql="select * from 3subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             ?>

             <option><?=$row['name']?></option>
             <?php
            }
                ?>
                </select>
                   </div>
                   <span style="margin-top : -10px;" class="input input--isao" >
					<input  class="input__field input__field--isao" type="input" id="input-38" name="link" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의 영상 유튜브 링크">
						<span class="input__label-content input__label-content--isao">강의 영상 유튜브 링크</span>
                    </label>
                    </span>
                    <span style="width : 40px; margin-top : -10px; margin-left : 0px;" class="input input--isao" >
					<input style="width : 40px;" class="input__field input__field--isao" type="number" id="input-38" name="cla" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span>
                    <b style=" margin-left : 0px;">강</b>
                    <span style="margin-top : -10px;" class="input input--isao" >
					<input  class="input__field input__field--isao" type="input" id="input-38" name="title" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의 제목">
						<span class="input__label-content input__label-content--isao">강의 제목</span>
                    </label>
                    </span>
                    <input type="submit" value="업로드" name="submit"/>
        
        </form>
  
  </div>
  <div id="grade4">
  <form action="upload2.php" method = "post" enctype="multipart/form-data">
  
  <div class="controlgroup">
                <select id="subject" name="sub">
                <?php
         $sql="select * from spcclass";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             ?>

             <option><?=$row['name']?></option>
             <?php
            }
                ?>
                </select>
                   </div>
                   <span style="margin-top : -10px;" class="input input--isao" >
					<input  class="input__field input__field--isao" type="input" id="input-38" name="link" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의 영상 유튜브 링크">
						<span class="input__label-content input__label-content--isao">강의 영상 유튜브 링크</span>
                    </label>
                    </span>
                    <span style="width : 40px; margin-top : -10px; margin-left : 0px;" class="input input--isao" >
					<input style="width : 40px;" class="input__field input__field--isao" type="number" id="input-38" name="cla" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span>
                    <b style=" margin-left : 0px;">강</b>
                    <span style="margin-top : -10px;" class="input input--isao" >
					<input  class="input__field input__field--isao" type="input" id="input-38" name="title" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의 제목">
						<span class="input__label-content input__label-content--isao">강의 제목</span>
                    </label>
                    </span>
                    <input type="submit" value="업로드" name="submit"/>
        
        </form>
  
        </div>
</div>
  </fieldset>
  <h1>업로드된 영상 확인하기</h1>
        
        <fieldset>
            <legend>과목과 강의를 선택해 주세요</legend>
<div class="tabs">
<ul>
<li><a href="#grade11111">1학년</a></li>
<li><a href="#grade22222">2학년</a></li>
<li><a href="#grade33333">3학년</a></li>
<li><a href="#grade44444">방과후</a></li>
</ul>
<div id="grade11111">
<form name="form" id="form" method="get" action="#grade11111">
        
               
                <select id="asd" name='s' onChange="submit();">
                <option></option>
                <?
                    require_once("MYDB.php");
                    $pdo= db_connect();
                    $sql="select * from 1subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             if($row['name']==$change){
                    ?>
                    

        <option selected><?=$row['name']?></option>
                <?
             }
             else{
                ?>
                    

                <option><?=$row['name']?></option>
                        <?
             }
        }
             ?>
                </select>
            
                
                   
                    
     <?
     
     if(isset($_REQUEST['s'])){
            
            require_once("MYDB.php");
            $pdor= db_connect();
            
            $sql111="select * from $change";
            $stmh1 = $pdor->prepare("$sql111");
                    $n=$stmh1->columnCount();
                    $stmh1->execute();
                    $n=$stmh1->columnCount();
                    $n=($n/2);

            for ($i=1;$i<$n;$i++){
                $k = $i."강제목";
                require_once("MYDB.php");
            $pdo= db_connect();

            try {
                $sql = "select * from user.1subjects where name='$change'";
                $stmh = $pdo->query($sql);
            } catch (PDOException $Exception) {
                print "오류: ".$Exception->getMessage();
            }
          
            while($r = $stmh->fetch(PDO::FETCH_ASSOC)){
                
                
            
                ?>
            
            <div id="memo_writer_title" style="margin-top : 2rem; margin-left :180px; width : 800px; display : block; height : 30px;">
                <ul style="margin-top : -10px; margin-left :0;">
               
                    <li><a href="teachplay.php?sub=<?=$change?>&cla=<?=$i?>"><?=$i?>강-<?=$r[$k]?><a></li>
                    <?
                
                    ?>
                </ul>
                </div>
                <div class="clear" style="clear:both;"></div>
                    <div class="linespace_10" style="height:10px;"></div>
                        <?
            }
                }
            }
                ?>
                   
                    
           
            </form>
</div>
<div id="grade22222">
<form name="form" id="form" method="get" action="#grade22222">
        
               
                <select id="asd" name='s' onChange="submit();">
                <option></option>
                <?
                    require_once("MYDB.php");
                    $pdo= db_connect();
                    $sql="select * from 2subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             if($row['name']==$change){
                    ?>
                    

        <option selected><?=$row['name']?></option>
                <?
             }
             else{
                ?>
                    

                <option><?=$row['name']?></option>
                        <?
             }
        }
             ?>
                </select>
            
                
                   
                    
     <?
     
     if(isset($_REQUEST['s'])){
            
            require_once("MYDB.php");
            $pdor= db_connect();
            
            $sql111="select * from $change";
            $stmh1 = $pdor->prepare("$sql111");
                    $n=$stmh1->columnCount();
                    $stmh1->execute();
                    $n=$stmh1->columnCount();
                    $n=($n/2);

            for ($i=1;$i<$n;$i++){
                $k = $i."강제목";
                require_once("MYDB.php");
            $pdo= db_connect();

            try {
                $sql = "select * from user.2subjects where name='$change'";
                $stmh = $pdo->query($sql);
            } catch (PDOException $Exception) {
                print "오류: ".$Exception->getMessage();
            }
          
            while($r = $stmh->fetch(PDO::FETCH_ASSOC)){
                
                
            
                ?>
            
            <div id="memo_writer_title" style="margin-top : 2rem; margin-left :180px; width : 800px; display : block; height : 30px;">
                <ul style="margin-top : -10px; margin-left :0;">
               
                    <li><a href="teachplay.php?sub=<?=$change?>&cla=<?=$i?>"><?=$i?>강-<?=$r[$k]?><a></li>
                    <?
                
                    ?>
                </ul>
                </div>
                <div class="clear" style="clear:both;"></div>
                    <div class="linespace_10" style="height:10px;"></div>
                        <?
            }
                }
            }
                ?>
                   
                    
           
            </form>
</div>
<div id="grade33333">
<form name="form" id="form" method="get" action="#grade33333">
        
                
                <select id="asd" name='s' onChange="submit();">
                <option></option>
                <?
                    require_once("MYDB.php");
                    $pdo= db_connect();
                    $sql="select * from 3subjects";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             if($row['name']==$change){
                    ?>
                    

        <option selected><?=$row['name']?></option>
                <?
             }
             else{
                ?>
                    

                <option><?=$row['name']?></option>
                        <?
             }
        }
             ?>
                </select>
            
                
                    
                    
     <?
     
     if(isset($_REQUEST['s'])){
            
            require_once("MYDB.php");
            $pdor= db_connect();
            
            $sql111="select * from $change";
            $stmh1 = $pdor->prepare("$sql111");
                    $n=$stmh1->columnCount();
                    $stmh1->execute();
                    $n=$stmh1->columnCount();
                    $n=($n/2);

            for ($i=1;$i<$n;$i++){
                $k = $i."강제목";
                require_once("MYDB.php");
            $pdo= db_connect();

            try {
                $sql = "select * from user.3subjects where name='$change'";
                $stmh = $pdo->query($sql);
            } catch (PDOException $Exception) {
                print "오류: ".$Exception->getMessage();
            }
          
            while($r = $stmh->fetch(PDO::FETCH_ASSOC)){
                
                
            
                ?>
            
            <div id="memo_writer_title" style="margin-top : 2rem; margin-left :180px; width : 800px; display : block; height : 30px;">
                <ul style="margin-top : -10px; margin-left :0;">
               
                    <li><a href="teachplay.php?sub=<?=$change?>&cla=<?=$i?>"><?=$i?>강-<?=$r[$k]?><a></li>
                    <?
                
                    ?>
                </ul>
                </div>
                <div class="clear" style="clear:both;"></div>
                    <div class="linespace_10" style="height:10px;"></div>
                        <?
            }
                }
            }
                ?>
                    </div>
                    
            
            </form>

        
<div id="grade44444">
<form name="form" id="form" method="get" action="#grade44444">
        
               
                <select id="asd" name='s' onChange="submit();">
                <option></option>
                <?
                    require_once("MYDB.php");
                    $pdo= db_connect();
                    $sql="select * from spcclass";
         $stmh=$pdo->query($sql);
         $count=$stmh->rowCount();
         while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
             if($row['name']==$change){
                    ?>
                    

        <option selected><?=$row['name']?></option>
                <?
             }
             else{
                ?>
                    

                <option><?=$row['name']?></option>
                        <?
             }
        }
             ?>
                </select>
            
                
                   
                    
     <?
     
     if(isset($_REQUEST['s'])){
            
            require_once("MYDB.php");
            $pdor= db_connect();
            
            $sql111="select * from $change";
            $stmh1 = $pdor->prepare("$sql111");
                    $n=$stmh1->columnCount();
                    $stmh1->execute();
                    $n=$stmh1->columnCount();
                    $n=($n/2);

            for ($i=1;$i<$n;$i++){
                $k = $i."강제목";
                require_once("MYDB.php");
            $pdo= db_connect();

            try {
                $sql = "select * from user.spcclass where name='$change'";
                $stmh = $pdo->query($sql);
            } catch (PDOException $Exception) {
                print "오류: ".$Exception->getMessage();
            }
          
            while($r = $stmh->fetch(PDO::FETCH_ASSOC)){
                
                
            
                ?>
            
            <div id="memo_writer_title" style="margin-top : 2rem; margin-left :180px; width : 800px; display : block; height : 30px;">
                <ul style="margin-top : -10px; margin-left :0;">
               
                    <li><a href="teachplay.php?sub=<?=$change?>&cla=<?=$i?>"><?=$i?>강-<?=$r[$k]?><a></li>
                    <?
                
                    ?>
                </ul>
                </div>
                <div class="clear" style="clear:both;"></div>
                    <div class="linespace_10" style="height:10px;"></div>
                        <?
            }
                }
            }
                ?>
                   
        
           
            </form>
</div>

</div>
</div>
</fieldset>
            <br><br><br><br>
            <div id="wrap"  style="width : 1250px; margin: 0 auto; text-align : center;">
<b>[1]</b><a a href='admin2.php'>[2]</a><a a href='admin3.php'>[3]</a>
</div>
<br><br><br><br>
            
            <script type="text/javascript">

function button_event(){

if (confirm("정말 초기화하시겠습니까?") == true){    //확인

    location.href="rhtjdgus11.php"


}else{   

    return;

}

}

</script>


            

            <?php
     }
     else
     {
        ?>
        <script>
    alert("권한이 없습니다.");
    history.back();
</script>
    <?php
     }
     ?>
     <script src="js/classie.js"></script>
		<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>
        
    </body>
</html>