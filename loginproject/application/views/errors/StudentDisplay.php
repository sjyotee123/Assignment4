<html>
	<center><b><font size='5' color='blue'> List of All Employees</font></b>
		<table border=1>
			<tr>
			<th>Employee ID</th>
			<th>Employee Name</th>
			<th>DOB</th>
			<th>Salary</th>
			<th>Department</th>
			<th>Position</th>
			</tr>
			<?php
				foreach($result as $rec)
				{
					echo "<tr>
						<td>$rec->id</td><
						td>$rec->name</td>
						<td>$rec->dob</td>
						<td>$rec->salary</td>
						<td>$rec->department</td>
						<td>$rec->position</td>
					</tr>";
				}
			?>
		</table>
	</center>
</html>