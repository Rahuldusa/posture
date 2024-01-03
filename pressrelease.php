<!doctype php>
<php class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Health & Fitness | Template </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

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
                                    <a href="from.php" class="btn header-btn"  style="background-color:green;">became a member</a>
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
    <!-- <main>
        <-- ? Hero Start -->
        <div class="slider-area2" style="background-image: url('assets/img/gallery/img4.png'); background-size: cover; background-position: center;">
    <div class="slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 text-center pt-70">
                        <h2>Press Release</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
       
    </main>
    <style>
          #press-release-container {
            max-width: 1155px;
            margin: auto;
            border: 2px solid #ccc;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            margin-top: 20px;
            font-weight: bold;
          }
          .card {
        border: 2px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        margin-bottom: 20px;
        overflow: hidden;
        background-color: white;
        color: white;
        
    }

    .card-body {
        padding: 80px;
        text-align: center; 
    }

    .read-more-btn {
        /* display: block; */
        display: inline-block;
        margin: 0 auto;
        background-color: #4CAF50;
        color: white;
        padding: 10px 6px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-weight: bold;
        font-size: 20px;
        text-decoration: none;
        
    }
    p,li {
        font-family: 'Arial', sans-serif;
        font-size: 18px;
        line-height: 1.6;
        color: #333;
        margin-bottom: 15px;
    }

    .read-more-btn:hover {
        background-color: #45a049;
    }

  .modal-content {
    width: 140%; /* Adjust the width as needed */
    max-width: none; /* To override any max-width restriction */
    font-size:20px;
    padding: 20px;
    
  }


    .video-container {
      position: relative;
      width: 100%;
      overflow: hidden;
      padding-top: 56.25%; /* 16:9 aspect ratio */
      margin-top: 20px;
    }

    video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    </style>
<div class="container">
<div class="row">
    <div class="col-md-12">
<div class="video-container mt-4">
  <video controls poster="path/to/poster-image.jpg">
    <source src="assets/img/video.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>
</div>
</div>
</div>




<!-- <video width="100%" height="240" controls>
  <source src="assets/img/video.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video> -->
<div id="press-release-container">
        <h2 class="text-center">PRESS RELEASE</h2>
      </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2>MR AND MS POSTURE INDIA – THE INAUGURAL EDITION</h2>
                        <a href="#" class="read-more-btn text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">Read More </a>
                        <!-- <a href="#" class="read-more-btn text-center">Read More </a> -->
                    </div>
                </div>
            </div>
        
   
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog d-flex align-items-center justify-content-center">
  <!-- <div class="modal-dialog"> -->
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">MR AND MS POSTURE INDIA – THE INAUGURAL EDITION</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body; text-align:justify;">
        
<p>The most outlandish event has finally unfolded. Mr. and Mrs. Posture INDIA is an unconventional pageant for people who THINK, EAT, MOVE & STAND RIGHT. The very idea reimagines and redefines the relevance of a beauty contest from a commonplace standpoint to something that goes beyond concept and definition.</p>

<p>What distinguishes the pageant is that it is the only pageant that focuses on natural health lifestyle and Chiropractic as an alternative health care. Each contestant will be given lessons on posture and its associated health benefit, advantages of natural health lifestyle and chiropractic care.</p>

<p>This is also the only INDIA pageant including an essay competition. The pageant needs someone who can represent an organization and understand what it stands for and is passionate about creating a platform that creates a positive impact on people and communities.  In a nutshell, we’re looking for someone who combines beauty, good posture, talent, and wit.</p>

<p>The inaugural edition is set to be launched in Bangalore INDIA on September 8, 2024. The contestants will be welcomed from October 10-20, 2024. The date was carefully checked as it is in conjunction with the World Spine Day. </p>

<p>It’s October to remember. Don’t miss out and subscribe to our channels for more updates. </p>

<p>Facebook and Instagram : @mrandmspostureINDIA</p>

<p>For National Directorship Inquiries, email info@posturepageant.com</p>

<p>Website: www.posturepageant.com.ph</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
    
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2>THE RISE OF THE POSTURE PAGEANT</h2>
                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->
                        <a href="#" class="read-more-btn text-center" data-bs-toggle="modal" data-bs-target="#exampleModal1">Read More </a>
                    </div>
                </div>
            </div>
   
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <!-- <div class="modal-dialog"> -->
  <div class="modal-dialog d-flex align-items-center justify-content-center">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">THE RISE OF THE POSTURE PAGEANT</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

<p>The most outlandish event has finally unfolded. Mr. and Mrs. Posture INDIA (MMPI) is an unconventional pageant for people who THINK, EAT, MOVE & STAND RIGHT. The very idea reimagines and redefines the relevance of a beauty contest from a commonplace standpoint to something that goes beyond concept and definition.</p>

<p>What distinguishes the pageant is that it is the only pageant that focuses on natural health lifestyle and Chiropractic as an alternative health care. Each contestant will be given lessons on posture and its associated health benefit, advantages of natural health lifestyle and chiropractic care.</p>

<p>This is also the only INDIA pageant including a live essay competition. The pageant needs someone who can represent the Chiropractic Diplomatic Crops Inc. (Non-Profit Organization) and understand what it stands for and is passionate about creating a platform that creates a positive impact on people and communities.  In a nutshell, we’re looking for someone who combines beauty, good posture, talent, and wit.</p>

<p>The inaugural edition is set to be launched in Bangalore INDIA in October 2024. The contestants will be welcomed from October 10-20, 2024. The date was carefully chosen to celebrate awareness of the World Spine Day. </p>

<p>The actual launch took place on October 15, 2023, at Makati Sports Club in the Philippines, with its founder DocMIKE Tetrault, Managing Director Jedaver Opingo, and the rest of the MMPI Team in attendance. The application has finally been made available on their website www.posturepageant.com</p>

 

<p>It is indeed October to remember. Don’t miss out; subscribe to our channels for additional information.</p>

<p>Facebook / Instagram / Tiktok: @mrandmspostureINDIA</p>

<p>For National Directorship and General Inquiries, email info@posturepageant.com</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
</div>
</div>
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
                            <a href="index.php"><img src="assets/img/logo/logooo1.png" alt=""></a>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://iiiQbets.com" target="_blank">iiiQbets</a>
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
    <div id="back-top"  style="background-color:green;" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
    
    </body>
</php>