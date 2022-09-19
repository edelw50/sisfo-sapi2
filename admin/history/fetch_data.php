<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL); 
include('../../conn.php');

$output= array();
$sql = "SELECT * FROM history WHERE id_user = '".$_COOKIE['id_user']."'";
$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'id',
	1 => 'id_user',
	2 => 'action',
    3 => 'updated_at',
    4 => 'created_at'
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " AND action like '%".$search_value."%'";
}

$sql .= "ORDER BY created_at DESC";


$query = mysqli_query($con,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
$no = 1;
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
	$sub_array[] = $no;
	$sub_array[] = $row['id_user'];
	$sub_array[] = $row['action'];
	$sub_array[] = $row['updated_at'];
	$sub_array[] = $row['created_at'];
	$data[] = $sub_array;
    $no++;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo json_encode($output);

?>
