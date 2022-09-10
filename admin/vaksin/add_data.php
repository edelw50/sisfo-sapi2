<?php 
include('../../conn.php');

$vaksin = $_POST['vaksin'];
$input_dt = date("Y-m-d H:i:s");
$update_dt = $input_dt;

$sql = "INSERT INTO `vaksin` (`vaksin`,`input_dt`,`update_dt`) values ('$jenis','$input_dt', '$update_dt')";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
   
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'false',
      
    );

    echo json_encode($data);
} 

?>
