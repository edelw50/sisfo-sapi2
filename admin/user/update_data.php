<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include('../../conn.php');
require_once('../history/add_data.php');

$history = new History();

$id = $_POST['id'];
$username = strtolower(stripslashes($_POST["usernameEdit"]));
$level = $_POST["levelEdit"];
$password = mysqli_real_escape_string($con, $_POST["passwordEdit1"]);
$password2 = mysqli_real_escape_string($con, $_POST["passwordEdit2"]);
$update_dt = date("Y-m-d H:i:s");

//cek username sudah ada/belum
$result = mysqli_query($con, "SELECT username FROM user WHERE username = '$username'");

if(mysqli_fetch_assoc($result)){
    echo "
        <script> 
            alert('username sudah terdaftar!');
        </script>
    ";
    return false;
}

// cek konfirmasi pass
if($password !== $password2){
    echo "
        <script> 
            alert('konfirmasi password tidak sesuai!');
        </script>
    ";
    return false;
}

// enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);

$sql = "UPDATE `user` SET  `username`='$username', `level`= '$level', `input_dt`='',  `update_dt`='$update_dt' WHERE `id_user`='$id' ";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
    $history->add_data('UPDATE USER DATA', $_COOKIE['id_user']);
    $data = array(
        'status'=>true,
        'msg'=> 'Berhasil Update User Data'
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