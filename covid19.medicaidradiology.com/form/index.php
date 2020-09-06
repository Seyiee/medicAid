<?php
    $connection= mysqli_connect("localhost","root","","vehicle_management");
    
    session_start();

    $veh_id= $_GET['busid']; 

    $sql= "SELECT * FROM `form` WHERE veh_id='$veh_id' or veh_reg='$veh_id'"; 
    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

    
?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/dashtreme-free/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Mar 2020 11:19:58 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title></title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.html" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
    <style>
		@CHARSET "UTF-8";
		.page-break {
			page-break-after: always;
			page-break-inside: avoid;
			clear:both;
		}
		.page-break-before {
			page-break-before: always;
			page-break-inside: avoid;
			clear:both;
		}
	</style>
 </head>

<body class="bg-theme bg-theme5">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <h5 class="logo-text">Hi, <?php echo  $_SESSION['fname'].' '.$_SESSION['lname'];?></h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header"></li>
      <li>
        <a href="index.html">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      

      <li>
        <a href="forms.php">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
        </a>
      </li>

      <li>
        <a href="tables.html">
          <i class="zmdi zmdi-grid"></i> <span>Tables</span>
        </a>
      </li>

      <li>
        <a href="calendar.html">
          <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
          <small class="badge float-right badge-light">New</small>
        </a>
      </li>

      <li>
        <a href="profile.html">
          <i class="zmdi zmdi-face"></i> <span>Profile</span>
        </a>
      </li>

      <li>
        <a href="login.html" target="_blank">
          <i class="zmdi zmdi-lock"></i> <span>Login</span>
        </a>
      </li>

       <li>
        <a href="register.html" target="_blank">
          <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
        </a>
      </li>
	  
	 
     
    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i></a>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-bell-o"></i></a>
    </li>
     <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="assets/images/avatars/avatar-13.png" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-13.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Hi, <?php echo  $_SESSION['fname'].' '.$_SESSION['lname'];?></h6>
            <p class="user-subtitle"> <?php echo  $username;?></p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->
        <center>
            <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <form id="myform" style="text-align: left;">
                                    <div class="row">
                                         <div class="form-group col-lg-12">
                                    <label for="input-2">Project</label>
                                   <select  id="project" name="project" class="form-control ">
                                       <?php
                                      $user_query = mysqli_query($con,"select distinct project_name from performance_report")or die(mysql_error());
													while($row = mysqli_fetch_array($user_query)){
													
													?>
                                        <option value='<?=$row['project_name'];?>'><?=$row['project_name'];?></option>
                                          <?php } ?>
                                       
                                    </select> 
                                            
                                   </div>
                                       
                                     <div class="form-group col-lg-6">
                                    <label for="input-1">Start Date</label>
                                    <input type="date" class = "form-control" placeholder = "Start"  id = "date1">
                 
                                   </div>
                                        
                                    <div class="form-group col-lg-6">
                                    <label for="input-1">End Date</label>
                                    <input type = "date" class = "form-control" placeholder = "End"  id = "date2"/></div>  
                                    </div>
                                         
                                   <center>
                                    <div class="row">
                                       <div class="form-group col-lg-4">
                                       <button type = "button" class = "btn btn-primary" id = "btn_search">SEARCH</button> 
                                    </div>   
                                    <div class="form-group col-lg-4">
                                       <button type = "button" class = "btn btn-primary" id = "reset">RESET</button> 
                                    </div>
                                    <div class="form-group col-lg-4">
                                       <button type = "button" class = "btn btn-primary" id = "print" onclick="javascript:window.print()">EXPORT PDF</button> 
                                    </div>
                                    </div>
                                    
                                    </center>
                                   
                                </form>
                                    </div></div></div>
