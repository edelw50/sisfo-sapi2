<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include('../../conn.php');
require_once('../history/add_data.php');

$history = new History();

$id = $_POST['id'];
$vaksin = $_POST['vaksin'];
$update_dt = date("Y-m-d H:i:s");
$input_dt = $update_dt;

$sql = "UPDATE `vaksin` SET  `vaksin`='$vaksin', `input_dt`='$input_dt',  `update_dt`='$update_dt' WHERE `id_vaksin`='$id' ";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
    $history->add_data('UPDATE VAKSIN DATA', $_COOKIE['id_user']);
    $data = array(
        'status'=>true,
        'vaksin'=>$vaksin,
        'msg'=> 'Berhasil Update Vaksin Data'
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>false,
        'msg'=> 'Gagal Update Vaksin Data'
      
    );

    echo json_encode($data);
} 

?>