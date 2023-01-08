<?php
session_start();
// include('authentication.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Oswald:wght@700&display=swap');

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
    html{   
        scroll-behavior: smooth;
    }
    body{
        background: #bf1807;
    }
    .box{
    width: 100%;
    padding: 2rem;
    padding-top:7rem;
    padding-left: 10%;
    padding-right: 10%;
    /* padding-left: 25rem;
    padding-right: 25rem; */
    /* border: 2px solid black; */
    /* box-shadow: 1px 2px 4px rgba(0,0,0,0.3); */
}

.page-top-2{
  background-image: url(./images/colorful-abstract-nebula-space.jpg);

    /* background-image: url(./images/background_img_6.jpg); */
  background-repeat: no-repeat;
  background-attachment:fixed;
  background-size: cover;
}

.box .headings{
    background: #f6f4f4;
    border-radius: 7px 7px 0px 0px;
    padding: 10px;
    color: rgb(243, 0, 0);
    text-align: center;
    font-size: 30px;
    font-family: 'Oswald', sans-serif;
    /* min-width: 970px; */
    width: 60%;
}

.faqs{
    padding: 0px 20px 20px;
}

.details{
    /* background: #f6f6f6; */
    /* padding: 0 16px 16px 77px; */
    border-radius: 7px;
    margin-top: 20px;
    /* margin-left: 4rem; */
    font-family: sans-serif;
    font-size: 14px;
    letter-spacing: 1px;
    /* display: flex;
    align-items: center; */
}

.add_mem_det{
    margin-top: 20px;
    text-align: center;

}

.summary{
    outline: none;
    font-size: 1.2rem;
    color: white;
    font-family: 'Montserrat', sans-serif;
    width: 25%;
    font-weight: 900;
} 
.add_mem_summary{
    outline: none;
    font-size: 1.2rem;
    color: white;
    font-family: 'Montserrat', sans-serif; 
}

.answer_text{
    width: 60%;
    height: 2rem;
    padding: 0.5rem 0.5rem 0.5rem 1rem;
    /* margin-left: 2rem; */
    border: #000000;
    border-radius: 0.6rem;
    font-size: 12px;
    font-weight: 400;
    font-family: 'Montserrat', sans-serif; 
}
.add_mem{
    font-size: 1.2rem;
}
.btnhi{
    text-align: center;
    margin: 2rem;
}

::placeholder{
    padding: 1rem;
    font-family: 'Montserrat', sans-serif;
}

@media only screen and (max-width: 824px){
    .answer_text{
        width: 100%;
    }

    .details{
        width: 80%;
    }
    .box .headings{
        width: 80%;
    }
}


