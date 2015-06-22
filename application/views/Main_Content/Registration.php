<div class="regist">
	<h2>Sign Up</h2>
		<?php
						echo form_open("registration/createUser");
						echo "Username : ";echo form_input("username","");
						echo "<br />";
						echo "Password : "; echo form_password("password","");
						echo "<br />";
						echo "Nama : "; echo form_input("name","");
						echo "<br />";
						echo "Alamat : "; echo form_input("address","");
						echo "<br />";
						echo "Kota : "; echo form_input("city","");
						echo "<br />";
						echo "Telepon : "; echo form_input("phonenumber","");
						echo "<br />";
						echo "E-mail : "; echo form_input("email","");
						echo "<br />";
						echo form_submit("createUser","Sign-Up");
						echo form_close();
		?>
</div>
