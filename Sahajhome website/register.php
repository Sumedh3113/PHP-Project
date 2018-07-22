<?php
require_once('connect.php');
$selectOption ="";
$selectDist ="";

if(isset($_POST, $_POST, $_POST['division'],$_POST['district']) & !empty($_POST)){

$selectOption = $_POST['division'];
$selectDist = $_POST['district'];
$selectCode = $_POST['code'];


	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = $_POST['password'];

	//$sql = "INSERT INTO `admin` (username,password,D_id,email,Dis_id ) VALUES ('$username','$password','$selectOption','$email','$selectDist')";
//	$result = mysqli_query($connection, $sql);
	
//if($result){
if($selectCode==1331){
		//$smsg = "User Registration successful";
$sql = "INSERT INTO `admin` (username,password,D_id,email,Dis_id ) VALUES ('$username','$password','$selectOption','$email','$selectDist')";
		$result = mysqli_query($connection, $sql);
if($result){

$smsg="User Registration Successful";
}
else{

$fmsg="User Registration Failed(Either you left some field blank or your username is not unique)";
}
		
}
else{
$fmsg = "Wrong code entered";
}
//	}
//else{
//		$fmsg = "User registration failed (Either you left some field blank or your username is not unique)";
//	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      
<form class="form-signin" method="POST">
        <center><h2 class="form-signin-heading"><b>Please Register</b></h2></center><hr>
 
<table><tr>

<td>                           
<font size="3px"><b>Division:</b></font></td><td><select name= "division" >
<option >--select--</option> 
 <option value="7" >Mumbai</option> 
<option value="1" >Amravati</option>
  <option value="2">Nagpur</option>
  <option value="3">Nashik</option>
  <option value="4">Aurangabad</option>
 <option value="5">Kokan</option>
  <option value="6">Pune</option>
  </select></td><tr><td><br></td><td><br></td></tr>
<tr><td><b>Select Your District :</b></td><td>
<select name= "district" >
<option>--select--</option> 
 <option value="8" >Mumbai</option>
 <option value="9" >Amravati</option>
  <option value="10">Akola</option>
  <option value="11">Buldana</option>
  <option value="12">Washim</option>
 <option value="13">Yavatmal</option>
  
 <option value="14" >Nagpur</option>
  <option value="15">Wardha</option>
  <option value="16">Bhandara</option>
  <option value="17">Gadchiroli</option>
 <option value="18">Chandrapur</option>
  <option value="19">Gondiya</option>

 <option value="20" >Nashik</option>
  <option value="21">Ahmednagar</option>
  <option value="22">Dhule</option>
  <option value="23">Jalgaon</option>
 <option value="24">Nandurbar</option>
  
<option value="25">Aurangabad</option> 
 <option value="26" >Jalna</option>
  <option value="27">Nanded</option>
  <option value="28">Beed</option>
  <option value="29">Parbhani</option>
 <option value="30">Osmanabad</option>
  <option value="31">Latur</option>
 <option value="32">Hingoli</option>

 <option value="33" >Kokan</option>
  <option value="34">Thane</option>
  <option value="35">Raigad</option>
  <option value="36">Ratnagiri</option>
 <option value="37">Sindhudurg</option>
  <option value="38">Palghar</option>

 <option value="39" >Pune</option>
  <option value="40">Satara</option>
  <option value="41">Sangali</option>
  <option value="42">Solapur</option>
 <option value="43">Kolhapur</option>
  


  </select></td></tr>
</table>

<br>

<label for="inputUsername" class="sr-only">Username</label> 
		  <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
<br>
		
            
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required ><br>

         <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required><br>
<label for="inputCode" class="sr-only">Code</label> 
		  <input type="password" name="code" class="form-control" placeholder="Code" required >
        <br>
<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="index.php">Login</a>
      </form>
</div>
</body>
</html>