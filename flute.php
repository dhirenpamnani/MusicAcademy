<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/navFoot.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.4.1-web/css/all.css">
    <link rel="stylesheet" href="assets/css/piano.css">
  <title>Flute </title>
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
    
    <h1>Flute</h1>
    <div id="container">
        

        <div id="div1">

          <img class="mySlides" src="assets/images/flute1.jpg" style="width:100%">
          <img class="mySlides" src="assets/images/flute2.jpg" style="width:100%">
          <img class="mySlides" src="assets/images/flute3.jpg" style="width:100%">
          <img class="mySlides" src="assets/images/flute4.jpg" style="width:100%">

        
        </div>

        <div id="div2">
        <p>
            The flute is a woodwind instrument, but modern flutes are made of metal. It was made of wood a long time ago. It doesn't need lip vibration like brass instruments
            Flute players hold it horizontally and make a sound by blowing their breath over the edge of the hole of flute's head. This makes the air vibrate. Flutes need the second most amount of air for an instrument, next to the tuba. Flautists can change the pitch by pushing buttons or changing the direction of the breath. These buttons are called keys. The breath also can change the tone or the volume. Flute has many variation of the sound. The sound of flute is high, so composers often express it as a bird. A flute matches with many instruments such as violin and piano, and is often part of an ensemble..<br>
            <br>
            <br>
            
           
Flute is a cylindrical tube made of bamboo with uniform bore and closed at one end. Flutes are of different kinds and their lengths and number of holes vary. The length can  vary from eight inches to two and a half feet. There is a mouth hole in every flute. In addition to it there are 6 to 8 holes arranged in a straight line. The range of the flute is about 21/2 octaves. Long flutes have a rich, deep and mellow tone whereas in small flutes the tone is high pitched.<br>

The flute is held in a horizontal position with a slight downward inclination. The two thumbs are used to hold the flute in position. The three fingers of the left hand, excluding the little finger and the four fingers of the right hand are used to manipulate the finger holes.<br>

The player blows into the mouth hole, thus setting in vibration, the column of air inside the tube. The lowest octave of the scale is produced by altering the effective length of the tube by covering the holes with the finger. The player can produce any interval by opening or closing the available holes with his fingers.<br>

Bamboo flutes used in the north are longer than those used in the south. South India and Bengal are popular for horizontal flute. Vertical flutes are popular in the north and the west. These are held vertically and played through a mouthpiece. There are a number of artists who have excelled in this instrument. One of the most notable flautist is Pandit Hariprasad Chaurasya.
            <br> 
            </p>
            
            <br>
            <h1><b>ALL ABOUT THE FLUTE</b></h1>
            
            <br>
            <img src="assets/images/holdflute.jpg" style="width:60%">
                <h2>How to hold a Flute</h2>
            <br>
            <p>
            Paying close attention to the position of your thumb, make sure that the inside of the first joint of your left index finger is stays in contact with the flute, and hold the flute with your fingers in their respective position!
                <br>


            <img src="assets/images/fingflute.jpg" style="width:60%">
                <h2>Producing sound</h2>
                <p>
                    Once you have mastered holding the clarinet and producing sound, try playing with the fingerings shown below.
*High D is easier to play if you release the index finger on your left hand.
Once you have learned to play the C scale, try to playing some music by sight reading.
                        
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