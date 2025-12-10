<!DOCTYPE html>
<html>
<head>

</head>

<body>
	<h1>Registration</h1>
	<form action="Lab_2_show.php" method="POST">
		<table>
			<tr>
				<td>
					<fieldset>
						<legend>General Information</legend>
						<table>
							<tr>
								<td><b><label for="fname">First Name</label></b></td>
								<td>: <input type="text" id="fname" name="fname"></td>
							</tr>
							<tr>
								<td><b><label for="lname">Last Name</label></b></td>
								<td>: <input type="text" id="lname" name="lname"></td>
							</tr>
							<tr>
								<td><b><label for="gender">Gender</label></b></td>
								<td>
									<input type="radio" id="male" name="gender" value="Male">
									<label for="male">Male</label>
									<input type="radio" id="female" name="gender" value="Female">
									<label for="female">Female</label>
								</td>
							</tr>
							<tr>
								<td><b><label for="father_name">Father's Name</label></b></td>
								<td>: <input type="text" id="father_name" name="father_name"></td>
							</tr>
							<tr>
								<td><b><label for="mother_name">Mother's Name</label></b></td>
								<td>: <input type="text" id="mother_name" name="mother_name"></td>
							</tr>
							<tr>
								<td><b><label for="blood">Blood Group</label></b></td>
								<td>: 
									<select name="blood" id="blood">
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
									</select>
								</td>

							</tr>
							<tr>
								<td><b><label for="religion">Religion</label></b></td>
								<td>: 
									<select name="religion" id="religion">
										<option value="Islam">Islam</option>
										<option value="Hindu">Hindu</option>
										<option value="Christan">Christan</option>
									</select>
								</td>
							</tr>
						</table>
					</fieldset>
				</td>
				<td>
					<fieldset>
						<legend>Contact Information</legend>
						<table>
							<tr>
								<td><b><label for="email">Email</label></b></td>
								<td>: <input type="text" id="email" name="email"></td>
							</tr>
							<tr>
								<td><b><label for="phone">Phone/Mobile</label></b></td>
								<td>: <input type="text" id="phone" name="phone"></td>
							</tr>
							<tr>
								<td><b><label for="web">Website</label></b></td>
								<td>: <input type="text" id="web" name="web"></td>
							</tr>
							<tr>
								<td><b><label for="address">Address</label></b></td>
								<td>
									<fieldset>
										<legend>Presnet Address</legend>
										<select name="country" id="country" style="width:55%">
											<option value="Bangladesh">Bangladesh</option>
											<option value="Canada">Canada</option>
											<option value="India">India</option>
											<option value="USA">USA</option>
									</select>
									<select name="city" id="city" style="width:42%">
										<option value="Dhaka">Dhaka</option>
										<option value="New York">New York</option>
										<option value="Tokyo">Tokyo</option>
									</select>
									<br>

									<textarea placeholder="Road/Stree/City" id="addess" name="address" style="width:96%"></textarea>
									<input type="text" id="post_code" name="post_code" placeholder="Post Code">

									</fieldset>
								</td>
							</tr>
						</table>
					</fieldset>
				</td>
				<td>
					<fieldset>
						<legend>Acoount Information</legend>
						<table>
							<tr>
								<td><b><label for="uname">User Name</label></b></td>
								<td>: <input type="text" id="uname" name="uname"></td>
							</tr>
							<tr>
								<td><b><label for="pass">Password</label></b></td>
								<td>: <input type="password" id="pass" name="pass"></td>
							</tr>
							<tr>
								<td><b><label for="pass">Confirm Password</label></b></td>
								<td>: <input type="password" id="cpass" name="cpass"></td>
							</tr>
							
						</table>
					</fieldset>
				</td>
			</tr>
		</table>
		<input type="submit" value="Register">
	</form>


</body>
</html>

