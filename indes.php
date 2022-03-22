<?php
    session_start();
?>
<html>
<head>
	<title>Login Form</title>

<style>
    body{
        background-repeat:no-repeat;
        background-position:left left;
        background-image:url(pics/userbg.jpg);
        
        
    }
    div{
        padding:10;
        font-size:20;
    }
    h2{
        font-size:30;
        color: #0B1F38;
        text-align:center;
    }
    .container {
        
        left: 15px;
        right:650;
        position:absolute;
        margin:30px 20px;
        padding:20px;
        border-radius:25px;
        border-color:#0B1F38;
        border-style:solid;
        background-color:#0EEBFD;
        font-family:Century Gothic;	
       
      
    }
    .error{
        color: red;
    }
    .text
    {
        background-color:white;
        border:none;
        padding:7px 5px;
        margin-left:20px
    }
    select{
        margin-left: 20px; 
        width: 200px;
        height: 30px; 
        margin-bottom: 30px;
    }
    label{
        margin-left: 20px;
        color:#0B1F38;
    }
    input[type='submit']{
        width:300px;
        height:40px;
        border-radius:10px S; 
        margin: 10px; 
        font-size: 18px; 
        background-color: #0B1F38; 
        color: white;
        border-color: #0EEBFD;
    }
    a{
        color:#0B1F38;
    }

</style>
</head>

<body>

<form method="post" action="chkuser.php" class="container">

<div>

<h2 >Medivac</h2>	

<center><img src="pics/logo.png" width="100" height="100" alt="Logo" align="center" ></img><br></center>

<label><b>Username</b><span class="error">*</span></label></br>
<input type="text" name="uname" class="text" placeholder="Username" size="62" required /></br></br>

<label><b>Password</b><span class="error">*</span></label></br>
<input type="password" name="pass" class="text" placeholder="Enter Password" size="62" required /></br></br>

<label><b>You are a</b><span class="error">*</span></label></br>
<select name="utype" required>
    <option value="none" selected disabled hidden> Select an Option</option>
    <option value="Admin">Admin</option>
    <option value="Parent">Parent</option>
</select> 

<br>
<center>

<input type="Submit" name="login" value="Login" /><br>
<br>
<label><b>Don't have an account yet?</b></label><a href="registration.php">Register</a>
<br>
<?php
            if(isset($_SESSION['msg']))
            {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                session_destroy();
            } 
?>

</center>
</div>
</body>
</form>
</html>