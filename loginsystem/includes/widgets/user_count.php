<h4>Users</h4>
	<div>
		<?php
			if(user_count() < 2)
			{
				echo "There is only " . user_count() . " user registered!";
			} else if(user_count() > 1)
			{
				echo "There are " . user_count() . " users registered!";
			}
		?>
	</div>