<?php 
	
	 $con = mysqli_connect("125.141.139.75","home","ejrth17623!","user");



	
	if($_SERVER['REQUEST_METHOD']=='POST'){

	$username = $_POST['id'];
		
	$password = $_POST['password'];


	$sql = "SELECT * FROM students WHERE id_num='$username' AND pw='$password'";

	
	$result = mysqli_query($con,$sql);

	$check = mysqli_fetch_array($result);

	
	if(isset($check))
	{

	echo "success";

	}
	else{

	echo "failure";

	}

		mysqli_close($con);

	}
?>