</center>
        
      
			
	  
	<div class="row">
    			
     <div class="col-12 col-lg-12 col-xl-12">
        <div class="card" id="myCanvas">
           <div class="card-header">Performance Report 
             <div class="card-action">
             </div>
           </div>
          <br /><br />
			<div class = "table-responsive">	
				<table class = "table table-bordered alert-warning">
					<thead>
						<tr>
							<th style = "width:5%;">PROJECT NAME</th>
							<th style = "width:10%;">REPORTER NAME</th>
							<th style = "width:10%;">LOCATION</th>
							<th style = "width:10%;">HOURS WORKED</th>
							<th style = "width:10%;">MANPOWER</th>
                            	<th style = "width:10%;">TOOLBOX_MEETINGS</th>
                            <th style = "width:10%;">PRETASK MEETINGS</th>
							<th style = "width:10%;">HSE MEETINGS</th>
							<th>FATALITIES</th>
							<th style = "width:10%;">DATE PUBLISHED</th>
						</tr>
					</thead>
					<tbody id = "load_data">
						<?php
                        
							$conn = new mysqli("localhost", "root", "", "hsereports");
							if(!$conn){
								die("Fatal Error: Connection Error!");
							}
							
							$q_book = $conn->query("SELECT * FROM performance_report ") or die(mysqli_error());
							while($f_book = $q_book->fetch_array()){
						?>
                        
                        <tr>
                            <td><?php echo $f_book['project_name']?></td>
                            <td><?php echo $f_book['reporter']?></td>
                            <td><?php echo $f_book['location']?></td>
                            <td><?php echo date("m/d/Y", strtotime($f_book['date']))?></td>
	                   </tr>   
						
						<?php
							}
						?>
					</tbody>
				</table>
			</div>	
		
         </div>
     </div>
         <div class="col-5 col-lg-5 col-xl-5">
        <div class="card" id="myCanvas">
           <div class="card-header">Weather Report
             <div class="card-action">
             </div>
           </div>
          <br /><br />
			<div class = "table-responsive">	
				<table class = "table table-bordered alert-warning">
					<thead>
						<tr>
							<th style = "width:5%;">RAIN</th>
							<th style = "width:10%;">TIME   </th>
							<th style = "width:10%;">DURATION</th>
							<th style = "width:10%;">DATE</th>
							
						</tr>
					</thead>
					<tbody id = "load_data2">
						<?php
                        
							$conn = new mysqli("localhost", "root", "", "hsereports");
							if(!$conn){
								die("Fatal Error: Connection Error!");
							}
							
							$q_book = $conn->query("SELECT * FROM weather ") or die(mysqli_error());
							while($f_book = $q_book->fetch_array()){
						?>
                        
                        <tr>
                            <td><?php echo $f_book['rain']?></td>
                            <td><?php echo $f_book['time']?></td>
                            <td><?php echo $f_book['duration']?></td>
                            <td><?php echo date("m/d/Y", strtotime($f_book['date']))?></td>
	                   </tr>   
						
						<?php
							}
						?>
					</tbody>
				</table>
			</div>	
		
         </div>
     </div>
	
	</div><!--End Row-->
	




	
      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2020 HSE MANAGERS 
        </div>
      </div>
    </footer>
	<!--End footer-->
	
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
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
    <script src="https://kendo.cdn.telerik.com/2017.2.621/js/jquery.min.js"></script> 
 <script src="https://kendo.cdn.telerik.com/2017.2.621/js/jszip.min.js"></script>
 <script src="https://kendo.cdn.telerik.com/2017.2.621/js/kendo.all.min.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.html"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
   <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
   
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
    <script src = "js/jquery-3.1.1.js"></script>
<script src = "js/jquery-ui.js"></script>
<!-- Index js -->
    <script src='dist/jspdf.min.js'></script>

<script>
var base64Img = null;
imgToBase64('octocat.jpg', function(base64) {
    base64Img = base64; 
});

margins = {
  top: 70,
  bottom: 40,
  left: 30,
  width: 550
};

function ExportPdf(){ 
kendo.drawing
    .drawDOM("#myCanvas", 
    { 
        paperSize: "A4",
        margin: { top: "1cm", bottom: "1cm" },
        scale: 1,
        height: 500
    })
        .then(function(group){
        kendo.drawing.pdf.saveAs(group, "Exported.pdf")
    });
};
function headerFooterFormatting(doc, totalPages)
{
    for(var i = totalPages; i >= 1; i--)
    {
        doc.setPage(i);                            
        //header
        header(doc);
        
        footer(doc, i, totalPages);
        doc.page++;
    }
};

