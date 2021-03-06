<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/navFoot.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.4.1-web/css/all.css">
    <link rel="stylesheet" href="assets/css/piano.css">
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
    <h1>Piano</h1>
    <div id="container">
        

        <div id="div1">

          <img class="mySlides" src="assets/images/piano1.jpg" style="width:100%">
          <img class="mySlides" src="assets/images/piano2.jpg" style="width:100%">
          <img class="mySlides" src="assets/images/piano3.jpg" style="width:100%">
          <img class="mySlides" src="assets/images/piano4.jpg" style="width:100%">

        
        </div>

        <div id="div2">
        <p>
            The piano may be the best known and loved of all musical instruments. It also has the broadest range of any instrument, so music for all other instruments can be composed on it. It can be played solo, but most other instruments, including the voice, use the piano for accompaniment. Technically, the piano may also be the most complicated musical instrument with over 2,500 parts.<br>
            <br>
            <br>
            
            The piano is a stringed instrument. Its many parts are organized into 5 general structural and mechanical areas of either grand or vertical pianos. These are: the case of the wing shaped grand piano or the cabinet of the vertical or upright piano the soundboard and the ribs and bridges that are its components the cast iron plate, the strings and, collectively, the keys, hammers, and piano action or mechanism. The case has many structural parts for attaching legs and tuning pins, but perhaps the rim and the keybed or shelf where the keys and piano action will be installed are most important. The soundboard tunes the vibrations of the strings, which are transmitted through bridge<br> </p>
            
            <br>
            <audio controls>
  <source src="assets/audio/piano.mp3" type="audio/mpeg">
                
</audio>
            <br>
            <h4>AUDIO OF PIANO BEING PLAYED </h4>
            <br>
            <br>
            <h1><b>ALL ABOUT THE PIANO</b></h1>
            
            <p>
            If you’re just learning to Find notes on the piano keyboard, this basic piano key chart is designed for you. The chart includes naturals C, D, E, F, G, A, B, Flats and sharps. Double sharps and double Flats have been omitted, since the chart would otherwise get too confusing and do more harm than good. If you are just getting started, you might wish to start with the Piano Notes Chart… but be sure to return here!
            <br>
            </p>
            <img src="assets/images/piano_key_chart.jpg" style="width:60%">
                <h2>Piano key chart</h2>
            <br>
            <p>
            If you only learn one thing about the piano key chart, make sure it’s this: The keys are not the notes. You’ll notice that each key has two note names in the chart. In Fact, technically speaking there’s no limit to the number of notes that correspond to a given key on a piano. Hence, the 1st key in the chart could be C or B sharp, or it could be D double Flat or even A triple sharp!
<br>
    The piano would be impossible to play if it had separate keys for all the Flats, sharps, double Flats and double sharps. Therefore, each possible note in Western music corresponds to one key on a piano, and in Fact many different notes correspond to the same key. These notes called enharmonic are “close enough” in pitch that most people couldn’t detect any real changes anyway, so only a single piano key is used for all of them.
<br>
This doesn’t mean that they’re all created equal. The reason that all these notes exist which are played by only one key on a piano is that it depends on how a composer uses them. Thus, F sharp and G Flat might sound the same on a piano at least, but they can have very functions in actual music. For a very convincing demonstration, listen to the examples in the article Piano Theory.
<br>
If you’re just learning the piano keyboard, First learn the middle row of white keys C, D, E ..... These are the naturals, and they’ll serve to orient you.
Now, a sharp which looks like a pound sign: hastag means to play the next higher key. That next key can be either black or white. A Flat which looks like a lowercase ‘B’: b means to play the next lower key.Many beginners are confused by this point, as they think that a sharp or Flat means a black key. Sharps and Flats are not the black keys. All black keys are either a sharp or Flat, but not all sharps and Flats are black keys. Remember, an accidental a sharp or Flat merely means to play the next higher or lower key on a piano, and that next key may be black or white.Putting these Facts together, you can now easily Find any key on the piano! The piano key chart above will help guide you in case you get stuck
            
            
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
    <script type="text/javascript" src="assets/js/piano.js"></script>
</body>
</html>