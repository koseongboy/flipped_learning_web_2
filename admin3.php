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

    
        <form action="addsubject.php" method="POST">
            <h1>과목 추가</h1>
            <fieldset>
                <legend>추가할 과목명을 입력하고 확인버튼을 눌러주세요</legend>
                <div class="controlgroup">
                        <select id="subject" name="grade">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                        <b>학년</b>
                        </div>
                        <span class="input input--isao" style="margin-top : -10px;">
					<input class="input__field input__field--isao" type="text" id="input-38" name="sub" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="강의 이름">
						<span class="input__label-content input__label-content--isao">강의 이름</span>
                    </label>
                    </span>
                <input type="submit" value="만들기"/>
            </fieldset>
            </form>
            
            <h1>과목 삭제</h1>
            
            <fieldset>
                <legend>삭제할 과목을 선택 해 주세요.</legend>
                <div class="tabs">    
  <ul>
    <li><a href="#grade1111">1학년</a></li>
    <li><a href="#grade2222">2학년</a></li>
    <li><a href="#grade3333">3학년</a></li>
  </ul>
  
  <div id="grade1111">
  <form action="subdelete.php" method="POST">
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
                    <input type="hidden" value="1" name="grade"/>
                    <input type="submit" value="삭제하기"/>
                    </form>
  </div>
  <div id="grade2222">
  <form action="subdelete.php" method="POST">
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
                    <input type="hidden" value="2" name="grade"/>
                    <input type="submit" value="삭제하기"/>
                    
                    </form>
  </div>
  <div id="grade3333">
  <form action="subdelete.php" method="POST">
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
                    <input type="hidden" value="3" name="grade"/>
                    <input type="submit" value="삭제하기"/>
                    </form>
  </div>
  </div>
               
                
            </fieldset>
            </form>
            <h1>방과후 과목 등록 및 삭제</h1>
        
        <fieldset>
        <legend>링크나 파일은 둘 중 하나만 업로드 가능합니다. 파일이나 링크를 업로드하실 때는 체크박스를 체크해주세요</legend>
        <div class="tabs">
<ul>
<li><a href="#write">등록</a></li>
<li><a href="#delete">삭제</a></li>

</ul>

<div id="write">
<form action="addclass.php" method = "post" enctype="multipart/form-data">
                    <span style="margin-top : -10px;" class="input input--isao" >
					<input  class="input__field input__field--isao" type="input" id="input-38" name="sub" required/>
					<label class="input__label input__label--isao" for="input-38" data-content="과목이름">
						<span class="input__label-content input__label-content--isao">과목이름</span>
                    </label>
                    </span>
                    
                    <input type="submit" value="등록" name="submit"/>
            
        </form>
</div>
<div id="delete">
        
<form action="classdelete.php" method="POST">
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
                   
                    <input type="submit" value="삭제하기"/>
                    </form>
               
               
                </div>
                </fieldset>
            
            <h1>학년 초기화</h1>
            <fieldset>
                <legend>회원 정보, 과목을 전부 초기화 합니다.</legend>
                <input type="button" onClick="button_event();" value="초기화하기"/>
            </fieldset>
            
            <h1>회원정보 관리</h1>
            <fieldset>
                <legend>관리</legend>
                <input type="button" onClick="location.href='http://125.141.139.75/ddpwk.php'" value="관리"/>
            </fieldset>
            <h1>회원가입 관련</h1>
            <fieldset>
            <input type="button" onClick="location.href='http://125.141.139.75/inputing.php'" value="관리"/>
            </fieldset>
           
            <h1>야자실 출석체크 현황</h1>
        
            <fieldset >
                <legend>야자실 출석체크 현황을 엑셀파일로 출력합니다.</legend>
                <form action="excel1.php" method = "post" enctype="multipart/form-data">
                <input type="submit" value="출력하기"/>
                    </form>
        </fieldset>
        
            </div>
            <br><br><br><br>
            <div id="wrap"  style="width : 1250px; margin: 0 auto; text-align : center;">
            <a a href='admin1.php'>[1]</a><a a href='admin2.php'>[2]</a><b>[3]</b>
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