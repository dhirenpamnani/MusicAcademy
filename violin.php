<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.4.1-web/css/all.css">
    <link rel="stylesheet" href="assets/css/navFoot.css">
    <link rel="stylesheet" href="assets/css/piano.css">
  <title>Violin </title>
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
    
    
    <h1>Violin</h1>
    <div id="container">
        

        <div id="div1">

          <img class="mySlides" src="assets/images/violin1.jpg" style="width:100%">
          <img class="mySlides" src="assets/images/violin2.jpg" style="width:100%">
          <img class="mySlides" src="assets/images/violin3.jpg" style="width:100%">
          <img class="mySlides" src="assets/images/violin4.jpg" style="width:100%">

        
        </div>

        <div id="div2">
        <p>
           The violin is a bowed string instrument with four strings tuned in perfect fifths. It is the smallest and highest-pitched member of the violin family of string instruments, which also includes the viola, cello and double bass.The violin is a stringed musical instrument comprising four strings tuned a fifth apart. It is the smallest and highest-tuned member of the violin family of string instruments, which also includes the viola, cello and double bass. The lowest string (and hence the lowest note) is the G just below middle C, then in ascending order D, A and E. Sheet music for a violin almost always uses the G clef (treble clef).
            
        <br>
                <h2>Playing the Violin</h2>
            The violin is played by using the right hand to draw the bow at right angles across one of the strings, near the bridge, causing the string to vibrate. Pitch is controlled by selecting the string that the bow contacts (by altering the vertical angle of the bow), and by regulating the sounding length of that string by pressing it down onto the fingerboard with one of the fingers of the left hand.
            <br>
            <br>
            <audio controls>
  <source src="assets/audio/violin.mp3" type="audio/mpeg">
                
</audio>
            <br>
            <h4>AUDIO OF VIOLIN BEING PLAYED </h4>
            <br>
            <br>
            <h1><b>ALL ABOUT THE VIOLIN</b></h1>
            
            <br>
            <img src="assets/images/violin_fingering_chart.gif" style="width:40%">
                <h2>Violin fingering chart</h2>
            <br>
            <p>
            There are several violin finger positions one must learn. However, as a beginner, the first one you’ll need to learn is called first position. And so this is the violin fingering chart we have displayed above.
First position includes the first (or lowest)five notes that you can play on each violin string. Since violins don’t have frets or marks that show you where to put your fingers the way guitars do, one of the most challenging aspects of learning the instrument is knowing where to place your fingers.The violin fingering chart can help with this.
However, if you don’t have your finger in exactly the right spot (even if it’s just a bit off) the note can come out sounding out of tune. To help with this, some teachers favor placing finger tapes on the fingerboard that show you the proper violin finger placement.Over time, your fingers will develop something we call “muscle memory,” and eventually you’ll be able to remove the tapes and play in tune without them.  And memorizing the notes on the violin fingering chart will also aid you in learning all your first position notes.
      <br>      
            </p> 
            
        </div>

        <div class="course1">
            <p>Course 1	</p>
            <div class="middle">
                <div class="text">Course Intro</div>
            </div>

        </div>

        <div class="course1">
            <p>Course 2	</p>
            <div class="middle">
                <div class="text">Course Intro</div>
            </div>

        </div>

        <div class="course1">
            <p>Course 3	</p>
            <div class="middle">
                <div class="text">Course Intro</div>
            </div>

        </div>

    </div>
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
 
    <script type="text/javascript" src="assets/js/navFoot.js"></script>
    <script type="text/javascript" src="assets/js/violin.js"></script>
</body>
</html>