function header(doc)
{
    doc.setFontSize(30);
    doc.setTextColor(40);
    doc.setFontStyle('normal');
	
    if (base64Img) {
       doc.addImage(base64Img, 'JPEG', margins.left, 10, 40,40);        
    }
	    
    doc.text("HSE DAILY REPORTS", margins.left + 50, 40 );
	doc.setLineCap(2);
	doc.line(3, 70, margins.width + 43,70); // horizontal line
};

// You could either use a function similar to this or pre convert an image with for example http://dopiaza.org/tools/datauri
// http://stackoverflow.com/questions/6150289/how-to-convert-image-into-base64-string-using-javascript
function imgToBase64(url, callback, imgVariable) {
 
    if (!window.FileReader) {
        callback(null);
        return;
    }
    var xhr = new XMLHttpRequest();
    xhr.responseType = 'blob';
    xhr.onload = function() {
        var reader = new FileReader();
        reader.onloadend = function() {
			imgVariable = reader.result.replace('text/xml', 'image/jpeg');
            callback(imgVariable);
        };
        reader.readAsDataURL(xhr.response);
    };
    xhr.open('GET', url);
    xhr.send();
};

function footer(doc, pageNumber, totalPages){

    var str = "Page " + pageNumber + " of " + totalPages
   
    doc.setFontSize(10);
    doc.text(str, margins.left, doc.internal.pageSize.height - 20);
    
};

 </script>
  <script src="assets/js/index.js"></script>
 <script type="text/javascript"> 

        $(document).ready(function(){
	//$('#date1').datepicker();
	//$('#date2').datepicker();
	$('#btn_search').on('click', function(){	
        if($('#date1').val() == "" ){
            swal("Please select a start date", "", "warning", {
            button: "Close",
            });
	//alert("One or more date fields empty");
		}
        else if($('#date2').val() == "" ){
            swal("Please select an End date", "", "warning", {
          button: "Close",
        });}

        else{
			$date1 = $('#date1').val();
			$date2 = $('#date2').val();
            $project = $('#project').val();
			$('#load_data').empty();
			$loader = $('<tr ><td colspan = "4"><center>Searching....</center></td></tr>');
			$loader.appendTo('#load_data');
			setTimeout(function(){
				$loader.remove();
				$.ajax({
					url: 'get_data.php',
					type: 'POST',
					data: {
						date1: $date1,
						date2: $date2,
                        project: $project
					},
					success: function(res){
						$('#load_data').html(res);
					}
				});
			}, 3000);
		}	
	});
	
	$('#reset').on('click', function(){
		location.reload();
	});
});
    </script> 
  <script type="text/javascript"> 

        $(document).ready(function(){
	//$('#date1').datepicker();
	//$('#date2').datepicker();
	$('#btn_search').on('click', function(){	
        if($('#date1').val() == "" ){
            swal("Please select a start date", "", "warning", {
            button: "Close",
            });
	//alert("One or more date fields empty");
		}
        else if($('#date2').val() == "" ){
            swal("Please select an End date", "", "warning", {
          button: "Close",
        });}

        else{
			$date1 = $('#date1').val();
			$date2 = $('#date2').val();
            $project = $('#project').val();
			$('#load_data2').empty();
			$loader = $('<tr ><td colspan = "4"><center>Searching....</center></td></tr>');
			$loader.appendTo('#load_data2');
			setTimeout(function(){
				$loader.remove();
				$.ajax({
					url: 'get_data2.php',
					type: 'POST',
					data: {
						date1: $date1,
						date2: $date2,
                        project: $project
					},
					success: function(res){
						$('#load_data2').html(res);
					}
				});
			}, 3000);
		}	
	});
	
	$('#reset').on('click', function(){
		location.reload();
	});
});
    </script> 
 
  <script type="text/javascript">
        $("#print").live("click", function () {
            var divContents = $("#pdfout").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
</body>

<!-- Mirrored from codervent.com/dashtreme-free/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Mar 2020 11:20:32 GMT -->
</html>
