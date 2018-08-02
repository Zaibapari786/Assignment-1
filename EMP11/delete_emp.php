<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<body >
	<?php include 'nav.php'; ?>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(!$conn )
{
  die('Could not connect: ' . mysql_error());
}
$emp_id = $_GET["emp_id"];
$emp_id = stripslashes($emp_id);
$emp_id = mysql_real_escape_string($emp_id);
$sql = "DELETE FROM admin_db.emp WHERE emp. emp_id =  $emp_id";
//echo $sql;
$res= mysql_query($sql )
?>
        <div>
       <font style= color:darkorange;><h1 class="text-center">Employee Record Deleted....</h1></font><br>
        </div> 
	</body>
</html>

	
     