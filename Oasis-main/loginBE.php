<?php
session_start ();
include("dbconnect.php"); 

if(isset($_REQUEST['sub']))
{
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$res = mysqli_query($conn,"select * from users where username='$username' and password='$password'");
$result=mysqli_fetch_array($res);
if($result)
{
	
	$_SESSION["login"]="1";
	header("location: travel.php");
}
else	
{
     header("location: log.php");	
}
}
?>
