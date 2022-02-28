    <?php

            require_once("MYDB.php");
            $pdo=db_connect();
            require_once("MYDB.php");
            $pdo1=db_connect();
            require_once("MYDB.php");
            $pdo2=db_connect();


    header( "Content-type: application/vnd.ms-excel; charset=utf-8");

    header( "Content-Disposition: attachment; filename =출석.xls" );     //filename = 저장되는 파일명을 설정합니다.

    header( "Content-Description: PHP4 Generated Data" );



    //엑셀 파일로 만들고자 하는 데이터의 테이블을 만듭니다.
    $EXCEL_FILE ="

    <table border='1'>

        <tr>

           <td>출석</td>
    
    ";
            $sql="select * from checking ";
            $stmh=$pdo->query($sql);
            $count=$stmh->rowCount();
            while($row=$stmh->fetch(PDO::FETCH_ASSOC)){
            $date=$row['date'];
	    $EXCEL_FILE = "$EXCEL_FILE"."

    

        

           <td>".$date."</td>
            
    ";

    }
    $EXCEL_FILE = "$EXCEL_FILE"."</tr>";


            $sql="select * from checking ";
            $stmh=$pdo->query($sql);
            $count=$stmh->rowCount();
                
            
            
         $EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>1번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['1번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>2번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['2번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>3번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['3번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>4번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['4번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>5번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['5번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>6번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['6번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>7번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['7번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>8번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['8번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>9번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['9번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>10번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['10번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>11번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['11번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>12번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['12번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>13번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['13번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>14번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['14번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>15번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['15번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>16번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['16번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>17번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['17번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>18번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['18번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>19번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['19번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>20번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['20번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>21번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['21번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>22번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['22번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>23번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['23번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>24번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['24번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>25번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['25번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>26번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['26번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>27번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['27번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>28번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['28번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>29번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['29번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>30번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['30번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>31번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['31번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>32번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['32번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>33번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['33번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>34번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['34번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>35번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['35번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>36번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['36번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>37번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['37번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>38번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['38번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>39번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['39번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>40번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['40번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>41번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['41번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>42번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['42번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>43번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['43번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>44번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['44번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>45번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['45번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>46번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['46번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>47번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['47번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>48번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['48번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>49번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['49번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>50번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['50번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>51번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['51번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>52번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['52번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>53번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['53번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>54번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['54번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>55번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['55번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>56번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['56번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>57번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['57번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>58번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['58번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>59번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['59번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>60번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['60번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>61번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['61번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>62번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['62번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>63번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['63번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>64번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['64번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>65번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['65번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>66번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['66번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>67번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['67번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>68번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['68번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>69번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['69번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>70번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['70번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>71번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['71번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>72번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['72번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>73번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['73번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>74번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['74번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>75번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['75번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>76번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['76번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>77번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['77번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>78번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['78번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>79번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['79번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>80번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['80번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>81번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['81번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>82번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['82번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>83번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['83번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>84번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['84번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>85번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['85번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>86번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['86번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>87번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['87번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>88번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['88번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>89번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['89번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>90번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['90번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>91번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['91번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>92번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['92번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>93번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['93번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>94번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['94번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>95번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['95번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>96번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['96번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>97번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['97번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>98번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['98번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>99번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['99번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>100번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['100번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>101번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['101번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>102번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['102번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>103번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['103번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>104번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['104번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>105번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['105번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>106번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['106번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>107번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['107번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>108번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['108번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>109번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['109번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>110번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['110번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>111번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['111번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>112번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['112번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>113번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['113번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>114번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['114번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>115번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['115번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>116번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['116번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>117번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['117번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>118번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['118번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>119번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['119번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>120번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['120번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>121번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['121번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>122번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['122번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>123번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['123번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>124번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['124번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>125번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['125번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>126번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['126번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>127번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['127번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>128번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['128번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>129번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['129번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>130번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['130번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>131번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['131번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>132번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['132번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>133번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['133번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>134번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['134번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>135번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['135번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>136번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['136번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>137번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['137번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>138번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['138번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>139번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['139번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>140번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['140번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>141번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['141번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>142번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['142번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>143번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['143번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>144번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['144번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>145번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['145번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>146번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['146번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>147번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['147번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>148번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['148번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>149번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['149번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>150번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['150번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>151번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['151번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>152번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['152번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>153번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['153번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>154번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['154번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>155번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['155번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>156번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['156번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>157번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['157번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>158번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['158번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>159번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['159번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>160번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['160번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>161번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['161번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>162번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['162번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>163번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['163번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>164번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['164번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>165번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['165번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>166번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['166번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>167번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['167번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
$EXCEL_FILE = "$EXCEL_FILE"." <tr> <td>168번</td> "; while($row=$stmh->fetch(PDO::FETCH_ASSOC)){ $a = $row['168번']; $EXCEL_FILE = "$EXCEL_FILE"." <td>".$a."</td> "; } $EXCEL_FILE = "$EXCEL_FILE"."</tr>";
$sql="select * from checking "; $stmh=$pdo->query($sql); $count=$stmh->rowCount();
    $EXCEL_FILE = "$EXCEL_FILE"."</table>";



    // 만든 테이블을 출력해줘야 만들어진 엑셀파일에 데이터가 나타납니다.



    echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";

    echo $EXCEL_FILE;

    ?>