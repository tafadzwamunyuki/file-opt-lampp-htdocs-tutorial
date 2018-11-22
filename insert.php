<?php

		
	$con = mysqli_connect('localhost','root','')
	or die('System under maintenance');
	
	
	if(!$con)
	{
		echo 'Not connected to server';
	}
	//Test db connect
	if(!mysqli_select_db($con,'tutorial'))
	{
		echo 'Db has not been selected';
	}
	
	//our variables
	$Name = $_POST['username'];
	$Email = $_POST['email'];
	
//Entering the data from user into database
	$sql = "INSERT INTO person (Name,Email) VALUES ('$Name','$Email')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'No data has been entered into field';
	}
	else
	{
		echo 'Data succesfully entered';
	}
//Refresh webpage after 5 seconds	
	header("refresh:5;url=index.html");

?>
















