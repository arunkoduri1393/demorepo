<?php 

	$conn=new mysqli("localhost","root","","pracdb");
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	$result=$conn->query($sql="select * from emp");
	echo "<table>
					<tr>
						<td>id</td>
						<td>first name</td>
						<td>last name</td>
						<td>Address</td>
						<td>mobile Number</td>
					</tr>";
	if ($result->num_rows>0)
	{
		
		while($row = $result-> fetch_assoc())
		{
			echo "
					<tr>
						<td>".$row['emp_id']."</td>
						<td>".$row['first_name']."</td>
						<td>".$row['last_name']."</td>
						<td>".$row['address']."</td>
						<td>".$row['mobile_no']."</td>
					</tr>
				  ";
		}
	}
	else
	{
		echo "no record found";
	}
	echo "</table>";
	
?>