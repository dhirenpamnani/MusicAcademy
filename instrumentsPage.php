<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/navFoot.css">
    <link type="text/css" rel="stylesheet" href="assets/css/lib/adp.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.4.1-web/css/all.css">
    <link rel="stylesheet" href="assets/css/insturmentsPage.css">
    
    <title>Instruments</title>
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
                <span id="open" class="open" onclick="opennav()">&weierp;</span>
        </div>
    </header>
    
    <div>
        <h1>Instruments</h1>
    </div>
        <div class="container">   
            <div class="content">
                <h3>
                    <a href = "pianopage.php" class = "myButton" >Piano</a>
                </h3>
                
                <img src="assets/images/pianoVec.svg">
            </div>
            
            <div class="content">
                <h3>
                <a href = "violin.php" class = "myButton" >Violin</a></h3>
                
                <img src="assets/images/violinVec3.svg">
            </div>
            <div class="content">
                <h3>
                    <a href = "guitar.php" class = "myButton" >Guitar</a>
                </h3>
                
                <img src="assets/images/guitarVec.svg">
            </div>
            <div class="content">
                <h3>
                    <a href = "piano.php" class = "myButton" >Bongos</a>
                </h3>
                
                <img src="assets/images/bongoVec.svg">
            </div>
            <div class="content">
                <h3>    
                    <a href = "piano.php" class = "myButton" >Clarinet</a>
                </h3>
                
                <img src="assets/images/clarinetVec.svg">

            </div>
            <div class="content" style="margin-bottom:25px">
                <h3>
                    <a href = "flute.php" class = "myButton" >Flute</a>
                </h3>
               
                <img src="assets/images/fluteVec.svg">

            </div>
        
        
          
        
            
        </div>
    
    
    
    
    
    
    <br>
    <br>
    <br>
    
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
    
    
    
    
    
    
    
    
    
    <!--Scripts-->
    
    <script type="text/javascript" src="assets/js/lib/adp.js"></script>
    <script type="text/javascript" src="assets/js/navFoot.js"></script>
    
</body>
</html>