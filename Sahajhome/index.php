<?php
session_start();
require_once('connect.php');

$_SESSION['loggedin']=false;

if(isset($_POST) & !empty($_POST)){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
	$result = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($result);

$_SESSION['loggedin']=null;
	
    if($count == 1){

                                            $_SESSION['loggedin']=true;
                                          $_SESSION['login_user']=$username;
//$s=$_SESSION['login_user'];
header("location: home1.php");

	}
else{
                                      //$_SESSION['loggedin']=false;

		echo "<center><h4><font color='red'>Invalid Username/Password</font></h4></center>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" >
</script>
<script>

function myFunction() {
    var x = document.getElementById('myDIV');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
</script>



	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
            <form class="form-signin" method="POST" >
        <h2 class="form-signin-heading" style="text-align:center;">Please Login</h2>
        		 
		  <input type="text" name="username" class="form-control" placeholder="Username" required>
	
<label for="inputPassword" class="sr-only">Password</label>
	
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" >Login</button>
        <a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a><br>
<span><a href="forgot.php">Forgot password</a></span>
      </form>
</div>
</body>

<footer style="position:absolute;bottom:0; left:80%; width:100%; height:60px;">
<b onclick="myFunction()" class="glyphicon glyphicon-envelope">Deadline is 01-03-2017</b>
<div id="myDIV" style="display:none;">
tnbttech@gmail.com
</div>
</footer>

</html>