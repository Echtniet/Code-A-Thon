<!DOCTYPE html>
<html>
    <head>
        <title>register page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style>
            h2{ text-align:center;
                padding-top:30px;
            }
            body {font-family: Arial, Helvetica, sans-serif;}
            form {border: 3px solid #f1f1f1;

            }
            /*For input boxes username and passwords*/
            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            button {
                background-color: #3ffc33;
                color: #ffffff;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }
            button:hover {
                opacity: 0.8;
            }
            input.ng-invalid.ng-dirty{
                border-color: red;
            }
            input.ng-valid {
                border-color: green;
            }
            select.ng-dirty{
                border-color: green;
            }
            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
                margin-top:30px;
            }
            .imgcontainer {
                text-align: center;
            }

            .login-container {
                width:80%;
                align-content:center;
                margin-left:auto;
                margin-right:auto;
                
            }
            span.psw {
                float: right;
                padding-top: 16px;
            }
            /*For small screens*/
            @media screen and (max-width: 300px) {
                span.psw {
                   display: block;
                   float: none;
                }
                .cancelbtn {
                   width: 100%;
                }
            }
        </style>
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
        <h2>Login Form</h2> 
        <div class="imgcontainer">
            <img src="images/logo.png" height="150px"  alt="Logo">
        </div>
        <div class="row" id="controller" ng-app="loginapp" ng-controller="loginctrl">
            <div class="col-lg-4 col-lg-offset-4">
                <div class="row">
                    <form name="loginform">
                        <div class="col-lg-12">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" ng-model="username" ng-required="true">
                        </div>
                        <div class="col-lg-12">
                            <label>Password</label>
                            <input type="password" name="psw" class="form-control" ng-model="psw" ng-required="true">
                            <br><span style="color:red" ng-if="loginfailed">Log in failed, please try again</span>
                        </div>
                        <div class="col-lg-6 col-lg-offset-3">
                            <br>
                            <button class="btn btn-success" style="width:100%;" ng-disabled="loginform.$invalid" ng-click="login()">Login</button>
                        </div>
                        
                    </form>
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
        <script src="js/jobdatingApp.js"></script>
        <script src="js/jobdatingControllers.js"></script>
    </body>
</html>