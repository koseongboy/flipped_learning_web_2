<?php
session_start();
?>
<!DOCTYPE html>
<?php
    require_once("MYDB.php");
    $pdo=db_connect();
?>

<html>
    <head>
        <meta charset="UTF-8">
        
        <title>회원관리</title>
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
    if($_SESSION["id_num"]=="admin")
    {
        ?>
    <h1>회원 관리</h1>
    <h1 style = "width : 800px; margin-left : 500px;">Ctrl+F로 학번 편하게 검색하실 수 있습니다.</h1>
    <fieldset>
        <?php
            try {
                $sql="select * from students";
                    $stmh=$pdo->query($sql);
                    $count=$stmh->rowCount();
                    print "인원은 $count 명 입니다.<br>";
            } catch (PDOException $Exception) {
                echo "오류 :".$Exception->getMessage();
            }
           
        ?>
        <input type="button" value="나가기" onClick="location.href='http://125.141.139.75/admin3.php'"/>
        <table border="1" width="600">
            <tr align="center">
                <th>학번</th><th>이름</th><th>비밀번호</th><th>삭제</th><th>수정</th>
                
            </tr>
            <?php
            while($row=$stmh->fetch(PDO::FETCH_ASSOC)){


            ?>
            <tr align="center">
                <td><?=$row['id_num']?></td>
                <td><?=$row['name']?></td>
                <td><?=$row['pw']?></td>
                <td><a href="delete.php?id_num=<?=$row['id_num']?>">삭제</a></td>
                <td><a href="updateForm1.php?id_num=<?=$row['id_num']?>">수정</a></td>
            </tr>
        <?php } ?>
        </table>
            </fieldset>
            <?php
     }
     if ($_SESSION['id_num']!="admin")
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