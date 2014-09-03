<div class="col-sm-3 col-sm-offset-1">
	<div class="sidebar-module sidebar-module-inset panel panel-default">
					
		<?php 
			if(user_logged_in() === true) {
				include 'includes/widgets/loggedin.php';
			} else {
				include 'includes/widgets/loginform.php';
			}
			include 'includes/widgets/user_count.php';
		?>
		</div>
	</div>