<?php
include('connect.php');
session_start();


$user=$_SESSION['login_user']; 

$sql = "SELECT * FROM `admin` WHERE username = '$user' ";
	
$ses_sql = mysqli_query($connection, $sql);

$row = mysqli_fetch_array($ses_sql, MYSQL_ASSOC);

$login_session=$row['username'];

//$s=$_SESSION['login_user'];
//echo "$login_session";		       

$login= $_SESSION['loggedin'];

//echo "$login";
//Session_destroy();

if($login!=1){
header("Location: index.php");
exit();

}


//if(!isset($login_session)){
//header("Location: login.php");
//}

/*
$_SESSION['start'] = time(); // taking now logged in time

    if(!isset($_SESSION['expire'])){
        $_SESSION['expire'] = $_SESSION['start'] + (1* 60) ; // ending a session in 60 seconds
    }
    $now = time(); // checking the time now when home page starts

    if($now > $_SESSION['expire'])
    {
        session_destroy();
        echo "<center>Your session has expire !  <a href='logout.php'>Click Here to Login</a></center>";
    }
*/  

/*
function auto_logout($field)
{
    $t = time();
    $t0 = $_SESSION[$field];
    $diff = $t - $t0;
    if ($diff > 150 || !isset($t0))
    {          
        return true;
    }
    else
    {
        $_SESSION[$field] = time();
    }
}

if(auto_logout("10"))
    {
        session_unset();
        session_destroy();
        header("Location:login.php");          
        exit;
    } 
*/
?>