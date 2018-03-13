<!doctype html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>
	<h3>Register Form</h3>
	<form action=" " method="POST">
		user: <input type="text" name="user"><br/>
		<br/>
		pwd: <input type="text" name="pwd"><br/>
		<br/>
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
</form>
	<input type="submit" value="Submit" name="submit"/>
</form>
<?php
if(isset($_POST["submit"])){
	if(!empty($_POST['user']) && !empty($_POST['pass'])){
		$user=$_POST['user'];
		$pwd=$_POST['pwd'];
		$rpwd=$_POST['rpwd'];
		$email=$_POST['email'];
		$pho=$_POST['pho'];
		$gender=$_POST['gender'];
		$state=$_POST['state'];

		$con=mysqli_connect('localhost','root',' ') or die(mysqli_error());
		mysqli_select_db($con,'SmartDocsFinal') or die("connect select DB");
		$query=mysqli_connect($con,"SELECT * FROM SmartDocsFinal WHERE username=' ".$user."' AND password=' ".$pass."'");
		$numrows=mysqli_fetch_array($query);
		if($numrows==0)
		{
			$sql="INSERT INTO SmartDocsFinal VALUES('','$user','$pwd','$rpwd','$email','$pho','$gender','$state','','','','')";
			$result=mysqli_query($con,$sql);
			if($result){
				echo "ACCOUNT CREATED!";
			}
			else
			{
				echo "FAILURE";
			}

		}	
			else{
				echo "USERNAME ALREADY EXISTS";

			}}else{
			echo "All fields are required";
		


		}

	}



	




?>

</body>
</html>