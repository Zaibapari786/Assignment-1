<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<body>
	     <?php include 'nav.php'; ?>
		<div class="container">
	<center>	
<h2 style= color:blue;> Update Employee Details</h2><br>  
 <div class="col-md-offset-3 col-md-6">
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,"admin_db");
if(!$conn )
{
  die('Could not connect: ' . mysql_error());
}
$emp_id = $_GET["emp_id"];
$emp_id = stripslashes($emp_id);
$emp_id = mysql_real_escape_string($emp_id);
$result = mysqli_query($conn,"SELECT * FROM emp where emp_id=$emp_id");
$row = mysqli_fetch_array($result)
?>
	     
	    

<form method="post" action="update_emp.php" onsubmit="return validation()">
<table width="400" border="4" align="center" cellpadding="0" cellspacing="1" color="#fff">
 <tr>
 <td>
  <div class="form-group">
<label>Username:</label>
<input type="text" name="user" class="form-control" id="user" value="<?php echo $row['emp_name'];?>">
 <span id="username" class="text-danger font-weight-bold"></span>	
</div>
  <div class="form-group">
<label>Age:</label>
<input type="text" name="age" class="form-control" id="Age" value="<?php echo $row['Age'];?>">
 <span id="age" class="text-danger font-weight-bold"></span>	
</div>

<div class="form-group">
<label>Location:</label>
<input type="text" name="location" class="form-control" id="location" value="<?php echo $row['location'];?>">
 <span id="loc" class="text-danger font-weight-bold"></span>	
</div>
 
 <div class="form-group">
<label>Salary:</label>
<input type="text" name="salary" class="form-control" id="salary" value="<?php echo $row['salary'];?>">
 <span id="sal" class="text-danger font-weight-bold"></span>	
</div>

<input name="emp_id" type="hidden" id="emp_id" value="<?php echo $emp_id;?>">
  <input type="submit" name="Submit" value="Save" class="btn btn-success"></td>

     </td>    
	   </tr>
    </table>
	</form>
	</center>
    </body>
</html>
