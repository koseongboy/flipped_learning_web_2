<?php

$name=$_REQUEST["sub"];

        require_once("MYDB.php");
        $pdo=db_connect();



header( "Content-type: application/vnd.ms-excel; charset=utf-8");

header( "Content-Disposition: attachment; filename = $name"."수강시간.xls" );     //filename = 저장되는 파일명을 설정합니다.

header( "Content-Description: PHP4 Generated Data" );



//엑셀 파일로 만들고자 하는 데이터의 테이블을 만듭니다.

require_once("MYDB.php");
            $pdor= db_connect();
            
            $sql111="select * from $name";
            $stmh1 = $pdor->prepare("$sql111");
                    $n=$stmh1->columnCount();
                    $stmh1->execute();
                    $n=$stmh1->columnCount();
                    $n=($n/2);

            

$EXCEL_FILE = "

<table border='1'>

    <tr>

       <td>학번</td>
       ";
       for ($x=1;$x<$n;$x++){
       
        $EXCEL_FILE = "$EXCEL_FILE"."
        <td>".$x."강</td>
        <td>".$x."강 시작시간</td>
        ";
       }
       $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
       
       

        $sql="select * from $name";
        $stmh=$pdo->query($sql);
        $count=$stmh->rowCount();
        while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
            $i=$row['id_num'];
            $EXCEL_FILE = "$EXCEL_FILE"."


        <tr>

        <td>".$i."</td>";
            for ($x=1;$x<$n;$x++){
                $c1=$row[$x."강"];
                $s1=$row[$x."강시작"];
                $EXCEL_FILE = "$EXCEL_FILE"."<td>$c1</td><td>$s1</td>";
            }
    
            $EXCEL_FILE = "$EXCEL_FILE"."</tr>";



}
       


$EXCEL_FILE = "$EXCEL_FILE"."</table>";



// 만든 테이블을 출력해줘야 만들어진 엑셀파일에 데이터가 나타납니다.



echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";

echo $EXCEL_FILE;

?>