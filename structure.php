<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Startup Conclave</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Oswald:wght@700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  /* font-family: "Poppins", sans-serif; */
  font-family: 'Montserrat', sans-serif;
}
html{
  scroll-behavior: smooth;
}
.page-top-2{
  background-color: #000;
  background-image: url(./images/colorful-abstract-nebula-space.jpg);
  background-repeat: no-repeat;
  background-attachment:fixed;
  background-size: cover;
  /* background-color: #bf1807; */
   /* background: #bf1807;  */
}
::selection{
  color: #fff;
  background: #bf1807;
}
.wrapper{
  max-width: 1080px;
  margin: 74px auto;
  padding: 0 20px;
  position: relative;
}
.wrapper .center-line{
  position: absolute;
  height: 100%;
  width: 4px;
  background: #fff;
  left: 50%;
  top: -2px;
  transform: translateX(-50%);
}
.wrapper .row{
  display: flex;
}
.wrapper .row-1{
  justify-content: flex-start;
}
.wrapper .row-2{
  justify-content: flex-end;
}
.wrapper .row section{
  margin-top: 2rem;
  background: #fff;
  border-radius: 5px;
  width: calc(50% - 40px);
  padding: 20px;
  position: relative;
}
.wrapper .row section::before{
  position: absolute;
  content: "";
  height: 15px;
  width: 15px;
  background: #fff;
  top: 28px;
  z-index: -1;
  transform: rotate(45deg);
}
.row-1 section::before{
  right: -7px;
}
.row-2 section::before{
  left: -7px;
}
.row section .icon,
.center-line .scroll-icon{
  position: absolute;
  background: #f2f2f2;
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color: #bf1807;
  font-size: 17px;
  box-shadow: 0 0 0 4px #fff, inset 0 2px 0 rgba(0,0,0,0.08), 0 3px 0 4px rgba(0,0,0,0.05);
}
.center-line .scroll-icon{
  bottom: 0px;
  left: 50%;
  font-size: 25px;
  transform: translateX(-50%);
}
.row-1 section .icon{
  top: 15px;
  right: -60px;
}
.row-2 section .icon{
  top: 15px;
  left: -60px;
}
.row section .details,
.row section .bottom{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.row section .details .title{
  color: #bf1807;
  font-size: 25px;
  font-weight: 800;
}
.row section p{
  margin: 10px 0 17px 0;
}
.row section .bottom a{
  text-decoration: none;
  background: #bf1807;
  color: #fff;
  padding: 7px 15px;
  border-radius: 5px;
  /* font-size: 17px; */
  font-weight: 400;
  transition: all 0.3s ease;
}
.row section .bottom a:hover{
  transform: scale(0.97);
}

@media(max-width: 790px){
  .wrapper .center-line{
    left: 40px;
  }
  .wrapper .row{
    margin: 30px 0 3px 60px;
  }
  .wrapper .row section{
    width: 100%;
    margin-top: 90px;
  }
  .row-1 section::before{
    left: -7px;
  }
  .row-1 section .icon{
    left: -60px;
  }
}
@media(max-width: 440px){
  .wrapper .center-line,
  .row section::before,
  .row section .icon{
    display: none;
  }
  .wrapper .row{
    margin: 10px 0;
    
  }
}

@media (max-width: 405px){
  .structure-text{
    font-size:2rem;
  }
}
.structure-title{
    height: 55px;
    text-align: center;
    top: 0;
    padding-top: 7rem;

}
.structure-text{
  background: #f6f4f4;
  margin-left: 15px;
  margin-right: 15px;
    border-radius: 7px 7px 0px 0px;
    padding: 10px;
    color: rgb(243, 0, 0);
    /* font-size: 25px; */
    font-family: 'Oswald', sans-serif;
  /* mmmm */
    /* padding: 5px; */
    font-size: 35px;
    font-weight: 800;
    /* font-family: 'Oswald', sans-serif; */
    letter-spacing: 0.1rem;
    /* color: white; */
    text-align: center;
}

/* FAQ's CSS Starts Here */
.box{
    width: 100%;
    margin-top: 5rem;
    /* padding: 2rem 20rem 2rem 20rem; */
    padding-left: 5%;
    padding-right: 5%;
}

.box .headings{
  margin-left: 0px;
    background: #f6f4f4;
    border-radius: 7px 7px 0px 0px;
    padding: 10px;
    color: rgb(243, 0, 0);
    text-align: center;
    font-size: 25px;
    font-family: 'Oswald', sans-serif;
}

.faqs{
    padding: 0px 20px 20px;
    display: block;
}

::-webkit-details-marker{
    float: right;
    margin-top: 3px;
}

.details{
   flex-direction: column;
    /* background: #000000; */
    padding: 10px 20px;
    border-radius: 7px;
    /* margin-top: 20px; */
    font-family: 'Montserrat', sans-serif;
    /* font-size: 25px; */
    letter-spacing: 1px;
}

.summary{
    outline: none;
    font-weight: bolder;
} 

/* rules and regulation */
.rar{
  font-family: 'Montserrat', sans-serif;
    height: 40px;
    text-align: center;
    font-size: 1.4rem;
    padding: 2 rem;
    margin: 25px;
    color: #f2f2f2;
    /* border: 3px solid white; */
    /* border-radius: 10px; */
}

/* FONTS */
p{
  font-family: 'Montserrat', sans-serif;
  margin-left: 25px;
  margin-top: 5px;
  font-size: 15px;
  font-weight: 400;
}

.date{
  color: #bf1807;
  font-size: 17px;
  font-weight: 500;
}

.details_faq{
  flex-direction: column;
    background: #ffffff;
    padding: 10px 20px;
    border-radius: 7px;
    margin-top: 20px;
    font-family: sans-serif;
    /* font-size: 25px; */
    letter-spacing: 1px;
  /* color: white; */
}

.download_rar{
  padding: 10px;
  background-color: #bf1807;
  font-family: 'Montserrat', sans-serif;
  color: white;

}



/* transition */

#fis, #sec, #thi {
  transition: transform 1s ease-in-out;
}

