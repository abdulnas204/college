<?php error_reporting(E_ALL);
ini_set('display_errors', 1);
$user_name = $_POST['user_name'];
$user_password=$_POST['user_password'];
 include("connection.php");

 $sql_check = mysqli_query("SELECT * FROM `login` WHERE user_name = '".$user_name."' AND user_password = '".$user_password."' ") or die(mysqli_error());

if(mysqli_num_rows($sql_check))
{
	 while($result = mysqli_fetch_array($sql_check))
		 {
session_start();
$_SESSION["user_name"] = $result["user_name"];
		header("location:students.php");	
		 }
}
else
{
//echo $error = "Email id & password does not match"; 
	 header("location:admin.php");
}?>

  