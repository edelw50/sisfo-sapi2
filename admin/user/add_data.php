<?php 

include('../../conn.php');
require_once('../history/add_data.php');

$history = new History();

$username = strtolower(stripslashes($_POST["usernameAdd"]));
$password = mysqli_real_escape_string($con, $_POST["passwordAdd1"]);
$password2 = mysqli_real_escape_string($con, $_POST["passwordAdd2"]);
$input_dt = date("Y-m-d H:i:s");
$update_dt = $input_dt;
$level = $_POST["levelAdd"];

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

//cek konfirmasi pass
if($password !== $password2){
    echo "
        <script> 
            alert('konfirmasi password tidak sesuai!');
        </script>
    ";
    return false;
}

//enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);


//tambah user baru ke db

$sql="INSERT INTO user (username,password, level, input_dt, update_dt) VALUES ('$username', '$password', '$level', '$input_dt', '$update_dt')";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);

if($query ==true)
{
    $history->add_data('ADD USER DATA', $_COOKIE['id_user']);
    $data = array(
        'status'=>true,
        'msg'=> 'Berhasil Tambah User Data'
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>false,
        'msg'=> 'Gagal Tambah User Data'
      
    );

    echo json_encode($data);
} 

?>
