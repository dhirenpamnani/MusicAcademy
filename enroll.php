<?php 
    session_start();
    if(!(isset($_SESSION['username']) && $_SESSION['username'] != ''))
	{
		echo "<script>alert('Login Required'); window.location.href='signInUp.php';</script>";
		
	}
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
            $id = $row[0];
            $email= $row[4];
            if($row[8]==0)
            {
                
                $s1 = " update student set course1 = '$cid' where id='$id' ";
                $result = $conn->query($s1);
                
            }
            else if($row[8]!=0 and $row[9]==0 )
            {
                
                $s1 = " update student set course2 = '$cid' where id='$id' ";
                $result = $conn->query($s1);
                
            }
            else if($row[8]!=0 and $row[9]!=0 and $row[10]==0)
            {
                
                $s1 = " update student set course3 = '$cid' where id='$id' ";
                $result = $conn->query($s1);
                
            }
            else
            {
                echo "<script>alert('Finish Your On Going Courses'); window.location.href='courses.php';</script>";
            }
            


        //PHPMailer Object
        require 'PHPMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		$mail->isSMTP();                                   
		$mail->Host = 'smtp.gmail.com';                    
		$mail->SMTPAuth = true;                           
		$mail->Username = 'musicacademytsec@gmail.com';        //email id
		$mail->Password = 'had12345';		  //password
		$mail->SMTPSecure = 'tls';                        
		$mail->Port = 587;                                 

		$mail->addAddress($email);   		//receiver email id $email is used to store receiver email
	

		$mail->isHTML(true);  

		$bodyContent = 'Thank You for choosing Music Academy
                        You have Succeessfully Applied for the Course';
		
		$mail->Subject = 'Course Application Confirmation';
		$mail->Body    = $bodyContent;

		if(!$mail->send()) 
        {
			echo "<script>alert('Mail failed'); window.location.href='courses.php';</script>";
		} 
        else 
        {
			echo "<script>alert('Thank You ! Confirmation Mail has been Sent'); window.location.href='courses.php';</script>";
			
		}

            
?>