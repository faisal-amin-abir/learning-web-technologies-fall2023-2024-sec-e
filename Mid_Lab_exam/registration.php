<center>
<form action="registration.php" method="POST">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend>
						<h3>REGISTRATION</h3>
					</legend>
					Id<br/><input type="text" name="id" required><br/>
					Password<br/><input type="password" name="password" required><br/>
					Confirm Password<br/><input type="password" name="cpassword" required><br/>
					Name<br/><input type="text" name="name" required><br/>
					User Type<hr/>
					<input type="radio" name = "radio"/>User
					<input type="radio" name = "radio"/>Admin
					<hr/>
					<input type="submit" value="Sign Up">
					<a href="login.html">Sign In</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>

<?php 
	$data = "";
	
	$name = $_REQUEST["name"];

	$flag=true;

	





	

?>