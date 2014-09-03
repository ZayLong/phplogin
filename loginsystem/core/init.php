<?php
	session_start();
	//error_reporting(0);
	
	require 'database/connect.php';
	require 'functions/general.php';
	require 'functions/users.php';
	
	if(user_logged_in() === true){
		$session_user_id = $_SESSION['user_id'];
		$user_data = user_data($session_user_id, 'user_id', 'username', 'password', 'first_name', 'last_name', 'email');
		
			//this can log a user out if they're currently logged in by checking their active status. if an admin changes the status from 1 to 0 they will be booted out
			if(isset($user_data['username']))
			{
				if(user_active($user_data['username']) === false)
				{
					session_destroy();
					header('Location: index.php');
					exit();
				}
			}
		
	}
	
	$errors = array();
?>