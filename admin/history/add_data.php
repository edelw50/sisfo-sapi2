<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include('../../conn.php');

class History {
    public function add_data($action = null, $id = null){
        global $con;
        if(!is_null($id) && !is_null($action))
        {
            $date = date("Y-m-d H:i:s");
            // $sql = "UPDATE history SET action = '$action', id_user = '$id', created_at = '$date', updated_at = '$date'";
            $sql = "INSERT INTO history (id_user, action, updated_at, created_at) VALUES ('$id', '$action', '$date', '$date')";
            $exec = mysqli_query($con, $sql);
        }
    }
}