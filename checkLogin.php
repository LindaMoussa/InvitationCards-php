

<?php
 session_start(); 
include 'connection.php';

$userEmail = $_POST['useremail'];
$userPassword = $_POST['userpassword'];
$error= $_POST['errormsg'];
$emailErr="";
$q ="SELECT * FROM `inv_users` WHERE password='$userPassword' and email='$userEmail'";

$result = mysqli_query($con , $q);
//$_SESSION["favanimal"] = "cat";
$_SESSION['wrongEorP'] = "";

if(mysqli_num_rows($result) > 0)
{
	
    header('location:profile2.php');
    
}
else
{
//    $emailErr = "Wrong Email or Password! ";
    
   $_SESSION['wrongEorP'] = "Wrong Email or Password!, Please try again ";
    
header('Location: '.$_SERVER['PHP_SELF']);
die;
    
    //   $_POST['errormsg']="Wrong Email or Password ! Please try againnnn";
    
//    $cookie_name = "wrongMsg";
//$cookie_value = "Wrong Email or Password!, Please try again.";
//setcookie($cookie_name, $cookie_value, time()  - 3600, "/");
    
//    header('location:login.php');
//echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 

//    echo 'alert';
//     echo htmlspecialchars($_SERVER["PHP_SELF"]);

//	header('location:index.php');
//	header('location:login2.php');
//    echo 'Wrong Email or Password';
//    echo '<br><a href="index.php"><h3>Back to Home Page</h3></a>';
}
//	header('location:login2.php');
//    echo '<script type="text/javascript">';
//echo 'alert("Wrong Email or Password !
//              Please Try Again.")';
//echo '</script>';
//        header('location:login.php');

   // $message = "wrong Email or Password";
//echo "<script type='text/javascript'>alert('$message');</script>";
//	header('location:index.php');
//}
?>



