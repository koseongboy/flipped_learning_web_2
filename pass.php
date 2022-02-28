<?php
session_start();

?>
<!DOCTYPE html>
<?php
$sub = $_REQUEST["sub"];
$pass = $sub."pass";
    require_once("MYDB.php");
    $pdo=db_connect();
?>

<html>
    <head>
        <meta charset="UTF-8">
        
        <title>방과후 수업 승인하기</title>
    </head>
    <body>
    <style>
        
        fieldset {
            
            margin-inline-start: 500px;
            margin-inline-end: 500px;
            
        }
        h1 {

            margin-inline-start: 670px;
            margin-inline-end: 670px;
            
        }
    </style>
    <?php 
    $today = date("Y-m-d");
    
    if($_SESSION["id_num"]=="admin")
    {
        ?>
    <h1>방과후 수업 승인하기</h1>
    <fieldset>
        <?php
            try {
                $sql="select * from $pass";
                    $stmh=$pdo->query($sql);
                    $count=$stmh->rowCount();
                    print "수강 신청 한 인원은 $count 명 입니다.<br>";
                    
            } catch (PDOException $Exception) {
                echo "오류 :".$Exception->getMessage();
            }
            if($count<1){print "수강 신청자가 없습니다.<br>";}
            
        ?>
        <input type="button" value="나가기" onClick="location.href='http://125.141.139.75/admin2.php'"/>
        <table border="1" width="600">
            <tr align="center">
           
                <th>학번</th><th>승인여부</th>

            </tr>
            <?php
            while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
                $id = $row['id_num'];


                    ?>

            <tr align="center">
                <td><?=$row['id_num']?></td>
                <td><input type="button" value="승인" onClick="location.href='http://125.141.139.75/passcheck.php?id=<?=$id?>&&sub=<?=$sub?>'"/></td>
            </tr>
        <?php } ?>
        </table>
            </fieldset>
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
    </body>
</html>