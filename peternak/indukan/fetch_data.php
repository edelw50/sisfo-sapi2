<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); 
include('../../conn.php');

$output= array();
$sql = "SELECT * FROM data_sapi";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'id',
	1 => 'nama',
	2 => 'id_sapi',
	3 => 'id_parent',
	4 => 'id_jenis',
	5 => 'id_pakan',
    6 => 'jenis_kelamin',
    7 => 'tgl_lahir',
    8 => 'bobot_sapi',
    9 => 'warna_sapi',
    10 => 'harga_sapi',
    11 => 'input_dt',
    12 => 'update_dt'
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE (nama like '%".$search_value."%'";
	$sql .= " OR jenis_kelamin like '%".$search_value."%'";
    $sql .= " OR warna_sapi like '%".$search_value."%')";
    $sql .= "and id in (select id_parent from data_sapi)";
}else{
    $sql .= "where id in (select id_parent from data_sapi)";
}


$query = mysqli_query($con,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
	$sub_array[] = $row['id'];
	$sub_array[] = $row['nama'];
	$sub_array[] = $row['id_sapi'];
	$sub_array[] = $row['id_parent'];
	$sub_array[] = $row['id_jenis'];
	$sub_array[] = $row['id_pakan'];
    $sub_array[] = $row['jenis_kelamin'];
    $sub_array[] = $row['tgl_lahir'];
    $sub_array[] = $row['bobot_sapi'];
    $sub_array[] = $row['warna_sapi'];
    $sub_array[] = $row['harga_sapi'];
    $sub_array[] = $row['input_dt'];
    $sub_array[] = $row['update_dt'];
	$sub_array[] = '<a href="page.php?view-induk&id='.$row['id_sapi'].'" data-id="'.$row['id'].'" class="btn btn-success btn-sm viewbtn">View</a>';
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);

?>
