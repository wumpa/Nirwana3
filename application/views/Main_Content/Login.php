<div class="sign-in">
	<h2>Sign In</h2>
					<?php
						echo form_open("login/validate");
						echo "Username : "; echo form_input("username","");
						echo "<br />";
						echo "Password : "; echo form_password("password","");
						echo "<br />";
						echo form_submit("validate","Login");
						echo form_close();
					?>
</div>
