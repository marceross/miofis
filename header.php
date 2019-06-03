<?php

session_start();

if(empty($_SESSION['user_id'])){
	header('location:index.php');
}

include('config.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/spur.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="js/chart-js-config.js"></script>
    <title>Miofis</title>
</head>

<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="dashboard.php" class="spur-logo"><i class="fas fa-bolt"></i> <span>Miofis</span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="dashboard.php" class="dash-nav-item">
                    <i class="fas fa-home"></i>
					Dashboard 
				</a>
				<a href="apply.php" class="dash-nav-item">
					<i class="fas fa-chart-bar"></i>
					Apply
				</a>
				<a href="hire.php" class="dash-nav-item">
					<i class="fas fa-cube"></i>
					Hire
				</a>
				
				<a href="connect.php" class="dash-nav-item">
					<i class="fas fa-file"></i>
					Connect
				</a>
                
            </nav>
        </div>
		 <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <!--a href="#!" class="searchbox-toggle">
                    <i class="fas fa-search"></i>
                </a>
                <form class="searchbox" action="#!">
                    <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
                    <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
                    <input type="text" class="searchbox-input" placeholder="type to search">
                </form-->
                <div class="tools">
                
                    <div class="dropdown tools-item">
                        <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#!">
							<?php 
							if(isset($_SESSION['user'])){
								echo $_SESSION['user'];
								} 
							?></a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </header>