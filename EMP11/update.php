<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<body>
	<center>
	<?php include 'nav.php'; ?>
	<div class="text-center">
        <font size ="4" color="#C0C0C0">
	    <h1 style= color:purple;>Update Employee</h1> 
		  </div> 
<?php
$con=mysqli_connect("localhost","root","","admin_db");
if (mysqli_connect_errno())
  { echo "Failed to connect to MySQL: " . mysqli_connect_error();    }
$result = mysqli_query($con,"SELECT * FROM emp");
echo "<table border='1'>
<tr>
<th>emp_id</th>
<th>emp_name</th>
<th></th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['emp_id'] . "</td>";
  echo "<td>" . $row['emp_name'] . "</td>";
  echo "<td><button><a href='update_edit.php?emp_id=". $row['emp_id'] ."'>". 'Update' . "</a></button></td>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>
	     </td>    
	   </tr> 
    </table>		   
	</body>
</html>
