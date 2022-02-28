<?php
    $sub=$_REQUEST["sub"];
   
    $sub=str_replace(" ","_",$sub);
    $name=$sub;
    
    require_once("MYDB.php");
    $pdo=db_connect();

    $pdo->beginTransaction();
    $sql="insert into spcclass(name)
        values(?)";
        $stmh=$pdo->prepare($sql);
        $stmh->bindValue(1,$name,PDO::PARAM_STR);
        $stmh->execute();
        $pdo->commit();


        $sql = "CREATE TABLE $name (
            id_num INT(5) PRIMARY KEY, 
            1강 CHAR(30) ,
            1강시작 CHAR(30) ,
            2강 CHAR(30) ,
            2강시작 CHAR(30) ,
            3강 CHAR(30) ,
            3강시작 CHAR(30) ,
            4강 CHAR(30) ,
            4강시작 CHAR(30) ,
            5강 CHAR(30) ,
            5강시작 CHAR(30) ,
            6강 CHAR(30) ,
            6강시작 CHAR(30) ,
            7강 CHAR(30) ,
            7강시작 CHAR(30) ,
            8강 CHAR(30) ,
            8강시작 CHAR(30) ,
            9강 CHAR(30) ,
            9강시작 CHAR(30) ,
            10강 CHAR(30),
            10강시작 CHAR(30) 
            )";
            $pdo->query($sql);
$link = $name."link";
            $sql = "CREATE TABLE $link (
                idx INT (1),

                1강 TEXT NULL ,
                
                2강 TEXT NULL ,
                
                3강 TEXT NULL ,
                
                4강 TEXT NULL ,
                
                5강 TEXT NULL ,
                
                6강 TEXT NULL ,
                
                7강 TEXT NULL ,
                
                8강 TEXT NULL ,
                
                9강 TEXT NULL ,
               
                10강 TEXT NULL
               
                )";
                $pdo->query($sql);
$kkk = "1";
                $pdo->beginTransaction();
    $sql="insert into $link(idx)
        values(?)";
        $stmh=$pdo->prepare($sql);
        $stmh->bindValue(1,$kkk,PDO::PARAM_STR);
        $stmh->execute();
        $pdo->commit();
        require_once("MYDB.php");
        $pdo=db_connect();
    
$pass=$name."pass";
    
            $sql = "CREATE TABLE $pass (
                id_num INT(5) PRIMARY KEY
                )";
                $pdo->query($sql);
            ?>
            <script>
alert("생성이 완료되었습니다.");
history.back();
</script>
            