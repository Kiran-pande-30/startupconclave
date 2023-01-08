<?php
session_start();
if (isset($_SESSION['auth'])){
    $_SESSION['status'] = "You are already logged in";
    header('LOCATION:Questionaire.php');
    exit(0);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    /* padding: 2rem; */
    padding-top: 7rem ;
    padding-bottom: 2rem;
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
    margin-top: 50px;
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

.summary{
    outline: none;
    font-size: 1.2rem;
    color: white;
    font-family: 'Montserrat', sans-serif;
    width: 27%;
    font-weight: 900;

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

    <center>
    <form class="box" action="login_validation.php" method="post">
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
        <p class="headings">LOGIN </p>
        <div class="faqs">
            <div class="details">
                <input type="text" class="answer_text" name="email" id="email" placeholder="Leader Email" required> 
            </div>
            <div class="details">
                <input type="password" name="password" id="password" class="answer_text" placeholder="Password" required>
            </div>
        </div>
        <div class="btnhi">
        <button class="register button-24" type="submit" name="login_submit" role="button">LOGIN</button>
        </div>
      </form>
    </center>

    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="savy.min.js"></script>
  <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
