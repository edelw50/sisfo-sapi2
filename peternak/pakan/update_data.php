<?php 
include('../../conn.php');
require_once('../history/add_data.php');

$history = new History();

$id = $_POST['id'];
$pakan = $_POST['pakan'];
$update_dt = date("Y-m-d H:i:s");
$input_dt = $update_dt;

$sql = "UPDATE `pakan` SET  `pakan`='$pakan', `input_dt`='$input_dt',  `update_dt`='$update_dt' WHERE `id_pakan`='$id' ";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
    $history->add_data('UPDATE PAKAN DATA', $_COOKIE['id_user']);
    $data = array(
        'status'=>true,
        'pakan'=>$pakan,
        'msg' => 'Berhasil update data'
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>false,
        'msg' => 'Gagal update data'
      
    );

    echo json_encode($data);
} 

?>