<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body background="img/ana.jpg">
 <h1 font style= color:#000080;><center>EMPLOYEE MANAGEMENT</center></h1>
 <table width="400" border="4" align="center" cellpadding="0" cellspacing="1" color="#fff">
 <tr>
 <td>
 <h2 font style= color:gray;><center>LOGIN</center></h2>
 <form name="form1" method="post" action="main_login.php">
<div class="container-fluid">
   <div class="row">
   <div class="col-md-4 col-sm-4 col-xs-12"></div>
	<div class="col-md-4 col-sm-4 col-xs-12">
<form class="conatiner">
  <div class="form-group">
    <label>Username</label>
    <input name="username" type="text" id="username" placeholder="username">
  </div>
<div class="form-group">
    <label>Password</label>
    <input name="password" type="Password" id="password" placeholder="password">
  </div>
   <br>
   <div align="left">
   <input type="submit" name="Submit" value="Login"><br>

</div>
  <br>
  <br>
</div>
     </div>
   </div> 
   </td>
   </tr>
   </table>
   <br>
   <br>
            <div align="center">
			<button type="submit" class="btn btn-default"><a href="forgot_pass.php">Forgot Password</a></button>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="submit" class="btn btn-default"><a href="reset.php">Reset Password</a></button>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="submit" class="btn btn-default"><a href="signup.php">Signup</button>
		</div>
		</form>
</form>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
    <script src="js/bootstrap.min.js"></script>
	
</body>
</html>
