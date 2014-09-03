<?php
	include 'core/init.php';
	 
	if(empty($_POST) === false) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		//error handling script
		if(empty($username) === true || empty($password) === true)
		{
			$errors[] = 'You need to enter a username and password';
		} else if(user_exists($username) === false) {
			$errors[] = 'We couldn\'t find that user name. Have you registered?';
		} else if(user_active($username) === false) {
			$errors[] = 'You have not activated your account!';
		} else {
			$login = login($username, $password);
			if($login == false)
			{
			
				if(strlen($password) > 32){
						$errors[] = 'password is too long!';
					}
				$errors[] = 'That combination of username and password is incorrect!';
			} else {
	
				$_SESSION['user_id'] = $login;
				header('Location: index.php');
				exit();
			}
		}
	} else {
		$errors[] = 'No data received';
	}
	include '/includes/overall/overHeader.php'; 
	if(empty($errors) === false) {
		?>
		<h2> We tried to log you in, but...</h2>
		<?php
		echo output_errors($errors);
	}
	include '/includes/overall/overFooter.php';
?>