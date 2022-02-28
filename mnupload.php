<!DOCTYPE html>
<head>
<meta charset = "UTF-8">
</head>
<body>
<?php
if (isset($_REQUEST["link_chk"])&&isset($_REQUEST["file_chk"])){

    ?>
    <script>
    alert("파일과 링크를 둘 다 등록하실 수 없습니다.");
    history.back();
    </script>
    <?
}
else{
$content = $_REQUEST["content"];
if(isset($_REQUEST["link_chk"])){
$link = $_REQUEST["lnk"];
require_once("MYDB.php");
            $pdo= db_connect();
            $pdo->beginTransaction();
    $sql="insert into main_notice(content,link)
        values(?,?)";
        $stmh=$pdo->prepare($sql);
        $stmh->bindValue(1,$content,PDO::PARAM_STR);
        $stmh->bindValue(2,$link,PDO::PARAM_STR); 
        $stmh->execute();
        $pdo->commit();

}
if(isset($_REQUEST["file_chk"])){
    $file = $_FILES["file"];
$file_name = $_FILES['file']['name'];
$file_type_check = explode('.',$file_name);
$file_type = $file_type_check[count($file_type_check)-1];
$target_dir = "mainnotice/";
                $target_file = $target_dir . $file_name;
                move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

    require_once("MYDB.php");
                $pdo= db_connect();
                $pdo->beginTransaction();
        $sql="insert into main_notice(content,file)
            values(?,?)";
            $stmh=$pdo->prepare($sql);
            $stmh->bindValue(1,$content,PDO::PARAM_STR);
            $stmh->bindValue(2,$file_name,PDO::PARAM_STR); 
            $stmh->execute();
            $pdo->commit();
            
    
    }
    
    if (!isset($_REQUEST["link_chk"])&&!isset($_REQUEST["file_chk"])){

            
            require_once("MYDB.php");
            $pdo= db_connect();
            $pdo->beginTransaction();
    $sql="insert into main_notice(content)
        values(?)";
        $stmh=$pdo->prepare($sql);
        $stmh->bindValue(1,$content,PDO::PARAM_STR);

        $stmh->execute();
        $pdo->commit();
        
    }
        
                            
                ?>
                <script>
                alert("등록이 완료되었습니다.");
                history.back();
                </script>
                
                <?php
                
}
            
                ?>

</body>
