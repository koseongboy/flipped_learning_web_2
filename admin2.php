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
        <div id="wrap"  style="width : 1250px; margin: 0 auto; text-align : center;">
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

    
<h1>시청 현황 확인하기</h1>
        
        <fieldset >
            <legend>과목과 강의를 선택해 주세요</legend>
            <div class="tabs">
<ul>
<li><a href="#grade111111">1학년</a></li>
<li><a href="#grade222222">2학년</a></li>
<li><a href="#grade333333">3학년</a></li>
<li><a href="#grade444444">방과후</a></li>
</ul>
<div id="grade111111">
<form action="1313.php" method = "post" enctype="multipart/form-data">
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
                <span class="input input--isao" style="margin-top : -10px;">
					<input class="input__field input__field--isao" type="number" id="input-38" name="class" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span>
                <b>강</b>
                <input type="submit" value="확인하기" name="submit"/>
        
                </form>

</div>
<div id="grade222222">
<form action="1313.php" method = "post" enctype="multipart/form-data">
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
                <span class="input input--isao" style="margin-top : -10px;">
					<input class="input__field input__field--isao" type="number" id="input-38" name="class" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span>
                <b>강</b>
                <input type="submit" value="확인하기" name="submit"/>
        
    </form>

</div>
<div id="grade333333">
<form action="1313.php" method = "post" enctype="multipart/form-data">
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
                <span class="input input--isao" style="margin-top : -10px;">
					<input class="input__field input__field--isao" type="number" id="input-38" name="class" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span>
                <b>강</b>
                <input type="submit" value="확인하기" name="submit"/>
    
    </form>

</div>
<div id="grade444444">
<form action="1313.php" method = "post" enctype="multipart/form-data">
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
                <span class="input input--isao" style="margin-top : -10px;">
					<input class="input__field input__field--isao" type="number" id="input-38" name="class" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span>
                <b>강</b>
                <input type="submit" value="확인하기" name="submit"/>
    
    </form>

</div>
</div>

</fieldset>
                
        <h1>영상 삭제</h1>
        
            <fieldset >
            <legend>삭제할 파일의 과목과 강의를 선택하세요</legend>
            <div class="tabs">    
  <ul>
    <li><a href="#grade11">1학년</a></li>
    <li><a href="#grade22">2학년</a></li>
    <li><a href="#grade33">3학년</a></li>
    <li><a href="#grade44">방과후</a></li>
  </ul>
  
  <div id="grade11">
  <form action="deletevid.php" method = "post" enctype="multipart/form-data">
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
                    <span class="input input--isao" style="margin-top : -10px;">
					<input class="input__field input__field--isao" type="number" id="input-38" name="cla" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span><b>강</b>
                    <input type="submit" value="삭제" name="submit"/>
                    </form>
  </div>
  <div id="grade22">
  <form action="deletevid.php" method = "post" enctype="multipart/form-data">
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
                    <span class="input input--isao" style="margin-top : -10px;">
					<input class="input__field input__field--isao" type="number" id="input-38" name="cla" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span><b>강</b>
                    <input type="submit" value="삭제" name="submit"/>
                    </form>
  </div>
  <div id="grade33">
  <form action="deletevid.php" method = "post" enctype="multipart/form-data">
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
                    <span class="input input--isao" style="margin-top : -10px;">
					<input class="input__field input__field--isao" type="number" id="input-38" name="cla" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span><b>강</b>
                    <input type="submit" value="삭제" name="submit"/>
                    </form>
  </div>
  <div id="grade44">
  <form action="deletevid.php" method = "post" enctype="multipart/form-data">
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
                    <span class="input input--isao" style="margin-top : -10px;">
					<input class="input__field input__field--isao" type="number" id="input-38" name="cla" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의">
						<span class="input__label-content input__label-content--isao">강의</span>
                    </label>
                    </span><b>강</b>
                    <input type="submit" value="삭제" name="submit"/>
                    </form>
  </div>
  </div>
                
            </fieldset>
            <h1>방과후 수업 승인 관리</h1>
            <fieldset>
                <legend>관리</legend>
                <form action="pass.php" method = "post" enctype="multipart/form-data">
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
                    <input type="submit" value="관리"/>
                    </form>
            </fieldset>
        <h1>강의 실적 출력</h1>
        
            <fieldset >
                <legend>출력할 과목을 선택하면 엑셀 파일로 출력합니다.</legend>
                <div class="tabs">    
  <ul>
    <li><a href="#grade111">1학년</a></li>
    <li><a href="#grade222">2학년</a></li>
    <li><a href="#grade333">3학년</a></li>
    <li><a href="#grade444">방과후</a></li>
  </ul>
  
  <div id="grade111">
  <form action="excel.php" method = "post" enctype="multipart/form-data">
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
                    <input type="submit" value="출력하기"/>
                    </form>
  </div>
  <div id="grade222">
  <form action="excel.php" method = "post" enctype="multipart/form-data">
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
                    <input type="submit" value="출력하기"/>
                    </form>
  </div>
  <div id="grade333">
  <form action="excel.php" method = "post" enctype="multipart/form-data">
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
                    <input type="submit" value="출력하기"/>
                    </form>
  </div>
  <div id="grade444">
  <form action="excel.php" method = "post" enctype="multipart/form-data">
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
                    <input type="submit" value="출력하기"/>
                    </form>
  </div>
  </div>
                
                    </fieldset>


            
                    </div>
            <br><br><br><br>
            <div id="wrap"  style="width : 1250px; margin: 0 auto; text-align : center;">
        <a a href='admin1.php'>[1]</a><b>[2]</b><a a href='admin3.php'>[3]</a>
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