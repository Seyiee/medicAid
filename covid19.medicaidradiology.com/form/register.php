<?php
include("connection.php");
session_start();

if(isset($_POST['signup']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pword=$_POST['password'];
    $pass= md5($pword);
    

    $msg=mysqli_query($con,"INSERT INTO `users`(`fname`, `lname`, `email`, `password`) values('$fname','$lname','$email','$pass')");
$_SESSION['msg']="Client Details Upload successfully";
}
if(isset($_POST['signup']))
{
       $extra="login.php";
     
        echo "<div class='alert alert-success' style='z-index: 10; text-align: center; font-weight: 500;'>User Created Successfully</div>";
        echo "<script>window.location.href='".$extra."'</script>";
}


?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/dashtreme-free/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Mar 2020 11:29:09 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Register New safety Officer</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme7">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

	<div class="card card-authentication1 mx-auto my-4">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/logo-icon.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Register New User</div>
		    <form action="" method="post">
			 <div class="form-group">
			  <label for="exampleInputName" class="sr-only">First Name</label>
			   <div class="position-relative has-icon-right">
				  <input type="text"  name="fname" id="fname" class="form-control input-shadow" placeholder="Enter Your First Name">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
             <div class="form-group">
			  <label for="exampleInputName" class="sr-only">Last Name</label>
			   <div class="position-relative has-icon-right">
				  <input type="text"  name="lname" id="lname" class="form-control input-shadow" placeholder="Enter Your Last Name">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			 <div class="form-group">
			   <label for="exampleInputPassword" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" name="password" id="password" class="form-control input-shadow" placeholder="Choose Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			 <div class="form-group">
			  <label for="exampleInputEmail" class="sr-only">Email Address</label>
			   <div class="position-relative has-icon-right">
				  <input type="text"  name="email" id="email" class="form-control input-shadow" placeholder="Enter Your Email Address">
				  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>
				  </div>
			   </div>
			  </div>
			   
			  
			
			 <input  name="signup"  class="btn btn-light btn-block waves-effect waves-light" value="Sign Up" type="submit">
                                    
			
			 </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Already have an account? <a href="login.html"> Sign In here</a></p>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
	
	</div><!--wrapper-->
	
    <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Thank you </h4>
      </div>
      <div class="modal-body">
          <p>Thanks for getting in touch!</p>                     
      </div>    
    </div>
  </div>
</div>
    
    <style>

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 66; /* Sit on top */
  padding-top: 200px; /* Location of the box */
  left: 0;
  top: 0;
  width: 35%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  margin-left: 35%
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
    animation-name: animatetop;
  animation-duration: 0.7s
}

/* The Close Button */
.close {
  color:#7C44C1;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #7C44C1;
  text-decoration: none;
  cursor: pointer;
}
    @keyframes animatetop {
  from {left: -300px; opacity: 0}
  to {left: 0; opacity: 1}
}
</style> 
   <!-- End Modal-->
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <script >

$(document).ready(function () {
 
window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 3000);

});
</script>
</body>

<!-- Mirrored from codervent.com/dashtreme-free/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Mar 2020 11:29:09 GMT -->
</html>
