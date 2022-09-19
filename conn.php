<?php
date_default_timezone_set('Asia/Jakarta');
// $con  = mysqli_connect('localhost','siss1274_admin','javanica123','siss1274_test');
$con = mysqli_connect('127.0.0.1','root','LogicalMover123!@#','sapi');

if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
}
