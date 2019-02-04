

<?php

include 'connection.php';

$userName =  $_POST['username'];
$userPassword =  $_POST['userpassword'];
$userMail =  $_POST['usermail'];

//$confirmPassword = $_POST['confirmpass'];
//
//if($confirmPassword==$userPassword)	{
//        
//    }

$q="INSERT INTO `inv_users`(`ID`, `username`, `email`, `password`) VALUES ('','$userName','$userMail','$userPassword')";


$x = mysqli_query($con , $q);
	if($x != true)
	{
		echo mysqli_error($con);
	}
   else
   {
       	header('location:profile2.php');

   }


/*
	if($con == true)
	{
		echo "Connected";
	}
	else
	{
		echo "connection error";
	}
*/



?>

