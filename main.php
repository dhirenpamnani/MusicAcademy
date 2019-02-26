<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Music Academy</title>
    <link rel="stylesheet" href="assets/css/navFoot.css">
     <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.4.1-web/css/all.css">
  <link rel="stylesheet" href="assets/css/newpara.css">
</head>

<body>
    <header>
            <div class="wrapper">
                <div id="nav" class="nav">
                    <a href="#" id="close" class="close" onclick="closenav()">&lArr;</a>

                    <?php
                    session_start();

                    if(isset($_SESSION['username']))
                    {
                        $username = $_SESSION['username'] ;
                        echo ' <a href="profile.php"> '. $username. '</a>';

                    }

                    ?>
                    <a href="main.php">MUSIC ACADEMY</a>
                    <a href="FindMore.php">COURSE CATALOG</a>
                    <a href="instrumentsPage.php">INSTRUMENTS</a>


                    <?php

                    if(isset($_SESSION['username']))
                    {
                        echo ' <a href="logout.php">LOGOUT</a> ';
                    }
                    else
                    {
                        echo ' <a href="signInUp.php">LOGIN</a> ';
                    }
                        ?>
                </div>
               <b> <span id="open" class="open" onclick="opennav()">&weierp;</span> </b>
        </div>
    </header>

  <div class="pimg1">
    <div class="ptext">
      <span class="border" >
        Music Academy
      </span>
    </div>
  </div>

    <section class="section section-light">
    <h1>Welcome to The Music Academy! </h1>
    <p>
    At The Music Academy, we strive to help each individual student become the best they can be through performance, expression, ansindividuality. Our program is designed to nurture self-confidence in all of our students and produce leaders for our future.At The Music Academy, our instructors are carefully evaluated and picked before joining our staff. We look for different attributes such as competency, patience, and passion! We also understand that it is important for the instructor to be able to tailor curriculums to whats suits the individual students best. Each new student comes into our facitlty with a slightly different goal in mind. Our job is to build each student up to be the very best musician they can be, no matter what style of music they like!
  </section>

    <div class="pimg2">
    <div class="ptext">
      <span class="border trans">
        "When words fail,music speaks"
      </span>
    </div>
  </div>

    <section class="section section-dark">
    <h1>Why should you enroll in The Music Academy For learning music</h1>
    <p>
      When searching for a Music School online, you will encounter many options. We believe our school is unique in our approach to music lessons. The Music Academy was built on a foundation of passion as it pertains to teaching music and building confident leaders. It has and always will be kept in the true spirit of a family environment. Our instructors approach each day and each lesson with every individual students goals in mind and will work hard to help them achieve those goals. Every student including your child is unique in their own way. Shouldn't their lessons reflect that?
    </p>
  </section>

    <div class="pimg3">
    <div class="ptext">
      <span class="border trans">
        "To Learn music it is to learn a whole new languauge"
      </span>
    </div>
  </div>

    <section class="section section-light">
    <h1>How does Music Academy helps you?</h1>
    <p>
     The Music Academy always allows every new student to with the instructor prior to the first lesson upon request. We also offer a trial-lesson gift certificate which requires no registration fee that includes four lessons on any and all instruments of your choice. These points along with our no-contract policy is our way of saying we really do care about your decision for your childs musical development. Our instructors will always work hard to keep every student engaged and encouraged in their music lessons. Please let us know if you have any other questions about our school. We would love to have you join our family here at The Music Academy! From our family to yours, Thank you for visiting our website!
    </p>
    <a href="FindMore.php" class = "myButton">JOIN NOW!</a>
  </section>



    <footer>

        <div id = "address">
            <p>Thadomal Shahani Engineering College</p>
            <p>Khar West</p>
            <p>Mumbai</p>
            <p>Maharashtra 400050</p>
            <p><u>Subscribe To Our NewsLetter</u></p>
        </div>

        <div id= "connectUs">
            <a href="wwww.facebook.com"><i class="fab fa-facebook"></i></a>
            <a href="wwww.googleplus.com"><i class="fab fa-google-plus-square"></i></a>
            <a href="wwww.twitter.com"><i class="fab fa-twitter-square"></i></a>
        </div>

        <div id = "contactUs">
            <p>9820853716</p>
            <p>musicacademytsec@gmail.com</p> 
        </div>
    </footer>


    <script type="text/javascript" src="assets/js/navFoot.js"></script>
    </body>
    </html>
