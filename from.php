<!doctype php>
<php class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Member Form </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

        <!-- animation css link -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


        <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/gijgo.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/animated-headline.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>


    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .hero-section {
            background-image: url('path/to/your/image.jpg');
            background-size: cover;
            background-position: center;
            height: 300px;
            /* Adjust the height as needed */
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
        }

        .form-container {
            max-width: 80%;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 128, 0, 0.5);
            background-color: #fff;
            /* Set a background color for the form container */
            position: relative;
            top: -150px;
            /* Adjust the spacing between the form and the heading */
        }

        .form-group {
            margin-bottom: 15px;
        }

        h2 {
            font-size: 24px;
        }

        /* Increase font size for h2 inside form-container */
        .form-container h2 {
            font-size: 38px;
            /* Adjust the size as needed */
        }

        .hero-section h1 {
            font-size: 50px;
            /* Adjust the size as needed */
        }

        p,
        li {
            font-family: 'Arial', sans-serif;
            font-size: 18px;
            line-height: 1.6;
            color: #333;
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-size: 16px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .form-row>div {
            flex: 1;
        }

        button {
            padding: 10px 14px;
            /*/Adjust the padding to make the button smaller */
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 20px;
            /* Adjust the font size to make the text smaller */
        }

        .button-container {
            text-align: center;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>

    <body>
        <!-- ? Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="assets/img/logo/logg.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader Start -->
        <header>
            <!--? Header Start -->
            <div class="header-area header-transparent">
                <div class="main-header header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/img/logo/logg.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <div class="menu-main d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu f-right d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about.php">About</a></li>
                                                <li><a href=" ">gallery</a>
                                                    <ul class="submenu">
                                                        <li><a href="photo.php">Photo</a></li>
                                                        <li><a href="video.php">Video</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="competition.php">Competition</a></li>
                                                <li><a href="contact.php">Contact</a></li>
                                                <li><a href="pressrelease.php">Press Release</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                        <a href="from.php" class="btn header-btn" style="background-color:green;">became a member</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>
        <main>
            <!-- ? Hero Start -->
            <div class="slider-area2" style="background-image: url('assets/img/gallery/img4.png'); background-size: cover; background-position: center;">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center pt-70">
                                <h2>Apply Here</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- <div class="centered-image" style="background-image: url('assets/img/gallery/img7.png'); background-size: cover; background-position: center;">
    Your image content or additional styling goes here 
</div> -->

            <!-- Hero End -->
            <!--? Contact form Start -->

            <div class="hero-section" style="margin-top: -30px;">
                <h1>APPLICATION FORM</h1>
            </div>

            <div class="form-container col-md-12 mt-5 mb-5" data-aos="zoom-in-down">
                <h2>Contact Information</h2>

                <div class="form-group form-row">
                    <div>
                        <form id="yourForm">
                            <label for="firstname">First Name:</label>
                            <input type="text" id="firstname" name="firstname" required>
                    </div>
                    <div>
                        <label for="middlename">Middle Name:</label>
                        <input type="text" id="middlename" name="middlename">
                    </div>
                    <div>
                        <label for="lastname">Last Name:</label>
                        <input type="text" id="lastname" name="lastname" required>
                    </div>
                </div>


                <div class="form-group form-row">
                    <div>
                        <label for="birthdate">Birthdate:</label>
                        <input type="date" id="birthdate" name="birthdate" required>
                    </div>
                    <div>
                        <label for="age">Age:</label>
                        <input type="number" id="age" name="age" required>
                    </div>
                </div>

                <div class="form-group form-row">

                    <div>
                        <label for="civilstatus">Civil Status:</label>
                        <select id="civilstatus" name="civilstatus" required>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="widowed">Widowed</option>
                        </select>
                    </div>

                    <div>
                        <label for="country">Country/Region:</label>
                        <input type="text" id="country" name="country" required>
                    </div>

                </div>
                <div class="form-group">
                    <label for="address">Complete Address:</label>
                    <input type="text" id="address" name="address" required>
                </div>

                <div class="form-group form-row">
                    <div>
                        <label for="contactnumber">Contact Number:</label>
                        <input type="tel" id="contactnumber" name="contactnumber" required>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="viberwhatsapp">Viber/WhatsApp:</label>
                    <input type="tel" id="viberwhatsapp" name="viberwhatsapp">
                </div>

                <div class="form-group">
                    <label for="facebook">Facebook Link:</label>
                    <input type="url" id="facebook" name="facebook">
                </div>

                <div class="form-group">
                    <label for="instagram">Instagram Link:</label>
                    <input type="url" id="instagram" name="instagram">
                </div>

                <div class="form-group form-row">
                    <div>
                        <label for="height">Height (cm):</label>
                        <input type="number" id="height" name="height" required>
                    </div>
                    <div>
                        <label for="weight">Weight (kg):</label>
                        <input type="number" id="weight" name="weight" required>
                    </div>
                    <div>
                        <label for="shoesize">Shoe Size (cm): EU/US</label>
                        <input type="text" id="shoesize" name="shoesize" required>
                    </div>
                </div>


                <div class="form-group form-row">
                    <div>
                        <label for="bust">Bust (in):</label>
                        <input type="number" id="bust" name="bust" required>
                    </div>
                    <div>
                        <label for="waist">Waist (cm):</label>
                        <input type="number" id="waist" name="waist" required>
                    </div>
                    <div>
                        <label for="hip">Hip (cm):</label>
                        <input type="number" id="hip" name="hip" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="declaration">Declaration if delegate has my any Medical Condition/Allergy/Medication:</label>
                    <textarea id="declaration" name="declaration" rows="4" style="width: 100%;  border-radius: 10px; border: 1px solid #ccc;"></textarea>
                </div>

                <div class="form-group">
                    <label for="dietary requirement">Dietary requirement:</label>
                    <input type="text" id="dietary requirement" name="dietary requirement" required>
                </div>
                <h2>Personal Information</h2>
                <div class="form-group">
                    <label for="jobtitle">Job Title:</label>
                    <input type="text" id="jobtitle" name="jobtitle" required>
                </div>

                <div class="form-group">
                    <label for="education">Education:</label>
                    <input type="text" id="education" name="education">
                </div>

                <div class="form-group">
                    <label for="school">School:</label>
                    <input type="text" id="school" name="school">
                </div>

                <div class="form-group">
                    <label for="skills">Skills:</label>
                    <input type="text" id="skills" name="skills">
                </div>

                <div class="form-group">
                    <label for="languages">Language Spoken:</label>
                    <input type="text" id="languages" name="languages">
                </div>

                <h2>Initial Requirement</h2>
                <div class="form-group form-row" style="display: flex; gap: 10px;">

                    <div style="flex: 1;">
                        <label for="headshot">Head Shot Photo:</label>
                        <input type="file" id="headshot" name="headshot" accept="image/*" required>
                    </div>

                    <div style="flex: 1;">
                        <label for="wholebody">Whole Body Photo:</label>
                        <input type="file" id="wholebody" name="wholebody" accept="image/*" required>
                    </div>

                </div>

                <center>
                    <div style="margin-top: 10px;">
                        <button type="button" onclick="validateForm()">Submit</button>
                    </div>
                </center>
            </div>


            <script>
                function validateForm() {
                    var form = document.getElementById('yourForm');
                    var elements = form.elements;

                    for (var i = 0; i < elements.length; i++) {
                        if (elements[i].hasAttribute('required') && elements[i].value.trim() === '') {
                            alert('Please complete all required fields.');
                            return;
                        }
                    }

                    // If all required fields are filled, you can submit the form or perform other actions.
                    alert('Form submitted successfully!');
                    // Uncomment the line below to submit the form:
                    // form.submit();
                }
            </script>








            <!-- contact left Img-->
            <!-- <div class="from-left d-none d-lg-block">
                <img src="assets/img/gallery/contact_form.png" alt="">
            </div>
        </div> -->
            <!-- Contact form End -->
        </main>
        <footer>
            <!--? Footer Start-->
            <div class="footer-area section-bg" data-background="assets/img/gallery/img2.png">
                <div class="container">
                    <div class="footer-top footer-padding">
                        <!-- Footer Menu -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Quick Links</h4>
                                        <ul>
                                            <li><a href="index.php" style="color: white;  font-size: 18px;">Home</a></li>
                                            <li><a href="about.php" style="color: white;  font-size: 18px;">About</a></li>
                                            <li><a href="photo.php" style="color: white;  font-size: 18px;">Photo Gallery</a></li>
                                            <li><a href="video.php" style="color: white;  font-size: 18px;">Video Gallery </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Explore</h4>
                                        <ul>
                                            <li><a href="competition.php" style="color: white;  font-size: 18px;">Competition</a></li>
                                            <li><a href="contact.php" style="color: white;  font-size: 18px;">Contact</a></li>
                                            <li><a href="pressrelease.php" style="color: white;  font-size: 18px;">Press Release</a></li>
                                            <li><a href="from.php" style="color: white;  font-size: 18px;">Become a member</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Get in touch</h4>
                                        <!-- <address style="color: white;">
                                <h3>Buttonwood, California.</h3>
                                <p>Rosemead, CA 91770</p>
                            </address> -->
                                        <!-- <div class="media-body">
                                <h3 style="color: white;">+1 253 565 2365</h3>
                                <p style="color: white;">Mon to Fri 9am to 6pm</p>
                            </div> -->
                                        <div class="media-body">
                                            <p style="color: white;  font-size: 18px;">San Antonio Plaza Arcade</p>
                                            <p style="color: white;  font-size: 18px;"> 50, 1221 McKinley Rd,</p>
                                            <p style="color: white;  font-size: 18px;"> 1221 Metro Manila,</p>
                                            <p style="color: white;  font-size: 18px;">Philippines</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-logo">
                                        <a href="index.php"><img src="assets/img/logo/logg.png" alt=""></a>
                                    </div>
                                    <div class="footer-social">
                                        <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <!-- <a href="#"><i class="fas fa-globe"></i></a> -->
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-12">
                                <div class="footer-copy-right text-center">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://iiiQbets.com" target="_blank">iiiQbets</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </footer>




        <!-- Scroll Up -->
        <div id="back-top" style="background-color:green;">
            <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
        </div>

        <!-- JS here -->

        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
        <script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
        <!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
        <script src="./assets/js/jquery.sticky.js"></script>

        <!-- counter , waypoint -->
        <script src="./assets/js/jquery.counterup.min.js"></script>
        <script src="./assets/js/waypoints.min.js"></script>
        <script src="./assets/js/jquery.countdown.min.js"></script>
        <script src="./assets/js/hover-direction-snake.min.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

        <!-- Jquery Plugins, main Jquery -->
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>

        <!-- Animation links -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                offset: 120, // offset (in px) from the original trigger point
                delay: 0, // values from 0 to 3000, with step 50ms
                duration: 3000, // values from 0 to 3000, with step 50ms
                easing: 'ease', // default easing for AOS animations
                once: false, // whether animation should happen only once - while scrolling down
                mirror: false, // whether elements should animate out while scrolling past them
                anchorPlacement: 'top-bottom',
            });
        </script>

    </body>
</php>