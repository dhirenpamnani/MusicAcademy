
    <?php
			$host='localhost';
			$username='root';
			$password='';
			$servername='music_academy';

			$conn = mysqli_connect($host, $username,$password,$servername);

			$fname =mysqli_real_escape_string($conn,$_POST["firstName"] );
            $lname =mysqli_real_escape_string($conn,$_POST["lastName"] );
            $gender =mysqli_real_escape_string($conn,$_POST["gender"] );
            $email =mysqli_real_escape_string($conn,$_POST["emailaddress"] );
            $username =mysqli_real_escape_string($conn,$_POST["userName"] );
            $password =mysqli_real_escape_string($conn,$_POST["password"] );
            $DOB =mysqli_real_escape_string($conn,$_POST["bday"] );


            $s = " insert into student
            (fname,lname,gender,email,username,password,DOB ) 
            values('$fname','$lname','$gender','$email','$username','$password','$DOB') " ;

            $result = $conn->query($s);

            if ($result== TRUE)
            {
               
                header ("location:signInUp.php" );
            }
            else
            {
                echo "<script>alert('Sign Up Failed'); window.location.href='signInUp.php';</script>";
            }
    ?>
    
    
