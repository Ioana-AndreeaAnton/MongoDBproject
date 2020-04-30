<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Digital Business Category Flat Bootstrap Responsive Web Template | Contact :: w3layouts</title>
        <!-- for-mobile-apps -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Digital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"  crossorigin=""></script>
        <style>
            #mapid { height: 550px; 
                     width: 475px;
                     position: relative;
            }
        </style>

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

        <title>Contact</title>
    </head>
    <body>

        <!-- //header -->
        <header class="py-4">
            <div class="container">
                <div id="logo">
                    <h1> <a href="index.php"><span class="fa fa-cloud" aria-hidden="true"></span> Digital</a></h1>
                </div>
                <!-- nav -->
                <nav class="d-lg-flex">

                    <label for="drop" class="toggle"><span class="fa fa-bars" aria-hidden="true"></span></label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2 ml-auto">
                        <li class=""><a href="index.php">Home</a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->

        <!-- banner -->
        <div class="banner inner-banner" id="home">
            <div class="container">

            </div>
        </div>
        <!-- //banner -->

        <!-- Contact page -->
        <section class="contact py-5 my-lg-5">
            <div class="container">
                <h2 class="heading mb-sm-5 mb-4">Contact Us</h2>
                <div class="row contact_information">
                    <div class="col-md-6 contact_left">

                        <!--MAP-->
                        <div id="mapid" style="width:475px; height: 550px; position: right;"></div>
                        <script>
                            var mymap = L.map('mapid').setView([47.1740429, 27.5714553], 15);
                            L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                                maxZoom: 19,
                                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                                        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                                        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                                id: 'mapbox.streets'
                            }).addTo(mymap);
                            var circle = L.circle([47.174, 27.571], {
                                color: 'rgb(231,109,131)',
                                fillColor: 'rgb(231,109,131)',
                                fillOpacity: 0.5,
                                radius: 50
                            }).addTo(mymap);
                        </script>

                    </div>
                    <div class="col-md-6 mt-md-0 mt-4">
                        <div class="contact_right p-lg-5 p-4">
                            <form action="#" method="post">
                                <div class="w3_agileits_contact_left">
                                    <h3 class="mb-3">Contact form</h3>
                                    <input type="text" name="Name" placeholder="Your Name" required="">
                                    <input type="email" name="Email" placeholder="Your Email" required="">
                                    <input type="text" name="Phone" placeholder="Phone Number" required="">
                                    <textarea placeholder="Your Message Here..." required=""></textarea>
                                </div>
                                <div class="w3_agileits_contact_right">
                                    <button type="submit" >Submit</button>
                                </div>
                                <div class="clearfix"> </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="mt-5 information">
                            <h4 class="text-uppercase mb-4"><span class="fa fa-comments"></span> General Communication</h4>
                            <p class="mb-3 text-capitalize">For General Queries, Including Partnership Opportunities, Please Email Us At <a href="mailto:info@example.com">info@example.com</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-md-5 mt-2 information">
                        <h4 class="text-uppercase mb-4"><span class="fa fa-life-ring"></span> Technical Support</h4>
                        <p class="mb-3 text-capitalize">We Are Here To Help! If You Have Technical Issues, Contact Support  <span>+12 388 455 6789</span>.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- //Contact page -->

        <!-- footer -->
        <footer class="footer-emp-w3ls py-5">
            <div class="container pt-lg-3">
                <div class="row footer-top">
                    <div class="col-lg-4 col-sm-6 footer-grid-wthree">
                        <h4 class="footer-title text-uppercase mb-4">Who We Are</h4>
                        <div class="contact-info">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium ipsum doloremque elit laudantium, totam rem
                                aperiam, eaque ipsa quae. Excepteur ut occaecat proident, sunt voluptatem et accusantium doloremque elit dolor.</p>
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
                                <a class="" href="#"> Services</a>
                            </li>
                            <li>
                                <a class="" href="#">Process</a>
                            </li>
                            <li>
                                <a class="" href="#">Portfolio</a>
                            </li>
                            <li>
                                <a class="" href="contact.html">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- //footer -->

        <!-- copyright -->
        <div class="copy-right-top border-top">
            <p class="copy-right text-center py-4">&copy; 2019 Digital. All Rights Reserved | Design by
                <a href="http://w3layouts.com/"> W3layouts </a>
            </p>
        </div>
        <!-- //copyright -->

        <!-- move top -->
        <div class="move-top text-right">
            <a href="#home" class="move-top"> 
                <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
            </a>
        </div>
        <!-- move top -->

    </body>
</html>
