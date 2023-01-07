<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>QUESTIONNAIRE</title>
</head>
<style>

   @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Oswald:wght@700&display=swap');

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-weight: 200
    }
    html{   
        scroll-behavior: smooth;
    }
    body{
        /* background: #bf1807; */
        background-image: url(./images/colorful-abstract-nebula-space.jpg);
        background-repeat: no-repeat;
        background-attachment:fixed;
        background-size: cover;
    }
    .box{
        /* background-color: rgb(0 0 0 / 30%);
        backdrop-filter: blur(10px); */
        text-align: left;
        /* padding-left: 20rem;
        padding-right: 20rem;
        padding-top: 7rem; */
        width: 70%;
        /* padding: 7rem 15rem 2rem 15rem; */
        padding-top: 12rem;
        padding-bottom: 15rem;
    /* border: 2px solid black; */
    /* box-shadow: 1px 2px 4px rgba(0,0,0,0.3); */
}

.page-top-2{
  background-image: url(./images/colorful-abstract-nebula-space.jpg);
  background-repeat: no-repeat;
  background-attachment:fixed;
  /* background-size: 100%; */
}

.box .headings{
    background: #fcfcfc;
    border-radius: 7px 7px 0px 0px;
    padding: 10px;
    color: rgb(243, 0, 0);
    text-align: center;
    font-size: 30px;
    font-family: 'Oswald', sans-serif;
    /* min-width: 970px; */
}

.faqs{
    padding: 0px 20px 20px;
}

.details{
    /* background: #f6f6f6; */
    /* padding: 0 16px 16px 77px; */
    border-radius: 7px;
    margin-top: 20px;
    font-family: sans-serif;
    font-size: 15px;
    letter-spacing: 1px;
    /* display: flex; */
    align-items: center;
}

.summary{
    outline: none;
    padding-bottom: 10px;
    font-size: 18px;
    color: white;
    font-family: 'Montserrat', sans-serif;
    width: 100%;
    font-weight: 500;

} 

.answer_text{
    width: 100%;
    /* margin: ; */
    /* height: 3.2rem; */
    padding: 0.5rem 0.5rem 0.5rem 1rem;
    /* margin-left: 2rem; */
    border: #000000;
    border-radius: 0.6rem;
    font-family: 'Montserrat', sans-serif;
    font-size: 12px;
}

.btnhi{
    text-align: center;
    margin: 2rem;
}

.u-box{
    width: 100%;
    /* background-color: #000000; */
    background-color: rgba(0, 0, 0, 0.168);
    backdrop-filter: blur(5px);
}

textarea{
    width: 100%;
    border: 2px;
    border-radius: 5px;
    font-weight: 400;
    padding: 5px;
}

