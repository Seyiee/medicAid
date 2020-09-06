<?php
      $connection= mysqli_connect("localhost","medicaidc_covid19","Forgetit1","medicaidc_covid19");
    
    session_start();

    $url= "https://covid19.medicaidradiology.com/form/".$_SESSION["url"];
    $_SESSION["email"];
    $_SESSION["phone"];
    $_SESSION["fullname"];
    $_SESSION["bookingdate"];
    $_SESSION["no_of_tests"];
    
 

     
     
    if(isset($_SESSION["email"])){
				        $name =  $_SESSION["fullname"];
					$email_address =  $_SESSION["email"];
					$subject = 'NEW PCR TEST DETAILS';
					$phone =  $_SESSION["phone"];
					$dates =    $_SESSION["bookingdate"];
					$tests = $_SESSION["no_of_tests"];			
						
					// Create the email and send the message
					$to = $_SESSION["email"]; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
					
					$email_body = "We have received your PCR Test Request.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\n Phone Number:$phone\n\n Number of Tests:$tests \n\n Booking Date: $dates \n\nThis Message was generated automatically from your website";
					$headers = "From: noreply@medicaidradiology.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
					$headers .= "Reply-To: $email_address";	
					if(mail($to,$subject,$email_body,$headers)){
						//echo "<div class='alert alert-success'> Message Sent Successfully. Thank you.</div>";
					} else{
						//echo "<div class='alert alert-success'>Message sending error, please try again</div>";
					}

			}
			
			if(isset($_SESSION["email"])){
				        $name =  $_SESSION["fullname"];
					$email_address =  $_SESSION["email"];
					$subject = 'NEW PCR TEST DETAILS';
					$phone =  $_SESSION["phone"];
					$dates =    $_SESSION["bookingdate"];
					$tests = $_SESSION["no_of_tests"];			
						
					// Create the email and send the message
					$to = 'info@medicaidradiology.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
					
					$email_body = "We have received a new PCR Test Request.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\n Phone Number:$phone\n\n Number of Tests:$tests \n\n Booking Date: $dates \n\nThis Message was generated automatically from your website";
					$headers = "From: noreply@medicaidradiology.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
					$headers .= "Reply-To: $email_address";	
					if(mail($to,$subject,$email_body,$headers)){
						//echo "<div class='alert alert-success'> Message Sent Successfully. Thank you.</div>";
					} else{
						//echo "<div class='alert alert-success'>Message sending error, please try again</div>";
					}

			}
			$veh_id = $_SESSION["phone"];

    $sql= "SELECT DISTINCT id FROM `form` WHERE phone='$veh_id' "; 
    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

?>
 
            
        
<!doctype html>
<html lang="en">
	<head>
		<style>
			/* CSS comes here */
			body {
			    padding:20px;
			}
			input {
			    padding:5px;
			    background-color:transparent;
			    border:none;
			    border-bottom:solid 4px #8c52ff;
			    width:250px;
			    font-size:16px;
			}
			
			.qr-btn {
			    background-color:#8c52ff;
			    padding:8px;
			    color:white;
			    cursor:pointer;
			}
		</style>
		
		<title>THANK YOU FOR YOUR ORDER</title>
	</head>
	<body>
        <center>
        <img src="assets/images/logo.jpg" class="logo-icon" alt="logo icon" " style="width: 20%"><br>
        <h3 style="text-align: center;">Dear <?php echo $_SESSION["fullname"]; ?>, Your details have been received </h3>
         <h3 style="text-align: center; ">File Number: <?php echo "MRD/COV/00".$row['id']; ?></h3>
        <h3 style="text-align: center;">Booking Date: <?php echo  $_SESSION["bookingdate"]; ?></h3>
        <h3 style="text-align: center;">No of Tests: <?php echo  $_SESSION["no_of_tests"];?></h3>
        <br>
        <p id="qr-result">Please Print this Page or Take a Screen Shot of the QRCode as It will be Used to verify your Identity</p>
        <canvas id="qr-code"></canvas>
        
        </center>
		
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
		<script>
			/* JS comes here */
           
			var qr;
			(function() {
                    qr = new QRious({
                    element: document.getElementById('qr-code'),
                    size: 200,
                    value: 'https://studytonight.com'
                });
            })();
            
            function generateQRCode() {
                var qrtext = '<?php echo $url; ?>';
                
                qr.set({
                    foreground: 'black',
                    size: 200,
                    value: qrtext
                });
            }
            
             window.addEventListener('load', function () {
 generateQRCode();
                
})
		</script>
        
	</body>
</html>