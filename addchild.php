<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Child</title>
</head>
<style>
	body{
		background-repeat:no-repeat;
		background: url(pics/bg51.jpeg);
	}
	.text{
		background-color:#fff;
		border:none;
		padding:9px 10px;
	}	
	.container {
	    position:absolute;
	    margin: 22px 50px 50px 40px;
	    padding: 25px;
	    background-color:#0b1f38;
	    font-family:Century Gothic;	
	}
	select{
		width: 200px; 
		height: 30px;
	}
	input[type='submit']{
		width:100px;
		height:35px;
		border-radius:50px 50px 50px 50px;
		color: #0b1f38;
	}
	h1{
		color:#0eebfd;
		
	}
	label{
		color:#0eebfd
	}
	input[type='radio']{
		color: #0eebfd;
	}
	
</style>

<body>
<form method="POST" class="container" action="<?php $_SERVER['PHP_SELF'] ?>">

<div style="padding:20;font-size:21;color:#0eebfd;">

<a href="index.php"><img src="pics/backarrow.png" width="30" height="30"></a>

<center><h1 >Add Child Details</h1></center>

<label><b>Child Full Name</b></label></br>
<input type="text" name="c_name" class="text" placeholder="Enter First Name" size="70" /></br></br>

<label><b>Child Gender</b></label></br>
<input type="radio" name="c_gender" value="Male" />Male
              	       <input type="radio" name="c_gender" value="Female" />Female
</br></br>
<label ><b>Child City</b></label></br>
<select name="c_city">
	<option value="none" selected disabled hidden> Select an city</option>
	<option value="Dharmapuri">Dharmapuri</option>
	<option value="krishnagiri">krishnagiri</option>
	<option value="Vellore">Vellore</option>
	<option value="Salem">Salem</option>
	<option value="Chennai">Chennai</option>
	<option value="Trichy">Trichy</option>
</select> 

</br></br>
<label ><b>Child Birth Date </b></label></br>
	<input type="date" name="c_birth" />
</br></br>

<label><b>Child Age </b></label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<label><b>Child Weight </b></label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<label><b>Child Height </b></label><br>
	
<input type="number" name="c_age" class="text" placeholder="Age" />
<input type="number" name="c_weight" class="text" placeholder="Weight" />
<input type="number" name="c_height" class="text" placeholder ="Height" />
</br></br>

<label ><b>Add Vaccine</b></label></br>	


<br>

<?php
	include 'database_connection.php';

	$query="SELECT * FROM vaccine";

	$result=mysqli_query($con,$query);

	while ($row = mysqli_fetch_array($result))
	{
		echo "<table>
				<tr>
					<td><input type='checkbox' name='chk[]' value='".$row['name']."' />".$row['name']."</td>
				</tr>
			  </table>";
	}
?>
<br>
<center><input type="Submit" name="addchild" value="Add child"/></center>

</div>

<?php

	if(isset($_POST['addchild']))
	{
		$con=mysqli_connect("localhost","root","","medivac");
		
       
		$name = $_POST['c_name'];
		$gen = $_POST['c_gender'];
		$city = $_POST['c_city'];
		$birth = $_POST['c_birth'];
		$age = $_POST['c_age'];
		$weight = $_POST['c_weight'];
		$height = $_POST['c_height'];
		$c_vaccine =implode(',', $_POST['chk']);
		$p_username = $_SESSION['username'];
		$chk="";  
        foreach($chkval as $chk1)  
         {  
            $chk.= $chk1.",";  
         }  
		$query="INSERT INTO child VALUES('$name','$gen','$city','$birth',$age,$weight,$height,'$c_vaccine','$p_username')";
		$result=mysqli_query($con,$query);

		if(!$result)
		{
			die("<br>Can't Insert Data : " .mysqli_error());
		}
        
		$v_name =$_POST['chk'];
		$v_date = date('Y-m-d');
		for($i=0; $i<count($v_name); $i++)
		{
				$query_vaccine = "SELECT * FROM vaccine ";
				$result_vaccine = mysqli_query($con,$query_vaccine);

				while($row_vaccine = mysqli_fetch_array($result_vaccine))
				{
					if($v_name[$i] == $row_vaccine['name'])
					{
						$time = strtotime($v_date);
						$final = date("Y-m-d", strtotime($row_vaccine['timing'], $time));
						$query_date = "INSERT INTO vaccine_dates VALUES('$v_name[$i]','$v_date','$final','$p_username','$name','false')";

						$result = mysqli_query($con,$query_date);
						if(! $result)
						{
							die('Could not insert Records: ' . mysql_error());
						}
					}
				}
			
		}
				
		echo "<script>alert('Added Your Child Details..!!');window.location='Dashboard.php'</script>";
	}
?>


</body>
</html>