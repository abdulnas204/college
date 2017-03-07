<?php

$servername = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'college_management';
$con = mysqli_connect($servername,$dbusername,$dbpassword);
if(!$con)
{
  die('Could not Connected'.mysqli_errors($con));
  
}
mysqli_select_db($con,$dbname);

?>