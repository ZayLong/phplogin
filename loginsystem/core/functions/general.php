<?php

//this for pages you don't want logged in users to access
function logged_in_redirect(){
	if(user_logged_in() === true){
		header('Location: index.php');
		exit();
	}
}


//basically put this on any page where you don't want the user to access unless they're logged in
function protect_page()
{
	if(user_logged_in() === false)
	{
		header('Location: protected.php');
		exit();
	} 
}

function array_sanitize(&$item)
{
	$item = mysql_real_escape_string($item);
}
function sanitize($data) {
	return mysql_real_escape_string($data);
}

function output_errors($errors) {
	return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}
?>