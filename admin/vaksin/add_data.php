<?php 
include('../../conn.php');

$vaksin = $_POST['vaksin'];
$input_dt = date("Y-m-d H:i:s");
$update_dt = $input_dt;

$sql = "INSERT INTO `vaksin` (`vaksin`,`input_dt`,`update_dt`) values ('$vaksin','$input_dt', '$update_dt')";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
    $history->add_data('ADD VAKSIN DATA', $_COOKIE['id_user']);
    $data = array(
        'status'=>true,
        'msg'=> 'Berhasil Tambah Vaksin Data'
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>false,
        'msg'=> 'Gagal Tambah Vaksin Data'
      
    );

    echo json_encode($data);
} 

?>
