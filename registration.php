<html>
<head>
	<title>Registration Form</title>

<style>
    body{
        background-repeat:no-repeat;
        background-size: cover;
        background:url(pics/userbg2.jpg);
    }
    div{
        padding:20;
        font-size:20;
    }
    h2{
        font-size:30;
        color:#0B1F38;
        text-align:center;
    }
    .container {
        left:50;
        right:650;
        position:absolute;
        margin:10px 2px;
        padding:16px;
        border-radius:25px;
        border-color:#0B1F38;
        border-style:solid;
        background-color:#0EEBFD;
        font-family:Century Gothic;	
    }
    .error{
        color: red;
    }
    input[type='text'], input[type='email'], input[type='password']{
        background-color:white;
        border:none;
        padding:9px 10px;
        margin-left: 20px;
    }
    select, input[type='date']{
        margin-left: 20px; 
        width: 200px; 
        height: 30px; 
    }
    label{
        margin-left: 20px;
    }
    input[type='submit']{
        width:300px;
        height:40px;
        border-radius:10px;
        margin: 10px;
        font-size: 18px;
        background-color:#0B1F38;
        color: white;
    }
</style>
</head>

<body>

<form method="POST" class="container" action="adduser.php">

<div>
<h2>Medivac</h2>	

<label><b>Username</b><span class="error">*</span></label></br>
<input type="text" name="uname" placeholder="First Name" size="62" required /></br></br>

<label><b>Last Name</b><span class="error">*</span></label></br>
<input type="text" name="lname" placeholder="Enter Last Name" size="62" required/></br></br>

<label><b>Gender</b><span class="error">*</span></label></br>
<input type="radio" name="gender" value="Male" style="margin-left: 20px" />Male
<input type="radio" name="gender" value="Female" />Female

</br></br>
<label><b>City</b><span class="error">*</span></label></br>
<select name="city" required>
    <option value="none" selected disabled hidden> Select an city</option>
    <option value="Dharmapuri">Dharmapuri</option>
    <option value="krishnagiri">krishnagiri</option>
    <option value="Vellore">Vellore</option>
    <option value="Salem">Salem</option>
    <option value="Chennai">Chennai</option>
    <option value="Trichy">Trichy</option>
    </select> 

</br></br>
<label><b>Birth Date </b><span class="error">*</span></label></br>
    <input type="date" name="birth" required/>

<br><br>
<label><b>You are a</b><span class="error">*</span></label></br>
<select name="utype" class="option" required>
    <option value="none" selected disabled hidden> Select an Option</option>
    <option value="Admin">Admin</option>
    <option value="Parent">Parent</option>
</select> 

<br><br>
<label><b>Email Address</b><span class="error">*</span></label></br>
<input type="email" name="email" placeholder="Enter email address" size="62" required/></br></br>

<label><b>Password</b><span class="error">*</span></label></br>
<input type="password" name="password" placeholder="Enter Password" size="62" required /></br></br>

<center>

<input type="Submit" name="register" value="Register" /><br>
<br>

Already have an Account? <a href="indes.php"><b>Login</b></a>
</div>
</center>

</body>
</form>
</html>