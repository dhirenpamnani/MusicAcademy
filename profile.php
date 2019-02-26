<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    
     <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.4.1-web/css/all.css">
   <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/navFoot.css">
  <title>Profile</title>
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

  <?php
                    $host='localhost';
                    $username='root';
                    $password='';
                    $servername='music_academy';

                    $conn = mysqli_connect($host, $username, $password,$servername);


                    $user=$_SESSION['username'];
                    $cid=1;
                    $s = " select * from student where username='$user'  ";

                    $result = $conn->query($s);

                    $row = mysqli_fetch_row($result);
    
        $count=0;
        if($row[8]==1)
            $count=1;
        if($row[9]==1)
            $count=2;
        if($row[10]==1)
            $count=3;
    
        ?>
  
  <div id="w">
        <div id="content">
        <h1><?php echo $row[5]  ?> Profile </h1>
            <section id="settings" >
            <p class="setting"><span>E-mail Address </span> <?php echo $row[4]  ?> </p>
            <p class="setting"><span>Name</span> <?php echo $row[1]  ?> </p>
            <p class="setting"><span>Gender</span> <?php echo $row[3]  ?> </p>
            <p class="setting"><span>Number Of Courses</span> <?php echo $count  ?> </p>
            <p class="setting"><span>Date Of Birth</span> <?php echo $row[7]  ?> </p>
            </section>
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