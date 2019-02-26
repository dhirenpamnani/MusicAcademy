
    <?php
            session_start();
			$host='localhost';
			$username='root';
			$password='';
			$servername='music_academy';

			$conn = mysqli_connect($host, $username,$password,$servername);

			$username =mysqli_real_escape_string($conn,$_POST["username"] ); 
	        $password =mysqli_real_escape_string($conn,$_POST["password"] );
    

            $s = "SELECT * FROM student where username='$username' and password='$password'" ;
            $result = $conn->query($s);
            
            $row = mysqli_fetch_row($result);
            $_SESSION['username']=$row[5];
            if ($row)
            {
                header ("location:courses.php" );
                
            }
            else 
            {
               // echo "<script> alert('Login Failed') </script>";
                echo "<script>alert('Login Failed! Invalid Username or Password'); window.location.href='signInUp.php';</script>";
            }
            
    ?>
    
    
