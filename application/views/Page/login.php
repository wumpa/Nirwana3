<div class="sign-in">
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