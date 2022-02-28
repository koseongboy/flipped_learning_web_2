
<!DOCTYPE html>
<html>
    <title>덕소고거꾸로수업</title>
    <head>
        <meta charset = "UTF-8">
        <link href="main.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/set1.css" />
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
 
    <div id="login" style="width : 23rem; text-align : left; position : absolute; left : 50%; margin-left : -11.5rem; top : 30%">
        <form action="loginresult.php" method = "post">
            
            <fieldset >
				<legend>로그인</legend>
            <span class="input input--isao">
					<input class="input__field input__field--isao" type="text" id="input-38" name="id_num"/>
					<label class="input__label input__label--isao" for="input-38" data-content="학번">
						<span class="input__label-content input__label-content--isao">학번</span>
                    </label>
                    </span>
                    <span class="input input--isao" style="margin-top : -20px;">
					<input class="input__field input__field--isao" type="password" id="input-38" name="pw"/>
					<label class="input__label input__label--isao" for="input-38" data-content="비밀번호">
						<span class="input__label-content input__label-content--isao">비밀번호</span>
                    </label>
                    </span>
               
                <p>
				<div class="controlgroup" >
                <input type="submit" value="로그인"/>
				<input type="button" value="회원가입" onClick="location.href='http://125.141.139.75/register.php'"/>
			</div>
                </p>
            </fieldset>            
        </form>
            
    </div>
</div>
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