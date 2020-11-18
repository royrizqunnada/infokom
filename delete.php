<?php 
session_start();
include_once('connect.php');
$database = new database();
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
	$database->delete($_REQUEST['id']);
	header('location: tableorder.php');
	exit;
}else{
    echo "error";
}
?>
