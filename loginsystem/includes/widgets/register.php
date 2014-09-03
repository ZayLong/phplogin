<?php
	include 'core/init.php';
	include 'includes/overall/overHeader.php';
?>

<h4>Registration</h4>
							
	<form action="login.php" method="post" role="form">
	  <div class="form-group">
		<label for="inputUsername">User Name</label>
		<input type="text" class="form-control" id="inputEmail" placeholder="Enter desired user name" name="username">
	  </div>
	  <div class="form-group">
		<label for="inputPassword">Password</label>
		<input type="password" class="form-control" id="inputPass" placeholder="Enter desired password" name="password">
	  </div>
	  <div class="form-group">
		<label for="inputPassword">First Name</label>
		<input type="text" class="form-control" id="inputFirst" placeholder="Enter First Name" name="firstName">
	  </div>
	  <div class="form-group">
		<label for="inputPassword">Last Name</label>
		<input type="password" class="form-control" id="inputLast" placeholder="Enter Last Name" name="lastName">
	  </div>
	  <div class="form-group">
		<label for="inputEmail">Email</label>
		<input type="email" class="form-control" id="inputEmail" placeholder="Enter email" name="email">
	  </div>
	 <button type="submit" class="btn btn-default">Register</button>
	</form>
	
	<?php include 'includes/overall/overFooter.php';