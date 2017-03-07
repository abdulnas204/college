<?php


if(isSet($_POST['user_email']))
{
$user_email = $_POST['user_email'];
 include("connection.php");

$sql_check = mysqli_query("select user_email from user where user_email='".$user_email."'") or die(mysqli_error());

if(mysqli_num_rows($sql_check))
{
echo '<font color="red">The Email <STRONG>'.$user_email.'</STRONG> is already in use.</font>';
}
else
{
echo 'OK';
}

}

?>