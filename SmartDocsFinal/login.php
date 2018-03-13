<!doctype html>
<html>
<head>
<title>Login</title>
</head>
<body>

<p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>
<h3>Login Form</h3>
<form action="" method="POST">
Username: <input type="text" name="user"><br />
Password: <input type="password" name="pass"><br />	
<input type="submit" value="Login" name="submit" />
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($con,'SmartDocsFinal') or die("cannot select DB");

	$query=mysqli_query($con,"SELECT * FROM SmartDocsFinal WHERE username='".$user."' AND password='".$pass."'");
	$numrows=mysqli_fetch_array($query);
	$dbusername=$dbpassword=0;
	if($numrows!=0)
	{
	while($row=mysqli_fetch_assoc($query))
	{
	$dbusername=$row['username'];
	$dbpassword=$row['password'];
	}

	if($user == $dbusername && $pass == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$user;

	/* Redirect browser */
	header("Location: display.html");
	}
	} else {
	echo "Invalid username or password!";
	}

} else {
	echo "All fields are required!";
}
}
?>

</body>
</html>