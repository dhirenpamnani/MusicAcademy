<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/navFoot.css">
     <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.4.1-web/css/all.css">
    <link rel="stylesheet" href="assets/css/courses.css">
  <title>Popular Courses</title>
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
    
    
    <h1>Our Courses</h1>
    <div id="container"> 
        
        <div class="row">
            <div class="course">
                    <div class="layerBottom">
                        <h2>Piano</h2>
                        Complete course to master the Piano
                    </div>
                    <div class="layerTop ">
                        <div class="hoverText">
                            <div class="insideText">Intermediate level course of Piano which helps you master it</div>
                            
                            <div class="viewContainer">
                                <a href="enroll.php" class="viewButton">Enroll</a>
                            </div>
                            
                        </div>
                    </div>
            </div>
            
            <div class="course">
                <div class="layerBottom">
                        <h2>Violin</h2>
                        Complete course to master the Violin
                    </div>
                    <div class="layerTop ">
                        <div class="hoverText">
                            <div class="insideText">Intermediate level course of Violin which helps you master it</div>
                            
                          
                            <div class="viewContainer">
                                <a href="enroll.php" class="viewButton">Enroll</a>
                            </div>
                            
                        </div>
                    </div>
            </div>
            
            <div class="course">
                <div class="layerBottom">
                        <h2>Guitar</h2>
                        Complete course to master the Guitar
                    </div>
                    <div class="layerTop ">
                        <div class="hoverText">
                            <div class="insideText">Intermediate level course of Guitar which helps you master it</div>
                            
                            <div class="viewContainer">
                                <a href="enroll.php" class="viewButton">Enroll</a>
                            </div>
                            
                        </div>
                    </div>
            
            </div>
        
        </div>
    
    <div class="row">
            <div class="course">
                <div class="layerBottom">
                        <h2>Bongos</h2>
                        Complete course to master the Bongos
                    </div>
                    <div class="layerTop ">
                        <div class="hoverText">
                            <div class="insideText">Intermediate level course of Bongos which helps you master it</div>
                           
                            <div class="viewContainer">
                                <a href="enroll.php" class="viewButton">Enroll</a>
                            </div>
                            
                        </div>
                    </div>
            </div>
            
            <div class="course">
                <div class="layerBottom">
                        <h2>Clarinet</h2>
                        Complete course to master the Clarinet
                    </div>
                    <div class="layerTop ">
                        <div class="hoverText">
                            <div class="insideText">Intermediate level course of Clarinet which helps you master it</div>
                           
                            <div class="viewContainer">
                                <a href="enroll.php" class="viewButton">Enroll</a>
                            </div>
                            
                        </div>
                    </div>
            </div>
            
            <div class="course">
                <div class="layerBottom">
                        <h2>Flute</h2>
                        Complete course to master the Flute
                    </div>
                    <div class="layerTop ">
                        <div class="hoverText">
                            <div class="insideText">Intermediate level course of Flute which helps you master it</div>
                            
                            <div class="viewContainer">
                                <a href="enroll.php" class="viewButton">Enroll</a>
                            </div>
                           
                        </div>
                    </div>
            
            </div>
        
        </div>
    
    <div class="ButtonContainer">
        <a href="FindMore.php" id = "findMore" class="myButton">Course Catalog</a>
        <a href="signInUp.php" id = "signUp" class="myButton">Sign UP</a>
    </div>
       
        
</div>
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