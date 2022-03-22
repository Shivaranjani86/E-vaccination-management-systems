<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head><title>View Child Details</title></head>

<style>
	body {
	  font-family: "Lato", sans-serif;
	  background-size: cover;
	  position: fixed;
	  background: url(pics/bg51.jpeg);
	}
	div{
		
		width: 1200px;
		height: 500px;
		margin: 10px 20px;
		padding: 20px;
		overflow: auto;
	}
	.tabel_style{
		background-color: white;
		border-radius: 5px;
		border-style: solid;
		font-size: 20px;
		padding: 0px;
		text-align: center;
		width: 1200px;
	}
	p{
		color: white;
		text-align: center;
		vertical-align: middle;
		font-size: 30px;
	}
</style>

<body>

<div>
<a href="index.php"><img src="pics/white.png" width="30" height="30"></a></br>	

<?php
	include 'database_connection.php';

	$name = $_SESSION['username'];
	$query="SELECT * FROM child WHERE p_username = '$name'";

	$result = mysqli_query($con,$query);

	
	if(mysqli_num_rows($result) > 0){

		echo "<table class='tabel_style' cellspacing='5' cellpadding='5' >
				<tr>
				<th>Name</th>
				<th>Gender</th>
				<th>Birth Date</th>
				<th>City</th>
				<th>Age</th>
				<th>Weight</th>
				<th>Height</th>
				<th>Vaccine</th>
				<th></th>
			</tr>";

		while ($row = mysqli_fetch_array($result)) {
			echo "<tr>
					<td>".$row['c_name']."</td>
					<td>".$row['c_gender']."</td>
					<td>".$row['c_birth']."</td>
					<td>".$row['c_city']."</td>
					<td>".$row['c_age']."</td>
					<td>".$row['c_weight']."</td>
					<td>".$row['c_height']."</td>
					<td>".$row['c_vaccine']."</td>
					<td><a href='editchild.php?c_name=".$row['c_name']."'>
						<img src='pics/edit.png' width='40' height='40'/></a>
					</td>
				  </tr>";
		}

		echo "</table>";
	}
	else	
	{
		echo "<p> No Data Found!</p>";
	}
?>

</table>
</div>
</body>
</html>