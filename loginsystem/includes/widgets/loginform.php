		<h4>User Login</h4>
		<form action="login.php" method="post" role="form">
		  <div class="form-group">
			<label for="inputUsername">User Name</label>
			<input type="text" class="form-control" id="inputEmail" placeholder="Enter user name" name="username">
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="inputPass" placeholder="Password" name="password">
		  </div>
		   <div class="checkbox">
			<label>
			  <input type="checkbox"> remember me
			</label>
		  </div>
		  <label>
			<a href="register.php"> Register </a>
			</label>
		 <button type="submit" class="btn btn-default">Login</button>
		</form>