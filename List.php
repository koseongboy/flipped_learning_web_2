<?php
$con=mysqli_connect("125.141.139.75","home","ejrth17623!","user");
mysqli_set_charset($con,"utf8"); 


$sql="select * from subjects";

$result=mysqli_query($con,$sql);
$data = array();   
if($result){  
    
    while($row=mysqli_fetch_array($result)){
        array_push($data, 
            array('name'=>$row[0]
        ));
    }

    echo "<pre>"; print_r($data); echo '</pre>';

}  
echo json_encode(array("response"=>$data));

mysqli_close($con);
?>


