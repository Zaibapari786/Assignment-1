<?php
  //session_start();
  
  //connecton to database
  $db = mysqli_connect("localhost","root","","admin_db");
  
  if (isset($_POST['signup'])){
	  session_start();
	  $username = mysql_real_escape_string($_POST['username']);
	  $email = mysql_real_escape_string($_POST['email']);
	  $password = mysql_real_escape_string($_POST['password']);
	  $password2 = mysql_real_escape_string($_POST['password2']);
	  
	  if($password == $password2) {
		  //create user_error
	  $password = md5($password);
	  $sql = "INSERT INTO signup(username,email,password) VALUES('$username','$email','$password')";
	  mysqli_query($db, $sql);
       $_SESSION['message'] = "you are now logged in";
	   $_SESSION['username'] = $username;
	   header("location: homepage.php");
	  }else{
		  $_SESSION['message'] = "The two passwords do not match";
	  }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/add.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body background="img/ana.jpg">
<h1><center>Signup</center></h1>
<form method="post" action="signup.php" onsubmit="return validation()">
<center>
	<table width="400" border="3" align="center" cellpadding="0" cellspacing="1" color="#fff">
		<tr>
			<td>
			<div class="form-group">
              <label>Username:</label>
			<input type="text" name="username" class="form-control" id="user" autocomplete="off">
<span id="username" class="text-danger font-weight-bold"></span>	
</div>
		<div class="form-group">
              <label>Email:</label>
             <input type="email" name="email" id="email" class="form-control" autocomplete="off" >
			 <span id="emails" class="text-danger font-weight-bold"></span>	
		</div>
		<div class="form-group">
              <label>Password:</label>
			<input type="password" name="password"id="pass" class="form-control" autocomplete="off">
			<span id="passwords" class="text-danger font-weight-bold"></span>	
		</div>
		<div class="form-group">
              <label>confirm:</label>
		<input type="password" name="password2" id="confirm" class="form-control" autocomplete="off">
		<span id="conpass" class="text-danger font-weight-bold"></span>	
	</div>
			</td>
</tr>
		</table>
		<center>
		<input type="Submit" name="signup" value="Submit" class="btn btn-success" >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="submit" class="btn btn-default"><a href="update.php">Update</a></button>
		</center>	
</form>
<script type="text/javascript">
function validation(){
	var user = document.getElementById('user').value;
	var password = document.getElementById('passwords').value;
	var newpassword = document.getElementById('password1').value;
	var conpass = document.getElementById('reenter').value;


	if(user ==""){
		document.getElementById('username').innerHTML ="** Please fill the username field";
		return false;
	}
	if ((user.length <=2) ||(user.length >20)) {
		document.getElementById('username').innerHTML ="** user length must be between 2 and 20";
		return false;
	}
	if(email ==""){
		document.getElementById('email').innerHTML ="** enter old password";
		return false;
	}
	if(pass ==""){
		document.getElementById('passwords').innerHTML ="** enter new password ";
		return false;
	}
	if(conpass ==""){
		document.getElementById('conpass').innerHTML ="** confirm password";
		return false;
	}
}
</script>
</body>
</html>