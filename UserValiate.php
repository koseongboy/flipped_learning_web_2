<?php
    $con = mysqli_connect("125.141.139.75" , "home","ejrth17623!","user");
      $id_num = $_POST['id_num'];
     $statement = mysqli_prepare($con, "SELECT * FROM USER WHERE id_num = ?");
     mysqli_stmt_bind_param($statement, "s", $id_num);
     mysqli_stmt_execute($statement);
     mysqli_stmt_store_result($statement);
     mysqli_stmt_bind_result($statement, $id_num);
     $response = array();
     $response["success"] = true;
     while(mysqli_stmt_fetch($statement)){
       $response["success"] = false;//회원가입불가를 나타냄
       $response["id_num"] = $id_num;
     }
     //데이터베이스 작업이 성공 혹은 실패한것을 알려줌
     echo json_encode($response);
?>
