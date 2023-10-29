<?php
// Telegram @fletchen
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';
$del_id = filter_input(INPUT_POST, 'del_id');
if ($del_id && $_SERVER['REQUEST_METHOD'] == 'POST')
{

	if($_SESSION['admin_type']!='super'){
		$_SESSION['failure'] = "You don't have permission to perform this action";
    	header('location: logs.php');
        exit;

	}
    $customer_id = $del_id;

    $db = getDbInstance();
    $db->where('id', $customer_id);
    $status = $db->delete('logs');

    if ($status)
    {
        $_SESSION['info'] = "Customer deleted successfully!";
        header('location: logs.php');
        exit;
    }
    else
    {
    	$_SESSION['failure'] = "Unable to delete log";
    	header('location: logs.php');
        exit;

    }

}