@media only screen and (max-width: 768px){
    .box{
        width: 90%;
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
                <li><a href="./index.html#contact" class="link link-theme link-arrow">CONTACT US</a></li>
                <li><a href="./logout.php" class="link link-theme link-arrow">LOGOUT</a></li>
            </ul>
        </div>
    </header>


    <form action="" name="SUC-Q2023" method="post" id="ques-form">
    <center>
        <div class="u-box" >
    <div class="box">
        <p class="headings">QUESTIONNAIRE</p>
        <div class="details">
          <div class="summary">Team Name</div> 
          <input name="TeamName" id="TeamName" class="answer_text" required>
        </div>
        <!-- <div class="faqs"> -->
            <div class="details">
                <div class="summary">Is your startup is in Ideation Stage or Working Stage?</div> 
                <select name="Stage" id="Stage" type="text" class="answer_text" required>
                    <option value="Stage">Select Stage</option>
                    <option value="Ideation">Ideation Stage</option>
                    <option value="Working">Working Stage</option>
                </select> 
            </div>
            <div class="details">
                <div class="summary">What problem are you aiming to solve ?</div> 
                <textarea required name="q1" id="q1" cols="50" rows="5"  ></textarea>
            </div>
            <div class="details">
                <div class="summary">Have you researched this problem in the field? If yes, how was the response?</div> 
                <textarea name="q2" id="q2" cols="50" rows="5"  ></textarea>
            </div>
            <div class="details">
                <div class="summary">What is your target customer segment and describe your customer persona.</div>
                <textarea required name="q3" id="q3" cols="50" rows="5"  ></textarea>
            </div>
            <div class="details">
                <div class="summary">Are you providing a service or product to solve the problem? Describe the product/service.</div>
                <textarea required name="q4" id="q4" cols="50" rows="5"  ></textarea>
            </div>
            <div class="details">
                <div class="summary">What is your model for revenue generation? Explain the revenue model in brief.</div> 
                <textarea required name="q5" id="q5" cols="50" rows="5"  ></textarea>
            </div>
            <div class="details">
                <div class="summary">Who are your direct and indirect competitors in the space currently and how do you differentiate yourself from them? (Mention scope of patency or other intellectual property rights, if any) (USP)
                </div> 
                <textarea required name="q6" id="q6" cols="50" rows="5"  ></textarea>
            </div>

            <div class="details" style="text-align:center">
                <div class="summary" style="color: rgb(255, 255, 255);text-align: center; padding-top: 2px; padding-bottom: 2px; background-color: #bf1807;">Note : If your startup is in Ideation stage, just answer <b>"NA"</b> for the below given questions</div>
            </div>

            <div class="details">
                <div class="summary">What was the revenue of your startup in the last few financial years? How many services/products did you sold in each year?</div> 
                <textarea required name="q7" id="q7" cols="50" rows="5"  ></textarea> 
            </div>
            <div class="details">
                <div class="summary">From how long is your venture operational?</div> 
                <textarea required name="q8" id="q8" cols="50" rows="5"  ></textarea> 
            </div>
            <div class="details">
                <div class="summary">What marketing techniques(Channels) are you currently using to market your product/service to reach your target customers?</div> 
                <textarea required name="q9" id="q9" cols="50" rows="5"  ></textarea> 
            </div>
            <div class="details">
                <div class="summary">How much is your market traction?</div> 
                <textarea required name="q10" id="q10" cols="50" rows="5"  ></textarea>
            </div>
            <div class="details">
                <div class="summary">What growth opportunities you see for your venture? (Be specific and precise)</div> 
                <textarea required name="q11" id="q11" cols="50" rows="5"  ></textarea> 
            </div>
            <div class="details">
                <div class="summary"> Mention if you have secured funding, incubation, or enrolled in any (if any) accelerator program.</div> 
                <textarea name="q12" id="q12" cols="50" rows="5" ></textarea>
            </div>
            <div class="details">
                <div class="summary">What are the Key Activities of your business(How your business works? Give a brief explanation)</div> 
                <textarea required name="q13" id="q13" cols="50" rows="5"  ></textarea>
            </div>
            <div class="details">
                <div class="summary">How is your Relationship with Customers?(Repeating customers, Retention rate etc)
                </div> 
                <textarea required name="q14" id="q14" cols="50" rows="5"  ></textarea> 
            </div>
            <div class="details">
                <div class="summary"> Add the website link of your Startup(If any)</div> 
                <textarea name="q15" id="q15" cols="50" rows="5"  ></textarea> 
            </div>
            <div class="btnhi">
                <button  class="register button-24" type="submit" name="submit" role="button">SUBMIT</button>
            </div>
        </div>
      </div>
    </div>

    </center>
</form>

<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="savy.min.js"></script>
    <script type="text/javascript">
    $('.auto-save').savy('load',function(){
    console.log("All data from savy are loaded");
    });

    function dstry(){
    $('.auto-save').savy('destroy',function(){
        console.log("All data from savy are Destroyed");
        window.location.reload();
    });
    }
    </script>

  <script>
     const scriptURL = 'https://script.google.com/macros/s/AKfycbyRNwutw70kplWtFLvqNuZLmVC-ODrHWeNaZykTq8kLZfDXoYc4TQFyqJoIC5uqFGK2DA/exec'
            const form = document.forms['SUC-Q2023']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(window.location.href = "thanks.php")
                .catch(error => console.error('Error!', error.message))
            })
  </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
