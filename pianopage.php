<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/navFoot.css">
     <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.4.1-web/css/all.css">
    <link rel ="stylesheet" href="assets/css/pianopage.css">
  <title>Piano </title>
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
    
<div style="background-color: #DCD0C0">
				<p><img src="assets/images/piano5.jpg" align="left"><h1 id="title"><b>PIANO</b></h1><br><p  id="para"> The piano may be the best known and loved of all musical instruments. It also has the broadest range of any instrument, so music for all other instruments can be composed on it. It can be played solo, but most other instruments, including the voice, use the piano for accompaniment. Technically, the piano may also be the most complicated musical instrument with over 2,500 parts..<br><br><br>The piano is a stringed instrument. Its many parts are organized into 5 general structural and mechanical areas of either grand or vertical pianos. These are: the case of the wing shaped grand piano or the cabinet of the vertical or upright piano the soundboard and the ribs and bridges that are its components the cast iron plate, the strings and, collectively, the keys, hammers, and piano action or mechanism. The case has many structural parts for attaching legs and tuning pins, but perhaps the rim and the keybed or shelf where the keys and piano action will be installed are most important. The soundboard tunes the vibrations of the strings, which are transmitted through bridge<br><br>
					 <h4 style="text-align: center;">AUDIO OF PIANO BEING PLAYED </h4>
		            <audio controls >
		              <source src="assets/audio/piano.mp3" type="audio/mpeg">
		             </audio>
		            <br>
		            <br>
		              
		            
		        </p></p>

</div>    


			<div class="row">
                
                <div class="course">
                        <div class="layerBottom">
                            <h2>Beginner</h2>
                            Complete course to master the Piano
                        </div>
                    
                        <div class="layerTop ">
                            <div class="hoverText">
                                <div class="insideText">Intermediate level course of Piano which helps you master it</div>

                                <div class="viewContainer">
                                    <a href="beginpiano.php" class="viewButton">Begin</a>
                                </div>

                            </div>
                    </div>
                </div>
                    
                <div class="course">
                        <div class="layerBottom">
                            <h2>Intermediate</h2>
                            Complete course to master the Piano
                        </div>
                        <div class="layerTop ">
                            <div class="hoverText">
                                <div class="insideText">Intermediate level course of Piano which helps you master it</div>

                                <div class="viewContainer">
                                    <a href="interpiano.php" class="viewButton">Begin</a>
                                </div>

                            </div>
                    </div>
                </div>
                        
                <div class="course">
                        <div class="layerBottom">
                            <h2>Advance</h2>
                            Complete course to master the Piano
                        </div>
                        <div class="layerTop ">
                            <div class="hoverText">
                                <div class="insideText">Intermediate level course of Piano which helps you master it</div>

                                <div class="viewContainer">
                                    <a href="advpiano.php" class="viewButton">Begin</a>
                                </div>

                            </div>
                    </div>
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