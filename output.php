<?php
$no = $_REQUEST["num"];

        require_once("MYDB.php");
        $pdo=db_connect();
        $asd="SELECT * FROM schedule WHERE no=$no";
        $stmhs = $pdo->query($asd);
    
    
    while($row = $stmhs->fetch(PDO::FETCH_ASSOC)){
        $name=$row["name"];


header( "Content-type: application/vnd.ms-excel; charset=utf-8");

header( "Content-Disposition: attachment; filename = $name"."신청 인원.xls" );     //filename = 저장되는 파일명을 설정합니다.

header( "Content-Description: PHP4 Generated Data" );



//엑셀 파일로 만들고자 하는 데이터의 테이블을 만듭니다.



$EXCEL_FILE = "

<table border='1'>

    <tr>

       <td>학번</td>

       <td>이름</td>

    </tr>

";


        $sql="select * from $name";
        $stmh=$pdo->query($sql);
        $count=$stmh->rowCount();
        while($row=$stmh->fetch(PDO::FETCH_ASSOC)){


    $i=$row['id_num'];
    $n=$row['student'];



    $EXCEL_FILE = "$EXCEL_FILE"."


        <tr>

        <td>".$i."</td>
        <td>".$n."</td>

        


        </tr>

    ";

}



$EXCEL_FILE = "$EXCEL_FILE"."</table>";



// 만든 테이블을 출력해줘야 만들어진 엑셀파일에 데이터가 나타납니다.



echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";

echo $EXCEL_FILE;
    }
?>