<?php 
include('../../conn.php');

$id = $_POST['id'];
$vaksin = $_POST['vaksin'];
$update_dt = date("Y-m-d H:i:s");
$input_dt = $update_dt;

$sql = "UPDATE `vaksin` SET  `vaksin`='$vaksin', `input_dt`='$input_dt',  `update_dt`='$update_dt' WHERE `id_vaksin`='$id' ";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
   
    $data = array(
        'status'=>true,
        'vaksin'=>$vaksin,
        'msg' => 'Berhasil Update Data'
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