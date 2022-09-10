<?php 
include('../../conn.php');

$id_vaksin = $_POST['id'];
$sql = "DELETE FROM vaksin WHERE id_vaksin='$id_vaksin'";
$delQuery =mysqli_query($con,$sql);
if($delQuery==true)
{
	 $data = array(
        'status'=>'success',
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'failed',
      
    );

    echo json_encode($data);
} 

?>