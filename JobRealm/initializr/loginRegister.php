<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

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
        <div class="main-content">
                 <img class="header-logo" class="logoAnimation" src="images/logoOnly.png" height=75px"  alt="Logo">
        <h2> Hello, please choose whether you want to <br>login or need to register for an account <br></h2>
        <h3 class="button"><a href="login.php">Login</a></h3>
        <h3 class="button"><a href="register.php">Register</a></h3>
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
                
                <a href="https://www.youtube.com/channel/UCHrZMqYiFPuK4GGmUDgyoPA/featured">
                <img alt="Youtube" src="images/YTlogo.png" width="40px" height="40px" class="floatRight"></a><br>
            <br>
            <p class="floatRight"> Copyright &copy; Bits n' Bytes</p>
            </footer>
        </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>