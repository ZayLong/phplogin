<?php
	include 'core/init.php';
	logged_in_redirect();
	include 'includes/overall/overHeader.php';
	
	if(empty($_POST) === false)
	{
		$required_fields = array('username', 'password', 'password_again', 'first_name', 'email');
		
		foreach($_POST as $key=>$value){
			if(empty($value) && in_array($key, $required_fields) === true){
				$errors[]= 'Fields marked with an asterisk are required!';
				
				break 1;
			}
		}
		
		if(empty($errors) === true) {
			if(user_exists($_POST['username']) === true) {
				$errors[] = 'Sorry, that username, \'' . $_POST['username'] . '\' already exists.';
			}
			
			if(preg_match("/\\s/", $_POST['username']) == true){
				$errors[]= 'Your username cannot have any spaces';
			}
			
			//minimum password length requirement
			if(strlen($_POST['password']) < 6) {
				$errors[] = 'Sorry, your password must be at LEAST 6 characters long!';
			}
			if($_POST['password'] !== $_POST['password_again'])
			{
				$errors[] = 'Your passwords do not match';
			}
			
			if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)
			{
				$errors[] = 'A valid email address is needed';
			}
			
			if(email_exists($_POST['email']) === true)
			{
				$errors[] = 'Sorry, that email, \'' . $_POST['email'] . '\' already exists.';
			}
		}
	}
	
?>

<h4>Registration</h4>

<?php

//later change this up to require email validation
if(isset($_GET['success']) && empty ($_GET['success'])){
	echo 'You\'ve been successfully registered!';
} else {
	if(empty($_POST) === false && empty($errors) === true)
	{
		$register_data = array (
			'username' 		=> $_POST['username'],
			'password' 		=> $_POST['password'],
			'first_name' 	=> $_POST['first_name'],
			'last_name' 	=> $_POST['last_name'],
			'email' 		=> $_POST['email']
		);
		
		register_user($register_data);
		header('Location: register.php?success');
		exit();
	} else if(empty($errors) === false){
		echo output_errors($errors);
	}

?>
							
	<form action="" method="post" role="form">
	  <div class="form-group">
		<label for="inputUsername">User Name*:</label>
		<input type="text" class="form-control" id="inputEmail" placeholder="Enter desired user name" name="username">
	  </div>
	  <div class="form-group">
		<label for="inputPassword">Password*:</label>
		<input type="password" class="form-control" id="inputPass" placeholder="Enter desired password" name="password">
	  </div>
	  <div class="form-group">
		<label for="reenter password">Reenter your Password*:</label>
		<input type="password" class="form-control" id="inputPass_again" placeholder="reenter here" name="password_again">
	  </div>
	  <div class="form-group">
		<label for="inputPassword">First Name*:</label>
		<input type="text" class="form-control" id="inputFirst" placeholder="Enter First Name" name="first_name">
	  </div>
	  <div class="form-group">
		<label for="inputPassword">Last Name</label>
		<input type="text" class="form-control" id="inputLast" placeholder="Enter Last Name" name="last_name">
	  </div>
	  <div class="form-group">
		<label for="inputEmail">Email*:</label>
		<input type="email" class="form-control" id="inputEmail" placeholder="Enter email" name="email">
	  </div>
	 <button type="submit" class="btn btn-default">Register</button>
	</form>
	
	<?php 
	 }
	include 'includes/overall/overFooter.php';