<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
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
	     
<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="admin_db"; 
$tbl_name="emp"; 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$name=$_POST["user"];
$age=$_POST["Age"];
$location =$_POST["location"];
$salary=$_POST["salary"];
// To protect MySQL injection (more detail about MySQL injection)
$name = stripslashes($name);
$age = stripslashes($age);
$location = stripslashes($location);
$salary = stripslashes($salary);
$name = mysql_real_escape_string($name);
$age = mysql_real_escape_string($age);
$location = mysql_real_escape_string($location);
$salary = mysql_real_escape_string($salary);
$sql="INSERT INTO emp(emp_name,Age,location,salary) VALUES ('$name', '$age' ,'$location','$salary')";
$result=mysql_query($sql);
?>      
        <div class="text-center">
        <font size ="6" color="white">
		<?php echo "<h1>Saved Successfully....</h1>";?></font><br>
        </div>
 
		    </center>	
	</body>
</html>
