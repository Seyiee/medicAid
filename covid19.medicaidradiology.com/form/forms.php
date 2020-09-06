<?php
include("connection.php");
session_start();
// code for performance report submission
if(isset($_POST['signup1']))
{
    $fullname=$_POST['fullname'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $phone=$_POST['phone'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $bookingdate=$_POST['bookingdate'];
    $no_of_tests=$_POST['no_of_tests'];
    $time=$_POST['time'];
    $center=$_POST['center'];
    $first_time=$_POST['first_time'];
    $last_test_date=$_POST['last_test_date'];
    $last_test_details=$_POST['last_test_details'];
    $epid=$_POST['epid'];
    $why_tested=$_POST['why_tested'];
    $locations_visted=$_POST['locations_visted'];
    $mass_gatherings=$_POST['mass_gatherings'];
    $contact_covid=$_POST['contact_covid'];
    $which_suspected=$_POST['which_suspected'];
    $health_facility=$_POST['health_facility'];
    $facility_name=$_POST['facility_name'];
    $health_worker=$_POST['health_worker'];
    $designation=$_POST['designation'];
    $international_travel=$_POST['international_travel'];
    $country_travelled=$_POST['country_travelled'];
    $entry_point=$_POST['entry_point'];
    $port_name=$_POST['port_name'];
    $states_visited=$_POST['states_visited'];
    $pregnancy_status=$_POST['pregnancy_status'];
    $date=$_POST['date'];
    $_SESSION["email"] = $email;
    $_SESSION["phone"] = $phone;
    $_SESSION["fullname"] = $fullname;
    $_SESSION["bookingdate"] = $bookingdate;
    $_SESSION["no_of_tests"] = $no_of_tests;
    $_SESSION["url"] = "profile.php?phone=".$_SESSION["phone"];
    
    $sql = "INSERT INTO `form` (`fullname`, `gender`, `address`, `city`, `state`,`country`, `phone`, `dob`, `email`, `bookingdate`, `no_of_tests`, `time`, `center`, `first_time`, `last_test_date`, `last_test_details`, `epid`, `why_tested`, `locations_visted`, `mass_gatherings`, `contact_covid`, `which_suspected`, `health_facility`, `health_worker`, `designation`, `international_travel`, `country_travelled`, `entry_point`, `port_name`, `states_visited`, `pregnancy_status`, `filled_yourself`, `date`) values ('$fullname','$gender','$address','$city','$state','$country','$phone','$dob','$email','$bookingdate','$no_of_tests',' $time','$center',' $first_time','$last_test_date','$last_test_details','$epid',' $why_tested',' $locations_visted','$mass_gatherings','$contact_covid','$which_suspected','$health_facility',' $facility_name','$health_worker','$designation','$international_travel','$country_travelled','$entry_point',' $port_name','$states_visited','$pregnancy_status','$date')";
    
if(mysqli_query($con, $sql)){
   echo "<div class='alert alert-success' style='z-index: 10; text-align: center; font-weight: 500;'>User Created Successfully</div>";
     $extra="forms.php";
    echo "<script>window.location.href='".'confirm.php'."'</script>";
   
} else{
    echo "<div class='alert alert-danger' style='z-index: 10; text-align: center; font-weight: 500;'>There was an Error</div>". mysqli_error($con);
}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>COVID 19 FORM </title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
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
  
  
</head>

<body class="bg-theme bg-theme7">

<!-- start loader -->
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <!--Start sidebar-wrapper-->
   
   <!--End sidebar-wrapper-->
  

<!--Start topbar header-->

<!--End topbar header-->
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
     
           
        <div class="col-lg-12" >
           <div class="card">
            <div class="card-body">
         

            <div >
                <div class=" id="performance" style="margin: 0">
                    <center>
                   	<h3> Please Fill the Form Below</h3>
                     <div class="col-lg-8" style="margin: 0; ">
                            <div class="card" >
                                <div class="card-body">
                                <form action="" method="post"  style="text-align: left; ">
                                    <div class="form-group">
                                    <label for="input-1">Full Name</label>
                                    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Full Name" required>
                                   </div>
                                    <div class="form-group">
                                    <label for="input-2">Gender</label>
                                   <select data-placeholder="Make" id="gender" name="gender" class="form-control " required>
                                        <option value="Male">Male </option>
                                        <option value="Female">Female</option>
                                        
                                    </select> 
                                   </div>
                                    <div class="form-group">
                                    <label for="input-1">Residential Address</label>
                                    <input type="text" name="address" class="form-control" id="address" placeholder=" Address" required>
                                   </div>
                                   <div class="form-group">
                                    <label for="input-1">City</label>
                                    <input type="text" name="city" class="form-control" id="input-1" placeholder=" City" required>
                                   </div>
                                   <div class="form-group">
                                    <label for="input-2">State</label>
                                    <input type="text" class="form-control" name="state" id="input-2" placeholder="State" required>
                                   </div>
                                        <div class="form-group">
                                    <label for="input-2">Country Travelled</label>
                                    
                                          <select id="country" class="form-control " name="country" required>
   <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
</select>
                                   </div>
                                    <div class="form-group">
                                    <label for="input-2">Phone Number</label>
                                    <input type="text" name="phone" class="form-control"  id="input-3" placeholder="Phone Number" required>
                                   </div>
                                    <div class="form-group">
                                    <label for="input-2">Date of Birth</label>
                                    <input type="date" name="dob" class="form-control" id="input-2" placeholder="Date Of Birth" required>
                                   </div>
                                    
                                    <div class="form-group">
                                    <label for="input-2">Email</label>
                                    <input type="email"  name="email" class="form-control"  id="input-4" placeholder="Email Address" required>
                                   </div>
                                    <div class="form-group">
                                    <label for="input-2">Date of Booking</label>
                                    <input type="date" name="bookingdate" class="form-control" id="input-2" placeholder="Date of Booking" required>
                                   </div>
                                   <div class="form-group">
                                    <label for="input-2">Number of people</label>
                                    <input type="number" name="no_of_tests" class="form-control"  id="input-5" placeholder="Number of People" required >
                                   </div>
                                    <div class="form-group">
                                    <label for="input-2">Time</label>
                                    <input type="time" name="time" class="form-control"  id="input-6" placeholder="Time" required>
                                   </div>
                                      <div class="form-group">
                                    <label for="input-2">Preffered Center</label>
                                   <select data-placeholder="Make" id="gender" name="center" class="form-control " required>
                                        <option value="Wuse">Wuse </option>
                                        <option value="Utako">Utako </option>
                                        
                                    </select> 
                                   </div>
                                    <div class="form-group">
                                    <label for="input-2">Is this the first time you are getting tested for COVID-19?</label>
                                   <select data-placeholder="Make" id="gender" name="first_time" class="form-control " required>
                                        <option value="Yes">Yes </option>
                                        <option value="No">No </option>
                                        
                                    </select> 
                                   </div>
                                    <div class="form-group">
                                    <label for="input-2">If No Please Give the Date of your Last Test</label>
                                    <input type="date" name="last_test_date" class="form-control" id="input-2" placeholder="Preffered Test Date">
                                   </div>
                                    
                                    <div class="form-group">
                                    <label for="input-2">Details of last test (testing organisation, Laboratory, Health facility, home etc)</label>
                                    <input type="text" name="last_test_details" class="form-control" id="input-2" placeholder="Details of last test (testing organisation, Laboratory, Health facility, home etc)" required>
                                   </div>
                                    <div class="form-group">
                                    <label for="input-2">EPID number </label>
                                    <input type="text" name="epid" class="form-control" id="input-2" placeholder="EPID number" >
                                   </div>
                                    <div class="form-group">
                                    <label for="input-2">Why are you getting tested</label>
                                    <input type="text" name="why_tested" class="form-control" id="input-2" placeholder="Why are you getting tested" required>
                                   </div>
                                    <div class="form-group">
                                    <label for="input-2">Locations visited in the last one month</label>
                                    <input type="text" name="locations_visted" class="form-control" id="input-2" placeholder="Locations visited in the last one month" required>
                                   </div>
                                    <div class="form-group">
                                    <label for="input-2">Have you attended any mass gathering in the past one month? (wedding, funeral, market, mosque/church, football game, other gathering)</label>
                                   <select data-placeholder="Make" id="gender" name="mass_gatherings" class="form-control " required>
                                        <option value="Yes">Yes </option>
                                        <option value="No">No </option>
                                        
                                    </select> 
                                   </div>
                                    
                                    <div class="form-group">
                                    <label for="input-2">Have you been in contact with a suspected or confirmed case of COVID-19 in the past one month</label>
                                   <select data-placeholder="Make" id="gender" name="contact_covid" class="form-control " required>
                                        <option value="Yes">Yes </option>
                                        <option value="No">No </option>
                                        
                                    </select> 
                                   </div>
                                    
                                    
                                    <div class="form-group">
                                    <label for="input-2">if yes which confirmed or suspected</label>
                                    <input type="text" name="which_suspected" class="form-control" id="input-2" placeholder="if yes which confirmed or suspected" >
                                   </div>
                                    
                                     <div class="form-group">
                                    <label for="input-2">Did you visit a health facility in the past one month</label>
                                   <select data-placeholder="Make" id="gender" name="health_facility" class="form-control " required>
                                        <option value="Yes">Yes </option>
                                        <option value="No">No </option>
                                        
                                    </select> 
                                   </div>
                                    
                                    <div class="form-group">
                                    <label for="input-2">Name and address of Health facility</label>
                                    <input type="text" name="facility_name" class="form-control" id="input-2" placeholder="Name and address of Health facility">
                                   </div>
                                    
                                       <div class="form-group">
                                    <label for="input-2">Are you a healther worker</label>
                                   <select data-placeholder="Make" id="gender" name="health_worker" class="form-control " required>
                                        <option value="Yes">Yes </option>
                                        <option value="No">No </option>
                                        
                                    </select> 
                                   </div>
                                    <div class="form-group">
                                    <label for="input-2">if yes specify your designation</label>
                                    <input type="text" name="designation" class="form-control" id="input-2" placeholder="if yes specify your designation">
                                   </div>
                                    <div class="form-group">
                                    <label for="input-2">Have you travelled internationally within the last 14 days?</label>
                                   <select data-placeholder="Make" id="gender" name="international_travel" class="form-control " required>
                                        <option value="Yes">Yes </option>
                                        <option value="No">No </option>
                                        
                                    </select> 
                                   </div>
                                    
                                
                                      <div class="form-group">
                                    <label for="input-2">Country Travelled</label>
                                    
                                          <select id="country" class="form-control " name="country_travelled" required>
   <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
</select>
                                   </div>
                                    <div class="form-group">
                                    <label for="input-2">Point of Entry</label>
                                    <input type="text" name="entry_point" class="form-control" id="input-2" placeholder="Point of Entry" required>
                                   </div>
                                    <div class="form-group">
                                    <label for="input-2">Port Name</label>
                                    <input type="text" name="port_name" class="form-control" id="input-2" placeholder="Port Name" required>
                                   </div>
                                    <div class="form-group">
                                    <label for="input-2">States and Cities visited </label>
                                    <input type="text" name="states_visited" class="form-control" id="input-2" placeholder="States and Cities visited" required>
                                   </div>
                                   <div class="form-group">
                                    <label for="input-2">Pregnancy Status</label>
                                   <select data-placeholder="Make" id="gender" name="pregnancy_status" class="form-control ">
                                        <option value="Yes">Yes </option>
                                        <option value="No">No </option>
                                        <option value="No">Unknown</option>
                                    </select> 
                                   </div>
                                    <div class="form-group">
                                    <label for="input-2">Filling this form yourself?</label>
                                   <select data-placeholder="Make" id="gender" name="filled_yourself" class="form-control " required>
                                        <option value="Yes">Yes </option>
                                        <option value="No">No </option>
                                       
                                    </select> 
                                   </div>
                                     
                                    <div class="form-group">
                                    <label for="input-2">Date </label>
                                    <input type="date" name="date"  value ="<?php echo date('Y-m-d') ?>" class="form-control" id="input-2" placeholder="Date " >
                                   </div>
                                    <center>
                                    <div class="form-group">
                                    <input  name="signup1"  class="btn btn-light px-5" value="Submit Form" type="submit">
                                    
                                  </div>
                                    </center>
                                   
                                </form>
                                    
                                </div>
                        </div>
                    </div>
                   
                    </center>
                    <!--/row-->
                </div>
                   </div>
        </div>
      </div>
      </div>
        
    </div><!--End Row-->
  
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
          Copyright © 2018 Dashtreme Admin
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
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
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

<!-- Mirrored from codervent.com/dashtreme-free/forms.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Mar 2020 11:28:41 GMT -->
</html>