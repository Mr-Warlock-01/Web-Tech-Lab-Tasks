<?php 
	echo "<h3>General Information</h3>";
	echo "<ul>";
	echo "<li>".$_POST['fname']."</li>";
	echo "<li>".$_POST['lname']."</li>";
	echo "<li>".$_POST['gender']."</li>";
	echo "<li>".$_POST['father_name']."</li>";
	echo "<li>".$_POST['mother_name']."</li>";
	echo "<li>".$_POST['blood']."</li>";
	echo "<li>".$_POST['religion']."</li>";
	echo "</ul>";


	echo "<h3>Contact Information</h3>";
	echo "<ul>";
	echo "<li>".$_POST['email']."</li>";
	echo "<li>".$_POST['phone']."</li>";
	echo "<li>".$_POST['web']."</li>";
	echo "<li>".$_POST['country']."</li>";
	echo "<li>".$_POST['city']."</li>";
	echo "<li>".$_POST['address']."</li>";
	echo "<li>".$_POST['post_code']."</li>";
	echo "</ul>";

	echo "<h3>Account Information</h3>";
	echo "<ul>";
	echo "<li>".$_POST['uname']."</li>";
	echo "<li>".$_POST['pass']."</li>";
	echo "<li>".$_POST['cpass']."</li>";
	echo "</ul>";
 ?>