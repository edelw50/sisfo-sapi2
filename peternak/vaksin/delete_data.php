<?php 
include('../../conn.php');
require_once('../history/add_data.php');

$history = new History();

$id_vaksin = $_POST['id'];
$sql = "DELETE FROM vaksin WHERE id_vaksin='$id_vaksin'";
$delQuery =mysqli_query($con,$sql);
if($delQuery==true)
{
    $history->add_data('DELETE VAKSIN DATA', $_COOKIE['id_user']);
	 $data = array(
        'status'=>true,
        'msg' => 'Berhasil Hapus Data'
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>'failed',
        'msg' => 'Gagal Hapus Data'
    );

    echo json_encode($data);
} 

?>