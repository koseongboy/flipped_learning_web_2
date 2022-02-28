<?php
session_start();
    $no=$_REQUEST["num"];
    require_once("MYDB.php");
    $pdor = db_connect();
    $asd="SELECT * FROM schedule WHERE no=$no";
    $stmhs = $pdor->query($asd);


while($row = $stmhs->fetch(PDO::FETCH_ASSOC)){
    $name=$row["name"];
    $pdor->beginTransaction();
       $sql = "delete from user.$name where id_num = ?";   
       $stmh = $pdor->prepare($sql);
       $stmh->bindValue(1,$_SESSION["id_num"],PDO::PARAM_STR);
       $stmh->execute();
       $pdor->commit();
    
}
        
  ?>
  <script>
  alert("취소가 완료되었습니다.");
  history.back();
  </script>
