<?php 
include('../../conn.php');
require_once('../history/add_data.php');

$history = new History();

$user_id = $_POST['id'];
$sql = "DELETE FROM user WHERE id_user='$user_id'";
$delQuery =mysqli_query($con,$sql);
if($delQuery==true)
{
    $history->add_data('DELETE USER DATA', $_COOKIE['id_user']);
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