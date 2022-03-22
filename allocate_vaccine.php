<!DOCTYPE html>
<html>
<head>
	<title>Allocate Vaccine</title>
</head>
<style>
	body{
		font-family: "Lato", sans-serif;
	  	background-size: cover;
	  	position: fixed;
	  	background: url(pics/bg57.jpeg);
	}
	.bg{
		
		width: 1300px;
		height: 600px;
		margin: 1px 10px;
		padding: 5px;
		overflow: auto;
	}
	.tabel_style{
		background-color:#0B1F38;
		border-radius: 5px;
		border-style: solid;
		font-size: 20px;
		padding: 20px;
		text-align: center;
		width: 1200px;
	}
	p{
		text-align: center;
		color:white;
		font-size: 30px;
	}
	.td{
		background-color:aqua;
		color: white;
		border-radius: 5px;
	}
	.td_allocate{
		background-color:#0EEBFD;
		color: white;
		padding: 15px;
		border-radius: 5px;
	}
	th,tr{
		color:white;
	}
</style>
<body>

<div class="bg">
<a href="adminindex.php"><img src="pics/white.png" width="30" height="30"></a></br>	
	<?php

		include 'database_connection.php';

		$query = "SELECT * FROM vaccine_dates";
		$result = mysqli_query($con,$query);

		if(mysqli_num_rows($result) > 0)
		{
			echo "<table cellspacing='6' cellpadding='6' class='tabel_style' >

				  <tr>
				  		<th>Child Name</th>
				  		<th>Vaccine Name</th>
				  		<th>Start Vaccine Date</th>
				  		<th>Vaccine Remainder</th>
				  		<th></th>
				  </tr>";

			while ($row = mysqli_fetch_array($result)) {
				
				if($row['status'] == 'false'){
					echo "<tr>
							<td>".$row['c_name']."</td>
							<td>".$row['v_name']."</td>
							<td>".$row['v_date']."</td>
							<td class='td'>".$row['timing']."</td>
							<td><a href='updatevaccine.php?c_name=".$row['c_name']."&vaccine_n=".$row['v_name']."'><img src='pics/done.png' width='45' height='45' /></a></td>
							</tr>";
				}
				else{
					echo "<tr>
							<td class='td_allocate'>".$row['c_name']."</td>
							<td class='td_allocate'>".$row['v_name']."</td>
							<td class='td_allocate'>".$row['v_date']."</td>
							<td class='td_allocate'>".$row['timing']."</td>
							<td class='td_allocate'>Allocated</td>
							</tr>";
				}
			}

			echo "</table>";
		}
		else
			echo "<p>No Any Dates Available !</p>";
	?>
</div>

</body>
</html>