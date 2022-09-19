<?php 
include('../../conn.php');
require_once('../history/add_data.php');

$history = new History();

$id = $_POST['id'];
$jenis = $_POST['jenis'];
$keterangan = $_POST['keterangan']; 
$update_dt = date("Y-m-d H:i:s");
$input_dt = $update_dt;

$sql = "UPDATE `jenis` SET  `jenis`='$jenis', `keterangan`= '$keterangan', `input_dt`='$input_dt',  `update_dt`='$update_dt' WHERE `id_jenis`='$id' ";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
    $history->add_data('UPDATE JENIS DATA', $_COOKIE['id_user']);
    $data = array(
        'status'=>true,
        'jenis'=>$jenis,
        'keterangan'=>$keterangan,
        'msg'=> 'Berhasil Update Jenis Data'
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>false,
        'msg'=> 'Gagal Update Jenis Data'
      
    );

    echo json_encode($data);
} 

?>