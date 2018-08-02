<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
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
	  <body>
	  <center>
	   <?php include 'nav.php'; ?>
	 <div class="container">
<h1 font style= color:blue;> Enter Employee Details</h1><br>  
 <div class="col-md-offset-3 col-md-6">
<form action="emp.php" method="post" onsubmit="return validation()" class="bg-light">
<table width="400" border="4" align="center" cellpadding="0" cellspacing="1" color="#fff">
 <tr>
 <td>
<div class="form-group">
<label>Username:</label>
<input type="text" name="user" class="form-control" id="user">
<span id="username" class="text-danger font-weight-bold"></span>	
</div>	
	<div class="form-group">
<label>Age:</label>
<input type="number" name="Age" class="form-control" id="Age">
<span id="age" class="text-danger font-weight-bold"></span>	
</div>
<div class="form-group">
<label>Location:</label>
<input type="text" name="location" class="form-control" id="location">
<span id="loc" class="text-danger font-weight-bold"></span>	
</div>
<div class="form-group">
<label>Salary:</label>
<input type="number" name="salary" class="form-control" id="salary">
<span id="sal" class="text-danger font-weight-bold"></span>	
</div>		
<input type="Submit" name="submit" value="Submit" class="btn btn-success">
</td>    
	   </tr>
    </table>
</form>
</div>
</div>
<script type="text/javascript">
function validation(){
	var user = document.getElementById('user').value;
	var age = document.getElementById('Age').value;
	var location = document.getElementById('location').value;
	var salary = document.getElementById('salary').value;


	if(user ==""){
		document.getElementById('username').innerHTML ="** Please fill the username field";
		return false;
	}
	if ((user.length <=2) ||(user.length >20)) {
		document.getElementById('username').innerHTML ="** user length must be between 2 and 20";
		return false;
	}
	if(age ==""){
		document.getElementById('age').innerHTML ="** Please fill the Age field";
		return false;
	}
	
	if(location ==""){
		document.getElementById('loc').innerHTML ="** Please fill  the Location field";
		return false;
	}
	if(salary ==""){
		document.getElementById('sal').innerHTML ="** Please fill  the Salary field";
		return false;
	}
}
</script>
</center>
</html>
