<?php
define('DB_SERVER','localhost');
define('DB_USER','medicaidc_covid19');
define('DB_PASS' ,'Forgetit1');
define('DB_NAME', 'medicaidc_covid19');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>