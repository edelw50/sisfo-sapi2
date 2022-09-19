<?php 
include('../../conn.php');
require_once('../history/add_data.php');

$history = new History();

$jenis = $_POST['jenis'];
$keterangan = $_POST['keterangan'];
$input_dt = date("Y-m-d H:i:s");
$update_dt = $input_dt;

$sql = "INSERT INTO `jenis` (`jenis`,`keterangan`,`input_dt`,`update_dt`) values ('$jenis', '$keterangan','$input_dt', '$update_dt')";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
    $history->add_data('ADD DATA JENIS', $_COOKIE['id_user']);
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
