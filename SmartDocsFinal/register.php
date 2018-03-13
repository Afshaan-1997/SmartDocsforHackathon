<!doctype html>
<html>
<head>
<title>Register</title>
</head>
<body>

<p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>
<h3>Registration Form</h3>
<form action="" method="POST">
Username: <input type="text" name="user"><br />
Password: <input type="password" name="pass"><br />
rpwd: <input type="text" name="rpwd"><br/>
<br/>
email: <input type="text" name="email"><br/>
<br/>
pho: <input type="text" name="pho"><br/>
		<br/>
gender:		
		<input type="radio" name="gender" value="m" checked="checked"/> Male
		<input type="radio" name="gender" value="f"/>Female
		<br/>
		<br/>
		 
		<br/>
		state:<select name="state">
		<option>Andhra Pradesh</option>
		<option>Telangana</option>
		<option>New Delhi</option>
	</select>
	<br/>
	<br/>	
<input type="submit" value="Register" name="submit" />
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$rpwd=$_POST['rpwd'];
	$email=$_POST['email'];
	$pho=$_POST['pho'];
	$gender=$_POST['gender'];
	$state=$_POST['state'];

	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($con,'SmartDocsFinal') or die("cannot select DB");

	$query=mysqli_query($con,"SELECT * FROM SmartDocsFinal WHERE username='".$user."' AND password='".$pass."'");
	$numrows=mysqli_fetch_array($query);
	if($numrows==0)
	{
	$sql="INSERT INTO SmartDocsFinal(username,password,retypepassword,emailid,contact,gender,state) VALUES('$user','$pass','$rpwd','$email','$pho','$gender','$state')";

	$result=mysqli_query($con,$sql);


	if($result){
	echo "Account Successfully Created";
	} else {
	echo "Failure!";
	}

	} else {
	echo "That username already exists! Please try again with another.";
	}

} else {
	echo "All fields are required!";
}
}
?>

</body>
</html>