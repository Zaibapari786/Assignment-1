<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<body>
	<center>
	
	  <tr height="300" align="center">
	     <td width = "100" align="left" nowrap valign="top">
	     <?php include 'nav.php'; ?>
	     <td align="center">
		  <div class="text-center">
        <font size ="4" color="#C0C0C0">
 <h1 font style= color:blue;>Delete Employee</h1>
          </div> 
		 <?php
$con=mysqli_connect("localhost","root","","admin_db");
if (mysqli_connect_errno())
  { echo "Failed to connect to MySQL: " . mysqli_connect_error();    }
$result = mysqli_query($con,"SELECT * FROM emp");
echo "<table border='1'>
<tr>
<th>EMP_ID</th>
<th>EMP_NAME</th>
<th></th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['emp_id'] . "</td>";
  echo "<td>" . $row['emp_name'] . "</td>";
  echo "<td><button><a href='delete_emp.php?emp_id=". $row['emp_id'] ."'>". 'Delete' . "</a></button></td>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>
	     </td>    
	   </tr> 
    </table>
</center>	
	</body>
</html>
