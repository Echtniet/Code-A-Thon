<?php
    session_start();
?>

<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        
</head>
<body>
        <div class="header-container">
            <header class="wrapper clearfix">
                <div class="logoArea"><a href="index.php">
                 <img class="header-logo" class="logoAnimation" src="images/logoOnly.png" height=50px"  alt="Logo">
                <h1 class="title">JobRealm</h1>
                </a></div>
                <nav>
                    <ul>
                        <?php include("nav.php") ?>
                    </ul>
                </nav>
            </header>
        </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <br>
            <div class="row well">
                <div class="col-lg-2">
                    <img class="img-circle" src="images/BobbyB.png" alt="profile" style="max-height:100px;">
                </div>
                <div class="col-lg-8">
                    <h3>Bobby Bearcat <b>#BobbyB.Professional</b></h3>
                    <h5>Phone:</h5>
                    <h5>Email:</h5>
                </div>
                <div class="row">
                    <div class="col-lg-12 w3-center">
                        <br>
                        <embed src="bobbybearcat.pdf" width="80%" height="300px" />
                    </div>
                </div>
                <div class="row">
                    <br>
                    <div class="col-lg-1 col-lg-offset-1">
                        <img class="img-circle" src="images/xButton.png" alt="profile" style="max-height:70px;" onclick="alert('This will pass on seeker')">
                    </div>
                    <div class="col-lg-1 col-lg-offset-8">
                        <img class="img-circle w3-right" src="images/starButton.png" alt="profile" style="max-height:70px;" onclick="alert('This will like seeker')">
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
            <div class="footer-container">
            <!--<footer class="wrapper">-->
            <footer>
            <ul class="floatLeft">
                <?php include('footer.php'); ?>
            </ul>
                <a href="index.html">
                <img src="images/logoOnly.png" width="40px" height="40px" alt="logo" class="floatRight"></a>
                
                <a href="facebook.com">
                <img alt="Facebook" src="images/FBlogo.png" width="40px" height="40px" class="floatRight"></a>
                
                <a href="youtube.com">
                <img alt="Youtube" src="images/YTlogo.png" width="40px" height="40px" class="floatRight"></a><br>
            <br>
            <p class="floatRight"> Copyright &copy; Bits n' Bytes</p>
            </footer>
        </div>
</body>
























</html>