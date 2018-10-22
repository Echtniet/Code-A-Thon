<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="">
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
                <div class="banner">
                    <h2 class="banner-text">Enter a New Realm <br>of Job Seeking </h2>
                </div>
        <div class="main-container">
            <div class="main wrapper clearfix">


                <article>
                    <header>
                        <h1>What is JobRealm?</h1>
                        <p>Now, we all know the hardships of common jobsites.
                        These can include entering the same information repeatedly, not having direct contact with recruiters,
                        or as a recruiter, not being able to search for candidates becasue of the lack of information.
                        JobRealm offers a frictionless experience for both job seekers and job recruiters.
                        When signing up for this site you enter a realm of direct connection with recruiters and candidates.
                        </p>
                    </header>
                    <section>
                        <h2>Are You a Job Seeker?</h2>
                        <p>With JobRealm, job seekers are able to create a profile that allows them to 
                        enter all of their information only once and apply to countless jobs. This information 
                        includes a profile picture, contact information, a resume, cover letter, portfolio, and transcripts.
                        Of course each section is optional. Job seekers are also able to search the recruiters' profiles to connect
                        directly and share profiles to apply for jobs.</p>
                    </section>
                    <section>
                        <h2>Are You a Recruiter?</h2>
                        <p>Recruiters entering this realm have infinite access to all job seekers. Recruiters are able to 
                        seek out candidates and view profiles to get a full view of their resumes, cover letter, and 
                        portfolios. If recruiters are interested in a candidate they are able to ask to chat about a specific position.
                        Another great feature for recruiters is the ability to easily go through profiles that have applied. When a seeker 
                        applies to a position the recruiter can either request a chat or decline the applicant. All together an easier way
                        to sift through multiple applicants.</p>
                    </section>
                </article>

                <aside>
                   <img id="logo" src="images/logo.png" height="200">
                </aside>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

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
