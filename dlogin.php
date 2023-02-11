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
	
	$user=$_GET['userid'];
	$pass=$_GET['pass'];

	$sql="Select * from registration";
	$result=mysqli_query($conn,$sql);
	if(!$result){
			echo "could not accessed!!!<br>";
			
	}
	$flag=0;
	$num=mysqli_num_rows($result);
	if($num>0){
		while($str=mysqli_fetch_assoc($result))
		{
			if(($user==$str['user_id'])&&($pass==$str['password'])){
				
				$sql="UPDATE active_user SET username='".$str['user_id']."' where username ='no'";
				$result=mysqli_query($conn,$sql);
				echo"hello ".$str['first_name']." !!! YOur are been successfully logged in !!!!<br>";
				$flag=1;
			}
		}
			if($flag==0){
				
				echo $user."is not Registered user !!!<br>";
			}
	}
	else{
			echo "user is not registered register now <br><br>";
		
	}

?>