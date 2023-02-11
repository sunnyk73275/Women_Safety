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
	$lout=$_GET['status'];
	if($lout=='lg'){
	$sql="UPDATE active_user SET username='no' where username!='no'";
	$result=mysqli_query($conn,$sql);
	echo "You are successfully logged out";
	}
	else
	{
			echo "no user here logged in";
		
	}
?>
						