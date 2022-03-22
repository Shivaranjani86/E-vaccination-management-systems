<?php
	$con=mysqli_connect("localhost","root","","medivac");

	if(!$con){
		die('Mysql Connection Error'. mysqli_connect_error());
	}
?>