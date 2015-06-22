<div class="regist">
	<h2>Sign Up</h2>
	<!--form-->
		<?php
						echo form_open("login/validate");
						echo "Username : ";echo form_input("username","",);
						echo "<br />";
						echo "Password : "; echo form_password("password","",);
						echo "<br />";
						echo "Password : "; echo form_input("name","",);
						echo "<br />";
						echo "Password : "; echo form_input("address","",);
						echo "<br />";
						echo "Password : "; echo form_input("city","",);
						echo "<br />";
						echo "Password : "; echo form_input("phonenumber","",);
						echo "<br />";
						echo "Password : "; echo form_input("email","",);
						echo "<br />";
						echo form_submit("createUser","Registration");
						echo form_close();
					?>
			<!--label>Username</label>
			<input type="text" name="username" />
			<label>Password</label>
			<input type="password" name="password" />
			<label>Nama</label>
			<input type="text" name="name" />
			<label>Alamat</label>
			<input type="text" name="address" />
			<label>Kota</label>
			<input type="text" name="city" />
			<label>Telepon</label>
			<input type="text" name="phonenumber" />
			<label>Email</label>
			<input type="text" name="email" />

			<button type="submit">Sign Up</button>
		
	</form-->	
</div>
