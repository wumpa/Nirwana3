<div class="sign-in">
	<h2>Sign In</h2>
					<?php
						echo form_open("login/validate");
						echo form_input("username","","placeholder=username");
						echo "<br />";
						echo form_password("password","","placeholder=password");
						echo "<br />";
						echo form_submit("validate","Login");
						echo form_close();
					?>
</div>
