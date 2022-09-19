<?php 
include('../../conn.php');
require_once('../history/add_data.php');

$history = new History();

$id = $_POST['id'];
$id_sapi = $_POST['id_sapi'];
mysqli_query($con, "DELETE FROM vaksin_sapi WHERE id_sapi='$id_sapi'");
$sql="DELETE FROM data_sapi WHERE id = $id";
$delQuery =mysqli_query($con,$sql);
if($delQuery==true)
{
    $history->add_data('DELETE SAPI DATA', $_COOKIE['id_user']);
	 $data = array(
        'status'=>true,
        'msg' => 'Berhasil Hapus Data'
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>false,
        'msg' => 'Gagal Hapus Data'
    );

    echo json_encode($data);
} 

?>