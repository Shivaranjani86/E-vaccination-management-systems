<!DOCTYPE html>
<html>
<head>
	<title>Report</title>
</head>
<style>

	body{
		background-repeat: no-repeat;
		background-size: cover;
		background: url('pics/bg51.jpeg');
	}

	.bg{
		
		width: 1370px;
		height: 500px;
		margin: 20px 40px;
		padding: 10px;
	}

	.tabel_style{
		font-size: 30px;
		padding: 30px;
		text-align: center;
		color: white;
		width: 1360px;
		font-family: Times New Roman;
	}
	.a{
		text-decoration: none;
		color: white;
		background-color: #1A5276;
		padding: 10px;
		border-radius: 10px;
	}
	td{
		padding: 25px;
	}
	p{
		text-align: center;
		color: white;
		font-size: 35px;
		font-family: Times New Roman;	
	}
</style>
<body>

<div class="bg">
<a href="adminindex.php"><img src="pics/white.png" width="30" height="30"></a>

<?php
	include 'database_connection.php';

	$query="SELECT * FROM parent";

	$result=mysqli_query($con,$query);

	if(mysqli_num_rows($result) > 0)
	{
		echo "<p>ALL PARENT LIST</p>";
		echo "<table class='tabel_style'>";

		while ($row = mysqli_fetch_array($result))
		{
			echo "	<tr>
						<td><a href='parentreport.php?name=".$row['p_username']."' class='a'>".$row['p_username']."</a></td>
					</tr>
				  ";
		}
		echo "</table>";
	}
	else
		echo "<p>No Any Parent !</p>";
?>

</table>
	
</div>
</body>
</html>
<!-- <label type=\"text\" for=\"name[]\" value=".$row['p_username']."/>".$row['p_username']." -->