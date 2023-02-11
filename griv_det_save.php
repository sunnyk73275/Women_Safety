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
	
	$name=$_GET['name'];
	$email=$_GET['email'];
	$adhaar=$_GET['aadhaar'];
	$sub=$_GET['subject'];
	$msg=$_GET['message'];
	$g_id=$_GET['griv_id'];

	
	$sql="insert into griv_details (aadhaar_no,email_address,griv_id,message,name,subject) VALUES($adhaar,'$email',$g_id,'$msg','$name','$sub');";
	$result=mysqli_query($conn,$sql);
	

	if($result){
			echo "The record inserted successfully!<br>";
	}
	else{
			echo "The record was not inserted because of this error --->".mysqli_error($conn);
	}
?>