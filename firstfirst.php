<?php
echo "PC/Mobile 여부를 판별중입니다...";
?>

<script type="text/javascript">

var filter = "win16|win32|win64|mac";

 

if(navigator.platform){

if(0 > filter.indexOf(navigator.platform.toLowerCase())){

location.href ="main.php";

}else{

    location.href ="main.php";

}

}

</script>