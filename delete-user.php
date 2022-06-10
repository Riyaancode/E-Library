<?php

include('Partials\functions.php');

function isAdmin() {
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}


if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

$id = $_GET['userid'];
$delete = $db->query("DELETE FROM `users` WHERE `users`.`id` = $id");

if($delete){
    $statusMsg = "The E-Book ".$id. " has been deleted successfully.";
}else{
    $statusMsg = "The E-Book".$id. " failed to delete, please try again." . mysqli_error($db);
} 

echo $statusMsg;

?>