<?php 
include('../../conn.php');

$id = $_POST['id'];
$id_sapi = $_POST['id_sapi'];
mysqli_query($con, "DELETE FROM vaksin_sapi WHERE id_sapi='$id_sapi'");
$sql="DELETE FROM data_sapi WHERE id = $id";
$delQuery =mysqli_query($con,$sql);
if($delQuery==true)
{
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