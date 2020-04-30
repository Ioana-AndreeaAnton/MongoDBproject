<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Digital Business Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Digital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>

        <!-- css files -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
        <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
        <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
        <!-- //css files -->

        <!-- google fonts -->
        <link href="//fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
        <!-- //google fonts -->

    </head>
    <body>
        <header class="py-4">
            <div class="container">
                <div id="logo">
                    <h1> <a href="index.php"><span class="fa fa-cloud" aria-hidden="true"></span> Digital</a></h1>
                </div>
        </header>
        <div class="banner" id="home">
            <div class="container">
                <div class="row banner-text">
                    <div class="slider-info col-lg-6">
                        <div class="banner-info-grid mt-lg-5">
                            <h2>
                                <?php
                                session_start();
                                $user = '111';
                                $pass = '222';
                                $message = "";
                                /* if(isset($_POST['Submit'])){
                                  // code for check server side validation
                                  if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){
                                  $msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.
                                  }else{// Captcha verification is Correct. Final Code Execute here!
                                  $msg="<span style='color:green'>The Validation code has been matched.</span>";
                                  }
                                  } */
                                if ((!(empty($_POST["username"]))) || (!(empty($_POST["password"])))) {
                                    if (($_POST["username"] == $user) && ($_POST["password"] == $pass)) {
                                        $_SESSION["user_name"] = $_POST["username"];
                                        header("Location:user.php");
                                    } else {
                                        $message = "<h2 style='margin: 0; letter-spacing: 1px; font-size:30px' align='center'>Sorry, something went wrong.<br>Invalid Username or Password!</h2>";
                                    }
                                } else {
                                    header("location:index.php");
                                }
                                echo $message;
                                ?></h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 mt-lg-0 mt-sm-5 mt-3 banner-image text-lg-center">
                        <img src="images/bannerpng.png" alt="" class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-emp-w3ls py-5">
            <div class="container pt-lg-3">
                <div class="row footer-top">
                    <div class="col-lg-4 col-sm-6 footer-grid-wthree">
                        <h4 class="footer-title text-uppercase mb-4">Who We Are</h4>
                        <div class="contact-info">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium ipsum doloremque elit laudantium, totam rem
                                aperiam, eaque ipsa quae. Excepteur ut occaecat proident, sunt voluptatem et accusantium doloremque elit dolor sit amet.</p>
                            <h4 class="mt-3">Trusted by more than 1000+ people</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 footer-grid-wthree mt-sm-0 mt-4">
                        <h3 class="footer-title text-uppercase mb-4">Latest News</h3>
                        <div class="contact-info">
                            <div class="footer-style-w3ls">
                                <h4 class="mb-2"><span class="fa mr-1 fa-twitter"></span> Sed ut piciatis unde natus</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit volupta....</p>
                                <p class="date">23 Nov 2018.</p>
                            </div>
                            <div class="footer-style-w3ls mt-3">
                                <h4 class="mb-2"><span class="fa mr-1 fa-twitter"></span> Modi tempra incunt sit</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit volupta....</p>
                                <p class="date">24 Nov 2018.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 footer-grid-wthree mt-lg-0 mt-sm-5 mt-4">
                        <h3 class="footer-title text-uppercase mb-4">Contact Us</h3>
                        <div class="contact-info">
                            <div class="footer-style-w3ls">
                                <h4 class="mb-2"> <span class="fa mr-1 fa-map-marker"></span> Location</h4>
                                <p>Marketing Agency, 5th cross, 4th building, New York City.</p>
                            </div>
                            <div class="footer-style-w3ls my-3">
                                <h4 class="mb-2"><span class="fa mr-1 fa-phone"></span> Phone</h4>
                                <p>+121 098 8907 9987</p>
                            </div>
                            <div class="footer-style-w3ls">
                                <h4 class="mb-2"><span class="fa mr-1 fa-envelope-open"></span> Email</h4>
                                <p><a href="mailto:info@example.com">info@example.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 footer-grid-wthree mt-lg-0 mt-sm-5 mt-4">
                        <h3 class="footer-title text-uppercase mb-4">Quick Links</h3>
                        <ul class="links list-unstyled">
                            <li>
                                <a class="" href="#home"> Home</a>
                            </li>
                            <li>
                                <a class="" href="#about"> About Us</a>
                            </li>
                            <li>
                                <a class="" href="#services"> Services</a>
                            </li>
                            <li>
                                <a class="" href="#process">Process</a>
                            </li>
                            <li>
                                <a class="" href="#portfolio">Portfolio</a>
                            </li>
                            <li>
                                <a class="" href="contact.html">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>
