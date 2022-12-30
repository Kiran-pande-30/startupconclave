<?php
// include('authentication.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartUp Conclave</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
</head>
<body class="page-top">
    <header class="header">
        <div>
            <a class="logo" href="https://www.ecellvnit.org/"><img class="logo" src="images/Layer 1.png" alt=""></a>
        </div>
        <div>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <div class="menu">
                <li><a href="./index.php" class="link link-theme link-arrow">HOME</a></li>
                <li><a href="./structure.php" class="link link-theme link-arrow">STRUCTURE</a></li>
                <li><a href="./speakers.php" class="link link-theme link-arrow">SPEAKERS</a></li>
                <li><a href="./registration.php" class="link link-theme link-arrow">REGISTER</a></li>
                <li><a href="./login.php" class="link link-theme link-arrow">LOGIN</a></li>
            </div>
        </div>
      
    </header>

    <div id="main" class="main">

        <div class="details">
            <h1 class="suc">Register Now For</h1>
            <h3 class="suc-det">Central India Largest B-Plan Competition</h3>
            <h3 class="suc-det">Cash Prizes upto <span class="prize"> INR 3 Lakhs <span class="star"> * </span></span> <br> and Resorces worth <span class="prize">1 Million <span class="star" >** </span> </span></h3>
            <button onclick="window.location.href='./registration.php'"  class="register button-24" role="button">REGISTER</button>

        </div>

        <div class="det-logo">
            <img class="logo floating" src="images/SuC_Logo_Spons_1.png" alt="">
        </div>
      
    </div>



    <!-- HTML !-->


    <!-- about -->

    <section class="about" id="about">
        <h3>ABOUT US</h3>
        <div class="about-con">
            <div class="about-cell" id="about-cell">
                <img src="images/Layer 1.png" alt="" class="about-e-logo">
                <p>
                    <!-- Innovation and enterprising are the wheels that steer the world into a brighter future. Great ideas result into great undertakings which pave the way for glaring success. In order to facilitate this vision of promoting entrepreneurship in India, E-Cell VNIT organizes StartUp Conclave, a national-level business plan competition. -->
                    Entrepreneurship Cell is managed by students of VNIT under the guidance of Centre of Innovation, Nagpur and Prime Minister Yuva Yojana, which aims to promote and develop entrepreneurship culture amongst the students. Throughout the year, we conduct various events, workshops and invite speakers from varied domains to inspire and assist students on their journey to become leading entrepreneurs of tomorrow.
                </p>
            </div>
            <div class="vl">

            </div>
            <div class="about-suc" id="about-suc">
                <img src="images/startup-conclave.png" alt="" class="about-s-logo">
                <p>
                    Innovation and enterprising are the wheels that steer the world into a brighter future. Great ideas result into great undertakings which pave the way for glaring success. In order to facilitate this vision of promoting entrepreneurship in India, E-Cell VNIT organizes StartUp Conclave, a national-level business plan competition.
                </p>
            </div>
            
        </div>

    </section>
    </div>

    <!-- <div class="title-name">
        <h4>MAJOR SPONSOR</h4>
    </div>

    <div class="out-box">
        <div class="in-box">
            <div class="img-box">
                <img class="img" src="images/coal.png" alt="">
            </div>
        </div>
    </div>

    

    <div class="title-name">
        <h4>OUTREACH PARTNER</h4>
    </div>

    <div class="out-box">
        <div class="in-box">
            <div class="img-box">
                <img class="img" src="images/headstart.png" alt="">
            </div>
        </div>
        <div class="in-box">
            <div class="img-box">
                <img class="img" src="images/Lemon-Ideas-Final-Logo.png" alt="">
            </div>
        </div>
        <div class="in-box">
            <div class="img-box">
                <img class="img" src="images/blue-learn.png" alt="">
            </div>
        </div>
    </div> -->



<!-- footer section start -->
<footer id="footer">
    <div class="container text-center align-items-center">
        <div class="row">
            <div class="col-md-3">
                <a href="index.php"><img src="images/Layer 1.png" alt="" class="img-fluid logo-footer"></a>
              
                
            </div>
            <!-- <div class="col-md-3">
                <div class="useful-link">
                    <h2>Useful Links</h2>
                    <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
                    <div class="use-links">
                        <li><a href="index.html"><i class="fa-solid fa-angles-right"></i> Home</a></li>
                        <li><a href="about.html"><i class="fa-solid fa-angles-right"></i> About Us</a></li>
                        <li><a href="gallery.html"><i class="fa-solid fa-angles-right"></i> Gallery</a></li>
                        <li><a href="contact.html"><i class="fa-solid fa-angles-right"></i> Contact</a></li>
                    </div>
                </div>

            </div> -->
            
            <div class="col-md-5">
                <div class="address">
                    <h2>Address</h2>
                    <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
                    <div class="address-links">
                        <li class="address1"><i class="fa-solid fa-location-dot"></i>E-Cell office, 1st Floor VNIT Canteen, Visvesvaraya National Institute Of Technology, South Ambazari Road, Abhyankar Nagar, Nagpur-440010</li>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="address">
                    <h2 style="margin-bottom: 5px;">Contact</h2>
                    <div class="address-links">
                        <li><a href="mailto:startupcinclave@ecellvnit.co.in"><i class="fa-solid fa-envelope"></i>startupcinclave@ecellvnit.co.in</a></li>
                        <li><a href="mailto:corporateaffairs@ecellvnit.co.in"><i class="fa-solid fa-envelope"></i>corporateaffairs@ecellvnit.co.in</a></li>
                    </div>
                </div>
            </div>
          
            <div class="col-md-12 ">
                <div class="social-links">
                    <h2 class="text-center">Follow Us</h2>
                    <img src="./assets/images/about/home_line.png" alt="">
                    <div class="social-icons">
                        <li><a href="https://www.facebook.com/vnitecell/"><i class="fa-brands fa-facebook-f"></i> Facebook</a></li>
                        <li><a href="https://www.instagram.com/ecellvnit/?hl=en"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                        <li><a href="https://www.linkedin.com/company/theentrepreneurshipcellvnit/mycompany/"><i class="fa-brands fa-linkedin-in"></i> Linkedin</a></li>
                        <li><a href="https://www.youtube.com/@ECellVNIT"><i class="fa-brands fa-youtube"></i> YouTube</a></li>
                        <li><a href="https://twitter.com/ecell_vnit"><i class="fa-brands fa-twitter"></i> Twitter</a></li>
                    </div>
                </div>
            </div>

        </div>
    </div>

</footer> -->
<!-- footer section end -->
<!-- footer copy right section start -->
<section id="copy-right">
    <div class="copy-right-sec"><i class="fa-solid fa-copyright"></i>  
        <a href="https://www.ecellvnit.org/" style="text-decoration: none; color: #fff; "> E-cell VNIT </a>
    </div>

</section>

<!-- footer copy right section end -->







    

<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="savy.min.js"></script>
  <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
