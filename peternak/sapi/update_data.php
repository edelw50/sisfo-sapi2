<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include('../../conn.php');
require_once('../history/add_data.php');

$history = new History();

$id = $_POST['id_prim'];
$id_sapi = $_POST['id_sapi'];
$nama = $_POST['nama'];
$opsi_jenis = $_POST['opsi_jenis'];
$opsi_pakan = $_POST['opsi_pakan'];
$id_parent = $_POST['id_parent'];
$opsi_gender = $_POST['opsi_gender'];
$birth_dt = $_POST['birth_dt'];
$weight_kg = $_POST['weight_kg'];
$opsi_warna = $_POST['opsi_warna'];
$harga = $_POST['harga'];
$update_dt = date("Y-m-d H:i:s");
$input_dt = $update_dt;

$sql = "UPDATE `data_sapi` SET  `nama`='$nama', `id_jenis`= '$opsi_jenis', `id_pakan`='$opsi_pakan',  `jenis_kelamin`='$opsi_gender', `tgl_lahir` = '$birth_dt', `bobot_sapi`='$weight_kg', `warna_sapi`='$opsi_warna', `harga_sapi`='$harga', `id_parent`='$id_parent' WHERE `id`=$id ";
$query= mysqli_query($con,$sql);
mysqli_query($con, "DELETE FROM vaksin_sapi WHERE id_sapi='$id_sapi'");
if(isset($_POST['vaksin'])){
$array_vaksin = $_POST['vaksin'];
foreach ($array_vaksin as $vaksin){
   $query = mysqli_query($con, "INSERT INTO `vaksin_sapi` SET `id_sapi`='$id_sapi',`id_vaksin`='$vaksin'");
}
}
$lastId = mysqli_insert_id($con);
if($query ==true)
{
    $history->add_data('UPDATE SAPI DATA', $_COOKIE['id_user']);
    $data = array(
        'status'=>true,
        'msg' => 'Berhasil Update Data'
        // 'jenis'=>$jenis,
        // 'keterangan'=>$keterangan
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>false,
        'msg' => 'Gagal Update Data'
    );

    echo json_encode($data);
} 

?>