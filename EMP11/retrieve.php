<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<body >
	<?php include 'nav.php'; ?>
	
	     <?php
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="admin_db"; 
$tbl_name="login"; 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$star=$_POST['star']; 
$star = stripslashes($star);
$star = mysql_real_escape_string($star);
$sql="SELECT * FROM $tbl_name WHERE star=$star";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
$sqli="SELECT password FROM $tbl_name  WHERE star =$star";
 	$result2=mysql_query($sqli);
 	while($row = mysql_fetch_array($result2))
 	
 	echo  $row['password'] ;
}
else {
echo "Not Able to retrieve your password";
}
?>
	</body>
           </html>