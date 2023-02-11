<?php
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$database='women_security';
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$database);
	if(!$conn)
	{
		die('Could not connect : '.mysqli_connect_error());
	}
	else{
	echo 'Connected successfully<br>';
	}
	
	$fname=$_GET['first_name'];
	$lname=$_GET['last_name'];
	$user=$_GET['user_id'];
	$pass=$_GET['password'];
	$email=$_GET['email_id'];

	$sql="INSERT INTO registration (first_name,last_name,user_id,password,email_id) VALUES('$fname','$lname','$user','$pass','$email')";
	$result=mysqli_query($conn,$sql);
	if($result){
			echo "The record inserted successfully!<br>";
	}
	else{
			echo "The record was not inserted because of this error --->".mysqli_error($conn);
	}

?>