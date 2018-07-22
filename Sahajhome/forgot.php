<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">

<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

a:link {
    text-decoration: none;
    
}


</style>
<title>Forgot Password</title>
</head>
<body>
<h1>Forgot Password<h1>
<form  method='post'>
<table cellspacing='5' align='center'>
<tr><td>Email id:</td><td><input type='text' name='mail'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr><tr><td></td><td><a href="index.php" id="fb">login</a></td></tr>
</table>

</form>

<?php

$connection = mysqli_connect('localhost','admin_sahajapp','sahajapp@pbuhsoft');

if(!$connection){

die("Database Connection Failed" . mysqli_error($connection));
}


$select_db = mysqli_select_db($connection, 'sahajapp');


if(!$select_db)
{
die("Database Selection Failed" . mysqli_error($connection));
}


if(isset($_POST['submit']) & !empty($_POST['submit']))
{ 

$mail=$_POST['mail'];
 $result="select * from admin where email='$mail' ";
 $q = mysqli_query($connection, $result);
 $p=mysqli_num_rows($q);
 if($p!=0) 
 {
  $res=mysqli_fetch_array($q);
  $to=$res['email'];
  $subject='Remind password';
  $message='Your password : '.$res['password']; 
  $headers='From:sahajapp@DoNotReply.com';
  $m=mail($to,$subject,$message,$headers);
  if($m)
  {
    echo 'Check your inbox in mail';
  }
  else
  {
   echo'mail is not send';
  }
} 
 else
 {
  echo'You entered mail id is not present';
 } 
}

?>

</body>
</html>
