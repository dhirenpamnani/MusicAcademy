<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/navFoot.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.4.1-web/css/all.css">
    <link rel="stylesheet" href="assets/css/piano.css">
  <title>Guitar </title>
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
    <h1>Guitar</h1>
    <div id="container">
        

        <div id="div1">

          <img class="mySlides" src="assets/images/guitar1.jpg" style="width:100%">
          <img class="mySlides" src="assets/images/guitar2.jpg" style="width:100%">
          <img class="mySlides" src="assets/images/guitar3.jpg" style="width:100%">
          <img class="mySlides" src="assets/images/guitar4.jpg" style="width:100%">

        
        </div>

        <div id="div2">
        <p>
           
            The guitar is a string instrument which is played by plucking the strings. The main parts of a guitar are the body, the fretboard, the headstock and the strings. Guitars are usually made from wood or plastic. Their strings are made of steel or nylon.

The guitar strings are plucked with the fingers and fingernails of the right hand (or left hand, for left handed players), or a small pick made of thin plastic. This type of pick is called a "plectrum" or guitar pick. The left hand holds the neck of the guitar while the fingers pluck the strings. Different finger positions on the fretboard make different notes.

Guitar-like plucked string instruments have been used for many years. In many countries and at many different time periods, guitars and other plucked string instruments have been very popular, because they are light to carry from place to place, they are easier to learn to play than many other instruments. Guitars are used for many types of music, from Classical to Rock. Most pieces of popular music that have been written since the 1950s are written with guitars.

            </p>

            <br>
            <h1><b>ALL ABOUT THE GUITAR</b></h1>
            
            <p>
           There are many different types of guitars, classified on how they are made and the type of music they are used for. All traditional types of guitar have a body which is hollow. This makes the sound of the strings louder, and gives the guitar its quality. This type of guitar is called "acoustic". (An acoustic instrument is one that makes its own dynamics.)

From the 1930s, people started making and playing guitars that used electricity and amplifiers to control the loudness. These guitars, which are often used in popular music, are called electric guitars. They do not need to have a hollow body. This is because they do not use acoustics to amplify the sound.

Most guitars have six strings, but there are also guitars with four, seven, eight, ten, or twelve strings. More strings make the instrument sound fuller. The neck of a guitar has bars or marks called frets. Frets help a guitarist know where to put his or her fingers to get the right pitch when playing.
            <br>
            </p>
            <img src="assets/images/guitarnotes.gif" style="width:60%">
                <h2>Guitar fingering chart</h2>
            <br>
            <p>
            Guitar strings are numbered from top E to bottom E as shown below:<br>
<br>
Top E: 1st string<br>
B: 2nd string<br>
G: 3rd string<br>
D: 4th string<br>
A: 5th string<br>
Bottom E: 6th string<br>
            
   <br>             
There are six strings on a guitar. Each string has a name AND a number.
The thickest string is called the 6th string. In standard guitar tuning, this is tuned to E. We often refer to this as the ‘low E string‘. This is the deepest/lowest guitar note you can play.<br>
The 5th string is tuned to A, so it’s usually referred to as the A string.
The 4th string is tuned to D, so it’s usually referred to as the D string.
The 3rd string is tuned to G, so it’s usually referred to as the G string.
The 2nd string is tuned to B, so it’s usually referred to as the B string.
The 1st string is tuned to E. This is the thinnest of all the strings. We often refer to this as the ‘high E string’.
                
<br>
Understanding guitar notes & the musical alphabet
Guitar notes are the same as violin notes and piano notes. (The musical alphabet is the same across all instruments.)
I’ve always found it a bit odd how many musicians don’t know their musical alphabet. After all, the normal alphabet has 26 letters and the musical alphabet only has 12 notes.
<br>
The normal alphabet goes from A to Z.
The musical alphabet goes from A to G.
However, we have to remember our sharps and flats which appear between most (though not all) of the letters.
<br>
The musical alphabet (and hence, order of guitar notes) looks like this:
<br>
A, A#, B, C, C#, D, D#, E, F, F#, G, G#, A.
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
    <script type="text/javascript" src="assets/js/piano.js"></script>
</body>
</html>