<?php 
// include('../functions.php');



// if(isset($_POST["addJenis"])){

//     if(addJenis($_POST)>0){
//         echo "
//             <script> 
//                 alert('Jenis sapi baru berhasil ditambahkan!');
//             </script>
//         ";
//         $data = array(
//             'status'=>'true',
//         );
    
//         echo json_encode($data);
//     }else{
//         $data = array(
//             'status'=>'false',
          
//         );
//         echo json_encode($data);
//         echo mysqli_error($conn);
//     }
// }


include('../../conn.php');
require_once('../history/add_data.php');

$history = new History();
date_default_timezone_set('Asia/Jakarta');

$pakan = $_POST['pakan'];
$input_dt = date("Y-m-d H:i:s");
$update_dt = $input_dt;

$sql = "INSERT INTO `pakan` (`pakan`,`input_dt`,`update_dt`) values ('$pakan','$input_dt', '$update_dt')";
$query= mysqli_query($con,$sql);
$lastId = mysqli_insert_id($con);
if($query ==true)
{
    $history->add_data('ADD PAKAN DATA', $_COOKIE['id_user']);
    $data = array(
        'status'=>true,
        'msg'=> 'Berhasil Tambah Pakan Data'
       
    );

    echo json_encode($data);
}
else
{
     $data = array(
        'status'=>false,
        'msg'=> 'Gagal Tambah Pakan Data'
      
    );

    echo json_encode($data);
} 

?>
