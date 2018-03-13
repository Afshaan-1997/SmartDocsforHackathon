
<!doctype html>
<html>
<head>
	<title>Govt Login</title>
</head>
<body>

	<h3>Govt Login Form</h3>
	<form action="login.php " method="POST">
		<br/>
		Aadhar No: <input type="text" name="Number"><br/><br/>
		Status:
		<br/>
		<select name="Status"><br/>
		<option>Approved</option>
		<option>In Progress</option>
		<option>Rejected</option>
	</select>
	<br/>
	<br/>
	<input type="submit" value="Submit" name="submit"/>

	</form>
</body>
</html>