</style>
<body class="page-top-2">
    <!-- Navigation bar starts -->
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
    <!-- Navigation bar ends  -->

    <center>
    <form action="store_details.php" class="box" method="post" id="registration-form" >
            <?php 
                   if(isset($_SESSION['status'])&& $_SESSION['status'] !='')
                {?>

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><?php echo $_SESSION['status']; ?></strong>  
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                       unset($_SESSION['status']);
                   }
                ?>
        <p class="headings">REGISTRATION FORM</p>
        <!-- <div class="faqs"> -->
             <div class="details">
                 <input type="text" name="team_name" id="team_name" placeholder="Team Name" class="answer_text" required>
            </div>
            <div class="details">
                <input placeholder="Leader Name" name="leader_name" id="leader_name" type="text" class="answer_text" required> 
            </div>
            <div class="details">
                <input type="text" name="contact" id="contact"  class="answer_text" placeholder="Contact" required>
            </div>
            <div class="details">
                <input type="email" name="email" id="email" class="answer_text" placeholder="Leader Email" required>
            </div>
            <div class="details">
                <input type="password" name="password" id="password" class="answer_text" placeholder="Password" required>
            </div>
            <div class="details">
                <input type="password" class="answer_text" name="cpassword" id="cpassword" placeholder="Confirm Password" required> 
            </div>
            <div class="details"> 
                <select id="sector" name="sector" type="text" class="answer_text sector" required>
                    <option value="">Select Sector</option>
                    <option value="Technology">Technology</option>
                    <option value="E-Commerce">E-Commerce</option>
                    <option value="Healthcare">Healthcare</option>
                    <option value="Education">Education</option>
                    <option value="Energy">Energy</option>
                    <option value="Transportation">Transportation</option>
                    <option value="Agriculture">Agriculture</option>
                    <option value="Web3">Web3</option>
                    <option value="Other">Other</option>
                </select> 
            </div>

            <div class="details">
                <input type="text" name="other" id="other" class="answer_text hidden" placeholder="Name your sector">
            </div>

            <div class="details" > 
                <select id="size" name="size" class="answer_text size" required>
                    <option value="">No of Team Members</option>
                    <option value="0">None</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

                <div class="hidden details" id="hidden1">
                    <input type="text" class="answer_text" name="name1" placeholder="Member 1 Name">
                    <input type="text" class="answer_text my-2" name="email1" placeholder="Member 1 Email">
                    <input type="text" class="answer_text" name="contact1" placeholder="Member 1 Contact No.">
                        
                </div>

                <div class="hidden details" id="hidden2">
                    <input type="text" class="answer_text" name="name2" placeholder="Member 2 Name">
                    <input type="text" class="answer_text my-2" name="email2" placeholder="Member 2 Email">
                    <input type="text" class="answer_text" name="contact2" placeholder="Member 2 Contact No.">
                </div>

                <div class="hidden details" id="hidden3">
                    <input type="text" class="answer_text" name="name3" placeholder="Member 3 Name">
                    <input type="text" class="answer_text my-2" name="email3" placeholder="Member 3 Email">
                    <input type="text" class="answer_text" name="contact3" placeholder="Member 3 Contact No.">
                </div>

                <div class="hidden details" id="hidden4">
                    <input type="text" class="answer_text" name="name4" placeholder="Member 4 Name">
                    <input type="email" class="answer_text my-2" name="email4" placeholder="Member 4 Email">
                    <input type="text" class="answer_text" name="contact4" placeholder="Member 4 Contact No.">
                </div>


            <div class="btnhi">
            <button type="submit" name="submit"  class="register button-24" role="button">REGISTER</button>
            </div>
        </form>
      </div>
    </center>
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="savy.min.js"></script>
  <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
<script>
    $('.sector').change(function(){
            var response = $(this).val();
            if(response == "Other"){
                $('#other').removeClass("hidden");
                $('#other').addClass("show"); 
            }
            else{
                $('#other').removeClass("show");
                $('#other').addClass("hidden"); 
            }
    })
</script>
<script>
    $('.size').change(function(){
            var response = $(this).val();
            if(response == 0){
                $('#hidden1').removeClass("show");
                $('#hidden1').addClass("hidden"); 
                $('#hidden2').removeClass("show");
                $('#hidden2').addClass("hidden");
                $('#hidden3').removeClass("show");
                $('#hidden3').addClass("hidden");
                $('#hidden4').removeClass("show");
                $('#hidden4').addClass("hidden");
            }
            else if(response == 1){
                $('#hidden1').removeClass("hidden");
                $('#hidden1').addClass("show"); 
                $('#hidden2').removeClass("show");
                $('#hidden2').addClass("hidden");
                $('#hidden3').removeClass("show");
                $('#hidden3').addClass("hidden");
                $('#hidden4').removeClass("show");
                $('#hidden4').addClass("hidden");
            }
            else if(response == 2){
                $('#hidden1').removeClass("hidden");
                $('#hidden1').addClass("show"); 
                $('#hidden2').removeClass("hidden");
                $('#hidden2').addClass("show"); 
                $('#hidden3').removeClass("show");
                $('#hidden3').addClass("hidden");
                $('#hidden4').removeClass("show");
                $('#hidden4').addClass("hidden");
            }
            else if(response == 3){
                $('#hidden1').removeClass("hidden");
                $('#hidden').addClass("show"); 
                $('#hidden2').removeClass("hidden");
                $('#hidden2').addClass("show");
                $('#hidden3').removeClass("hidden");
                $('#hidden3').addClass("show");
                $('#hidden4').removeClass("show");
                $('#hidden4').addClass("hidden");
            }
            else if(response == 4){
                $('#hidden1').removeClass("hidden");
                $('#hidden1').addClass("show"); 
                $('#hidden2').removeClass("hidden");
                $('#hidden2').addClass("show"); 
                $('#hidden3').removeClass("hidden");
                $('#hidden3').addClass("show");
                $('#hidden4').removeClass("hidden");
                $('#hidden4').addClass("show");
            }
        });
</script>
    
</body>
</html>
