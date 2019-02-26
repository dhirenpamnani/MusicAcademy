<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/navFoot.css">
    <link type="text/css" rel="stylesheet" href="assets/css/lib/adp.css">
    <link rel="stylesheet" href="assets/css/loginSignup.css">

    <title>SignIn/SignUp</title>
    <style media="screen">
      body :required{

      }
    </style>

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

    <div id = "mainContainer">

        <div id = "Start">
            <h2>Music Academy</h2>
            <a href = "#" class = "myButton" id = "signIn">Sign In</a>
            <br>
            <a href = "#" class = "myButton" id = "signUp">Sign Up</a>
        </div>

        <div id = "SignInBlock">
            <h2>Music Academy</h2>
            <h3>Sign In</h3>
            <form action="signIn.php" method="post">
                <input type="text" name="username" placeholder="Username" class = "box" required>
                <br>
                <input type="password" name="password" placeholder="Password" class = "box" required>
                <br>
                <input id = "submitButton" class = "myButton" type="submit" value="Submit">
            </form>
            <a href = "#" class = "myButton" id = "backButton">Back</a>
        </div>


        <div id = "SignUpBlock">
            <h2>Music Academy</h2>
            <h3>Sign Up</h3>
            <form action="signUp.php" method="post">
                <label>First Name And Last Name</label>
                <br><br>
                <input type="text" name="firstName" placeholder="Your First Name" class = "box" required onkeypress="return (event.charCode > 64 &&
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  autocomplete="off">
                <input type="text" name="lastName" placeholder="Last Name" class = "box" required onkeypress="return (event.charCode > 64 &&
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  autocomplete="off">
                <br>
                <label>Gender</label>
                <br><br>
                <input type="radio" name="gender" value="male" > Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other
                <br><br>
                <label>Email</label>
                <br><br>
                <input type="email" name="emailaddress" placeholder="Email Address" class = "box" required  autocomplete="off">
                <br>
                <label>Username</label>
                <br><br>
                <input type="text" name="userName" placeholder="What should we call you?" class = "box" required  autocomplete="off">
                <br>
                <label>Password</label>
                <br><br>
                <input type="password" name="password" id = "pwd" placeholder="Password" class = "box" required minlength="6" oninvalid="this.setCustomValidity('Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters')" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" onclick="clearInterval(tim);">
                <input type="password" name="repeatPassword" id = "rpwd" placeholder="Re-Enter Password" class = "box" required onclick="clearInterval(tim)">
                <br>
                <label>Date Of Birth</label>
                <br><br>
                <input type="date" name="bday" class = "box" required>
                <br>
                <label class="label_class" for="txt1">Where do you live ?</label>
                <br>
                <br>
                <input type="text" id="txt1" class = "box" name="txt1" onkeyup="showHint(this.value)" pattern="[a-z]{1,15}" placeholder="Enter your City name"  required maxlength="25"  autocomplete="off" onclick="tim = setInterval(Validate,1000)">
				            <p>Suggestions: <span id="txtHint"></span></p>
                <br>
                <label>Do you agree to terms and conditions?</label>
                <input type="checkbox" name="termsConditions" value="TandC" class = "box" required/>
                <br><br>
                <input id = "submitButton" class = "myButton" type="submit" value="Sign Up">
            </form>
            <a href = "#" class = "myButton" id = "backButton">Back</a>
        </div>
    </div>



    <!--Scripts-->
    <script>
      function showHint(str) {
        var xhttp;
        if (str.length == 0) {
          document.getElementById("txtHint").innerHTML = "";
          return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
              }
      };
        xhttp.open("GET", "gethint.php?q="+str, true);
        xhttp.send();
      }


      function Validate() {
        var password = document.getElementById("pwd").value;
        var confirmPassword = document.getElementById("rpwd").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
        }
        else{
          clearInterval(tim);
    }
  }


    </script>
    <script type= "text/javascript" src="assets/js/signInUp.js"></script>
    <script type="text/javascript" src="assets/js/lib/adp.js"></script>
    <script type="text/javascript" src="assets/js/navFoot.js"></script>

</body>
</html>