/* .hidden1, .hidden2, .hidden3 {
  transform: translateX(100%);
}

.visible1, .visible2, .visible3 {
  transform: translateX(0);
} */


</style>
<body class="page-top-2">
  <header class="header">
    <div>
        <a class="logo" href="https://www.ecellvnit.org/"><img class="logo" src="images/Layer 1.png" alt=""></a>
    </div>
    <div>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="./index.php" class="link link-theme link-arrow">HOME</a></li>
	    <li><a href="./structure.php" class="link link-theme link-arrow">INFO</a></li>
            <li><a href="./speakers.php" class="link link-theme link-arrow">SPEAKERS</a></li>
	    <li><a href="./index.php#contact" class="link link-theme link-arrow">CONTACT US</a></li>
            <li><a href="./registration.php" class="link link-theme link-arrow">REGISTER</a></li>
            <li><a href="./login.php" class="link link-theme link-arrow">LOGIN</a></li>
        </ul>
    </div>
</header>

    <header class="structure-title">
        <p class="structure-text">STRUCTURE & TIMELINE</p>
    </header>
    
  <div class="wrapper">
    <div class="center-line hidden1" id="fis">
      <a href="#" class="scroll-icon"><i class="fas fa-caret-up"></i></a>
    </div>
    <div class="row row-1">
      <section>
        <i class="icon fas fa-star"></i>
        <div class="details">
          <span class="title">1. Executive Summary Round</span>
          <span class="date">till 16 Feb 2023</span>
        </div>
        <p>Participants have to provide a thorough description of thier startup idea as part of the registration process followed by answering some basic questions regarding it.<p>
      </section>
    </div>
    <div class="row row-2 hidden2" id="sec">
      <section>
        <i class="icon fas fa-star"></i>
        <div class="details">
          <span class="title">2. Mentorship Round</span>
          <span class="date">20 Feb 2023 - 10 Mar 2023</span>
        </div>
        <p>Shortlisted Teams will be receiving mentoring sessions from renowned and experienced entrepreneurs. Each team has to submit its pitch deck and Elevator pitch. Mentors will guide the teams in thier further endeavors.</p>
        <!-- <div class="bottom">
          <a href="#">Read more</a>
          <i>- Someone famous</i>
        </div> -->
      </section>
    </div>
    <div class="row row-1 hidden3" id="thi">
      <section>
        <i class="icon fas fa-star"></i>
        <div class="details">
          <span class="title">3. Shark Tank Round</span>
          <span class="date">1 Apr 2023 - 2 Apr 2023</span>
        </div>
        <p>Leading teams will present their Startup at Consortium(Annual E-summit) at VNIT.The essential traits of an entrepreneur will be put to the test in front of the investors to negotiate.This round will test the presentation, speaking,evaluation and negotiationn skills of the startups.</p>
        <!-- <div class="bottom">
          <a href="#">Read more</a>
          <i>- Someone famous</i>
        </div> -->
      </section>
    </div>
  </div>




  <!-- RAR  starts -->
  <!-- <div class="rar">
    For Rules & regulations Click Here <a href="" download="Rules" ><button class="download_rar" download="Rules">Download</button></a>
  </div> -->
  <!-- RAR ends -->



  <div class="box">
    <p class="headings">FREQUENTLY ASKED QUESTION'S</p>
    <div class="faqs">
        <details class="details_faq">
            <summary class="summary">Who can participate in Startup Conclave 2022-23?</summary>
            <p class="text">The event is open for all. You just need a startup idea or an active startup to register.</p>
        </details>
        <details class="details_faq">
          <summary class="summary">How can I participate in the Startup Conclave 2022-23?</summary>
          <p class="text">You can follow the following Steps- <br>

            Step 1: Team Leader have to register for the Startup Conclave through the portal. <br>
            
            Step 2: After registering, You will find a questionnaire that contains some questions. You have to answer these questions. Some are compulsory and some are optional.</p>
        </details>
        <details class="details_faq">
          <summary class="summary">Is the registration free?</summary>
          <p class="text">Yes its totally free !</p>
        </details>
        <details class="details_faq">
          <summary class="summary">What is the last date to register?</summary>
          <p class="text">The last date of registration is the 16th of Feb </p>
        </details>
        <details class="details_faq">
          <summary class="summary">How many members can I have on my team? </summary>
          <p class="text"> You can have a maximum of 5 members in a team (1 Leader + 4 members).</p>
        </details>
        <details class="details_faq">
          <summary class="summary">I registered more than once for the same entry. What should I do?</summary>
          <p class="text">For this, you just have to fill out the questionnaire form just by your desired login credentials, if it is already been filled out twice then you can contact us about the issue. </p>
        </details>
        <details class="details_faq">
          <summary class="summary"> Can I participate in Startup Conclave, if I have already participated in previous years? </summary>
          <p class="text">Yes! You can  participate provided you were not one of the winners in previous years.</p>
        </details>
        <!-- <details class="details_faq">
          <summary class="summary">How will the business model be judged? </summary>
          <p class="text">Your business model will be judged on aspects like your: <br>
            (1) Value Proposition. <br>
            (2) Customer you are targeting. <br> 
            (3) How will you generate revenue from your idea. <br>
            (4) Unique Selling Proposition (USP) <br>
            (5) Customer Validation/Feedback <br>
            (6) Further criterias for each round will be updated soon on the website.</p>  <br>
        </details> -->
        <details class="details_faq">
          <summary class="summary">What is the mentorship round? How can I participate in this round? </summary>
          <p class="text">After filling out the questionnaire, Some startups will be sorted for the mentorship round. In this round, each startup will be assigned a mentor, who will guide them to make progress in their startup. </p>
        </details>
        <details class="details_faq">
          <summary class="summary">What is the Shark Tank Conso Round? How can I participate in this round? </summary>
          <p class="text">The Shark Tank Conso is the Final round of the Startup Conclave. This round will be held on the sidelines of Consortium 23 which is the annual E-Summit cum Management fest of E-cell VNIT, where the startups will get an opportunity to pitch their ideas to judges and receive real-time funding in VNIT Nagpur (offline). </p>
        </details>
        <details class="details_faq">
          <summary class="summary">Is the event offline or online? </summary>
          <p class="text">Only the Final Shark Tank Conso Round is offline other rounds are online</p>
        </details>
    </div>
  </div>







  <!-- footer section start -->
<footer id="footer">
  <div class="container">
      <div class="row">
          <div class="col-md-3">
              <a href="index.html"><img src="images/Layer 1.png" alt="" class="img-fluid logo-footer"></a>
            
              
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
                  <h2>Follow Us</h2>
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

</body>
</html>
