<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/navFoot.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.4.1-web/css/all.css">
    <link rel="stylesheet" href="assets/css/FindMore.css">
  <title>Course Catalog </title>
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

    <h1>Courses Catalog</h1>

    <div class="container">
        <div class="left">

            <a href="FindMore.php" class="SelectButtons">ALL</a>
            <form method="POST" action="FindMoreFilter.php">
              <div class="styled-select blue semi-square searchBar">
  <select name = "type1">
    <option value = "String"> String </option>
    <option value = "Wind" > Wind</option>
    <option value = "Percussion" > Percussion </option>
  </select>
              </div>
              <input type="submit" value="Search" class = "SelectButtons" >
            </form>

            <br>
            <a href="courses.php" class="SelectButtons">EXPLORE NOW!</a>
        </div>

        <div class="right">

        <?php
			$host='localhost';
			$username='root';
			$password='';
			$servername='music_academy';

			$conn = mysqli_connect($host, $username, $password,$servername);

            $type =mysqli_real_escape_string($conn,$_POST["type1"] );

			$s = " select * from course where c_type='$type' ";


			$result = $conn->query($s);
			if ($result->num_rows > 0)
				{
                    echo "<table> ";
                    while($row = $result->fetch_assoc())
                    {
                    ?>
                    <tr>
                       <div class="course">

                           <div class="innerLeft">
                               <img src="assets/images/<?php echo $row['c_image'] ?>" >

                            </div>

                                 <div class="innerRight">
                                    <h2> <?php echo $row["c_instrument"] ?> </h2>

                                    <?php echo $row["c_content"] ?>

                                     <h3>Level : <?php echo $row["c_level"] ?>  </h3>

                              </div>



                           </div>

                         </tr>
                   <?php
                    }


                     echo "</table> ";
            }

                $conn->close();
        ?>

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
