<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include('../../conn.php');

$output= array();
$sql = "SELECT
			ds.id as id,
			ds.nama as nama,
			ds.id_sapi as id_sapi,
			-- ds.id_parent as id_parent,
			ds.jenis_kelamin as jenis_kelamin,
			ds.tgl_lahir as tgl_lahir,
			ds.bobot_sapi as bobot_sapi,
			ds.warna_sapi as warna_sapi,
			ds.harga_sapi as harga_sapi,
			ds.input_dt as input_dt,
			ds.update_dt as update_dt,
			j.jenis as id_jenis,
			p.pakan as id_pakan,
			parent.nama as id_parent
		FROM data_sapi AS ds
		LEFT JOIN jenis AS j
		ON ds.id_jenis = j.id_jenis
		LEFT JOIN pakan AS p
		ON ds.id_pakan = p.id_pakan
		LEFT JOIN data_sapi as parent
		on ds.id_parent = parent.id
		";

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
	$sql .= " WHERE ds.nama like '%".$search_value."%'";
	$sql .= " OR ds.jenis_kelamin like '%".$search_value."%'";
    $sql .= " OR ds.warna_sapi like '%".$search_value."%'";
}

// if(isset($_POST['order']))
// {
// 	$column_name = $_POST['order'][0]['column'];
// 	$order = $_POST['order'][0]['dir'];
// 	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
// }
// else
// {
// 	$sql .= " ORDER BY id desc";columns
// }

// if($_POST['length'] != -1)
// {
// 	$start = $_POST['start'];
// 	$length = $_POST['length'];
// 	$sql .= " LIMIT  ".$start.", ".$length;
// }	

$query = mysqli_query($con,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
$no = 1;
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
	$sub_array[] = $no;
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
	$sub_array[] = '<a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-info btn-sm mx-1 my-1 editbtn" >Edit</a> <a href="page.php?view&id='.$row['id_sapi'].'" data-id="'.$row['id'].'" class="btn mx-1 my-1 btn-success btn-sm viewbtn">View</a> <a href="javascript:void();" data-id="'.$row['id'].'" data-id_sapi="'.$row['id_sapi'].'" class="btn mx-1 my-1 btn-danger btn-sm deleteBtn" >Delete</a>';
	$data[] = $sub_array;
	$no++;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);

?>
