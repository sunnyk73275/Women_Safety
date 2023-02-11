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
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Women Safety</title>

    <!-- Favicon -->

    <!-- Core Stylesheet -->
    <link href="style1.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>


    <!-- Search Form -->
    <div class="search-hidden-form">
        <form action="#" method="get">
            <input type="search" name="search" id="search-anything" placeholder="Search Anything...">
            <input type="submit" value="" class="d-none">
            <span class="searchBtn"><i class="fa fa-times" aria-hidden="true"></i></span>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- ****** Top Header Area End ****** -->

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
            <?php
                        $sql="select * from griv_details;";
		$result=mysqli_query($conn,$sql);
		
	if(!$result){
			echo "could not accessed!!!<br>";
			
	}
	$num=mysqli_num_rows($result);
	if($num>0){
		while($str=mysqli_fetch_assoc($result))
		{
			
				
				?>
                <!-- Logo Area Start -->
                <div class="col-12">
                    <div class="logo_area text-center">
                        <a href="index.html" class="yummy-logo">Justice for Women</a>
                    </div>
                </div>
            </div>

            </section>

            <div class="mid">
                <h1><?php echo $str['subject'];?></h1>
                <p><?php echo $str['message'];?>
                </p>
            </div>

            <?php
				
			
			
		}

	}
	?>
            <footer class="footer_area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-content">
                                <!-- Logo Area Start -->
                                <div class="footer-logo-area text-center">
                                    <a href="index.html" class="yummy-logo">Justice for Women</a>
                                </div>
                                <!-- Menu Area Start -->
                                <nav class="navbar navbar-expand-lg">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#yummyfood-footer-nav" aria-controls="yummyfood-footer-nav"
                                        aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"
                                            aria-hidden="true"></i> Menu</button>
                                    <!-- Menu Area Start -->
                                    <div class="collapse navbar-collapse justify-content-center"
                                        id="yummyfood-footer-nav">
                                        <ul class="navbar-nav">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="#">Home <span
                                                        class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Features</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Categories</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Archive</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Copywrite Text -->
                            <div class="copy_right_text text-center">
                                <p>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- ****** Footer Menu Area End ****** -->

            <!-- Jquery-2.2.4 js -->
            <script src="js/jquery/jquery-2.2.4.min.js"></script>
            <!-- Popper js -->
            <script src="js/bootstrap/popper.min.js"></script>
            <!-- Bootstrap-4 js -->
            <script src="js/bootstrap/bootstrap.min.js"></script>
            <!-- All Plugins JS -->
            <script src="js/others/plugins.js"></script>
            <!-- Active JS -->
            <script src="js/active.js"></script>
</body>