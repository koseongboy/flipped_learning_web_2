<?php  
 $con = mysqli_connect("125.141.139.75" , "home","ejrth17623!","user");
   
     $id_num = $_POST['id_num'];
     $pw = $_POST['pw'];
 
     //insert 쿼리문을 실행함
     $statement = mysqli_prepare($con, "INSERT INTO USER VALUES (?, ?)");
     mysqli_stmt_bind_param($statement, "ss", $id_num, $pw);
     mysqli_stmt_execute($statement);
     $response = array();
     $response["success"] = true;
     //회원 가입 성공을 알려주기 위한 부분임
     echo json_encode($response); 
?>

