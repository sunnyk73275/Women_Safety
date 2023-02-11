
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
	
	
		$sql="Select * from active_user CROSS JOIN registration ON active_user.username=registration.user_id";
		$result=mysqli_query($conn,$sql);
		
	if(!$result){
			echo "could not accessed!!!<br>";
			
	}
	$num=mysqli_num_rows($result);
	if($num>0){
		while($str=mysqli_fetch_assoc($result))
		{
			if($str['username']!='no'){
				?>
				
				<!doctype html>
<html>
<head>
<title>Your Account</title>
<link rel="stylesheet" href="collage webpage/style.css">
<style>

.window{
	background-color:white;
	margin:3% 10%;	
}

.galary{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("collage webpage/images/bg2.jpg");
	background-position:center;
	width:100%;
	height:300px;
	background-repeat:no-repeat;
	background-size:cover;
}
.container{
	margin:3% 27%;
	padding-bottom:3%;
	box-shadow:0px 2px 4px 0 grey,0px 4px 16px 0 grey;
	min-height:100px;
	overflow:hidden;
}
.infobox{
	margin:1%;
	padding:1%;
	box-shadow:0px 2px 4px 0 grey,0px 4px 16px 0 grey;
	min-height:5%;
	width:65%;
	overflow:hidden;
	float:left;
	margin-left:20%;
}
.col{
	font-size:15px;
	padding-left:10px;
	color:grey;
}
.val{
	font-size:20px;
	padding-left:20px;
	
}
.btn{
	margin:1%;
	padding:1%;
	
	min-height:5%;
	width:20%;
	overflow:hidden;
	float:right;
	margin-right:12%;
	
}
.submit-btn{
	width:85%;
	padding:10px 30px;
	cursor:pointer;
	display : block;
	margin:auto;
	background:linear-gradient(to right,#ff105f,#ffad06);
	border:0;
	outline:none;
	border-radius:30px;
	
}
</style>
</head>
<body>

<div class="container"><br>
<h1 style="padding-left:70px;">Your Account Info</h1>
<div class="infobox">
<div class="col">First Name</div><div class="val"><b><?php echo $str['first_name'];?></b></div>
</div>
<div class="infobox">
<div class="col">Last Name</div><div class="val"><b><?php echo $str['last_name'];?></b></div>
</div>
<div class="infobox">
<div class="col">UserId</div><div class="val"><b><?php echo $str['user_id'];?></b></div>
</div>
<div class="infobox">
<div class="col">Name</div><div class="val"><b><?php echo $str['email_id'];?></b></div>
</div>
<div class="btn">
<form action="logout.php" method="get">
						<input type="hidden" name="status" value="lg">
						<input type="submit" class="submit-btn" value="LOGOUT"> 
						
						</form>
						</div>
</div>
</body>
</html>
				<?php
				
			}
			
		}

	}
	else{
		?>
				<html>
<head>
<title>Login</title>
<style>
*{
	margin:0px;
	padding:0px;
	font-family:sans-serif;
}
.hero{
		height:100%;
		width:100%;
		position:absolute;
	
}
.form_box{
	
	width:380px;
	height:550px;
	position:relative;
	margin:3% auto;
	background:#fff;
	padding:5px;
	box-shadow:0px 2px 4px 0 grey,0px 4px 16px 0 grey;
	border-radius:10px;
	overflow:hidden;
}
.button_box{
	width:220px;
	margin:35px auto 0px auto;
	position:relative;
	box-shadow:0 0 20px 9px #ff61241f;
	border-radius:30px;
	
}
.toggle-btn{
	padding:10px 30px;
	cursor:pointer;
	background:transparent;
	border:0;
	outline:none;
	position:relative;
	
}

.input-group{
		top:180px;
		position:absolute;
		width:280px;
		transition: .5s;
	
}
.input-field{
	
	width:100%;
	padding:10px 0;
	margin:5px 0;
	border-left:0;
	border-top:0;
	border-right:0;
	border-bottom:1px solid #999;
	outline:none;
	background:transparent;
}
#btn{
	
	top:0;
	left:0;
	position:absolute;
	width:110px;
	height:100%;
	background:linear-gradient(to right,#ff105f,#ffad06);
	border-radius:30px;
	transition: .5s;
}
.submit-btn{
	width:85%;
	padding:10px 30px;
	cursor:pointer;
	display : block;
	margin:auto;
	background:linear-gradient(to right,#ff105f,#ffad06);
	border:0;
	outline:none;
	border-radius:30px;
}
.check-box{
	margin:30px 10px 30px 0;
}
span{
	color:#777;
	font-size:12px;
	bottom:68px;
	position:absolute;
	
}
#login{
	
	left:50px;
}
#register{
	
	left:450px;
}
</style>
</head>
<body>
<div class="hero">
	<div class="form_box">
	<div class="button_box">
		<div id="btn"></div>
		<button type="button" class="toggle-btn" onclick="login()">Login</button>
		<button type="button" class="toggle-btn" onclick="register()">Register</button>
		
	</div>
	<form id="login" class="input-group" action="dlogin.php" method="get">
	
	<input type="text" class="input-field" placeholder="User Id" name="userid" required>
	<input type="text" class="input-field" placeholder="Enter Password" name="pass" required>
	<input type="checkbox" class="check-box"><span>Remember Password</span>
	<button type="submit" class="submit-btn">LOGIN</button>
	</form>
	<form id="register" class="input-group" action="resgistration.php" method="get">
	<input type="text" class="input-field" placeholder="First Name" name="first_name" required>
	<input type="text" class="input-field" placeholder="Last Name" name="last_name" required>
	<input type="text" class="input-field" placeholder="User Id" name="user_id" required>
	<input type="password" class="input-field" placeholder="Enter Password" name="password" required>
	<input type="email" class="input-field" placeholder="Email Id" name="email_id" required>
	<input type="checkbox" class="check-box"><span>I agree to terms and condition</span>
	<button type="submit" class="submit-btn">REGISTER</button>
	</form>
	</div>
</div>

<script>
	var x=document.getElementById("login");
	var y=document.getElementById("register");
	var z=document.getElementById("btn");
	
	function register(){
		
		x.style.left="-400px";
		y.style.left="50px";
		z.style.left="110px";
	}
	function login(){
		
		x.style.left="50px";
		y.style.left="450px";
		z.style.left="0px";
	}
</script>

</body>
</html>
				<?php
	
	}
?>
