<!DOCTYPE html>
<head>
<meta charset = "UTF-8">
</head>
<body>
<?php
session_start();
$cla = $_POST["cla"];
$file = $_FILES["file"];
$content = $_POST["content"];
$name = $_SESSION["name"];
$id_num = $_SESSION["id_num"];
$file_name = $_FILES['file']['name'];
$file_type_check = explode('.',$file_name);
$file_type = $file_type_check[count($file_type_check)-1];
$num=$_REQUEST["num"];
$content = str_replace(" ","_","$content");
            
                require_once("MYDB.php");
            $pdor= db_connect();
            $asd="SELECT * FROM submit WHERE num=$num";
            $stmhs = $pdor->query($asd);
        

        while($row = $stmhs->fetch(PDO::FETCH_ASSOC)){
            $tts=$row['dead'];
            if($tts=='x'){

                $target_dir = "paper/$content/$cla/";
                $target_file = $target_dir . "$id_num"."-"."$name"."."."$file_type";
                
                
                move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
                
                ?>
                
                <script>
                    alert("업로드가 완료되었습니다.");
                    history.back();
                </script>
                <?php
                }
                else{
                    ?>
                    <script>
                    alert("이미 마감된 과제입니다. 선생님께 문의하세요.");
                    history.back();
                    </script>
                    <?php
                }
            }
                ?>

</body>
