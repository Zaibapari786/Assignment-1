<html>
<head>
     <title>Employee details</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/add.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	  </head>
	  <body background="img/ana.jpg">
	 <div class="container">
<h1 class="text-danger text-center">Reset Password</h1><br>  
 <div class="col-md-offset-3 col-md-6">
<form action="relogin.php" method="post" onsubmit="return validation()" class="bg-light">
<table width="400" border="4" align="center" cellpadding="0" cellspacing="1" color="#fff">
 <tr>
 <td>
<div class="form-group">
<label>Username:</label>
<input type="text" name="username" class="form-control" id="user" autocomplete="off">
<span id="username" class="text-danger font-weight-bold"></span>	
</div>	
	<div class="form-group">
<label>Password:</label>
<input type="password" name="password" class="form-control" id="pass" autocomplete="off">
<span id="passwords" class="text-danger font-weight-bold"></span>	
</div>
<div class="form-group">
<label>New Password:</label>
<input type="password" name="newpassword" class="form-control" id="password1" autocomplete="off">
<span id="newpass" class="text-danger font-weight-bold"></span>	
</div>
<div class="form-group">
<label>Confirm Password:</label>
<input type="password" name="reenter" class="form-control" id="reenter" autocomplete="off">
<span id="conpass" class="text-danger font-weight-bold"></span>	
</div>		
<input type="Submit" name="submit" value="Reset" class="btn btn-success">
  </td>    
	   </tr>
    </table>
</form>
</div>
</div>
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
	if(pass ==""){
		document.getElementById('pass').innerHTML ="** enter old password";
		return false;
	}
	if(newpassword ==""){
		document.getElementById('newpass').innerHTML ="** enter new password ";
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
