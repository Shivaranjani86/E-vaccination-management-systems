<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
  body {
    font-family: "Lato", sans-serif;
    background-size: cover;
    position: fixed;
    background:url(pics/bg51.jpeg);
  }
  .topnav {
    overflow: hidden;
    background-color:#0EEBFD;
    padding:1px 1px ;
  }

  .topnav a,label {
    	float: right;
    	color: #0b1f38;
    	text-align:left;
    	padding: 2px 8px;
    	text-decoration: none;
    	font-size: 20px;

  }
  .topnav a:hover {
    background-color: #fff;
    color:#0EEBFD;
  }

  .topnav a.active {
    background-color: #A9CCE3;
    color: white;
  }
  .bg{
  	
  	width: 1156px;
  	height: 600px;
  	margin: 10px 10px;
  	padding: 30px;
  }
  .btn{
      color:white;
      background:#0b1f38;
      padding:35px;
      text-align:center;
      vertical-align: middle;
      font-size:23px;
      border-radius:20px;
      width:18%;
      height:140px;
      margin:10px;
      display:inline-block;
      box-shadow: 6px 6px #0EEBFD;
      border:3px solid #0EEBFD;
      
  }
</style>
<body>

<div class="topnav">
  <label ><?php echo $_SESSION['username']; ?></label>
  <a href="logout.php">Logout</a>
</div>

<div class="bg">
<center>
<a href= "viewchild.php"><div class="btn"><img src="pics/viewchild.png" /><br>View Child Details</div></a>
<a href= "addvaccine.php"><div class="btn"><img src="pics/addvaccine.png" /><br>Add vaccine</div></a><br>
<a href= "allocate_vaccine.php"><div class="btn"><img src="pics/report.png" /><br>Allocat Vaccine</div></a>
<a href= "report.php"><div class="btn"><img src="pics/report.png" /><br>View Report</div></a>
</center>
</div>

</body>
</html>