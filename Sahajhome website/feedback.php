<?php
require_once('connect.php');
//session_start();
include('lock.php');
?>


<!DOCTYPE html>
<html>
<title>Feedback</title>

<head style="background-color: green;">	
	<link rel="stylesheet" type="text/css" href="styles.css">


<div style="float:left; margin-top: -30px;background-color: green; ">
<img src="logo.jpg" alt="Sahaj Icon" style="width:120px;height:120px;margin: 0px;padding: 0px;display: block;border: none;vertical-align: text-bottom;">
</div>

<div style="margin-top: 40px; margin-right: 40px; "><center>
<a href="notification.php">Notifications</a>
<a href="home1.php">Complaints</a>
<a href="pending.php" id="pd">Pending</a>
<a href="report.php" id="rp">Report</a>
<a href="index.php">Logout</a></center>
</div>

<style>
a:link {
  background-color: #2196f3;
    color: white;
    padding: 14px 25px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
    font-size: 20px;

}
</style>
<hr>
</head>
<body style= "margin-top: 0%;">
<center>
<form method="post" >
<table><tr>

<td>                           
<font size="3px"><b>Division:</b></font></td><td><select name= "division" >
<option value="0">--select--</option> 
 <option value="1" >Amravati</option>
  <option value="2">Nagpur</option>
  <option value="3">Nashik</option>
  <option value="4">Aurangabad</option>
 <option value="5">Kokan</option>
  <option value="6">Pune</option>
  </select></td><tr><td><br></td><td><br></td></tr>
<tr><td><b>Select Your District :</b></td><td>
<select name= "district" >
<option value="0">--select--</option> 
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
<input type="submit" value="Submit" />
</form>
<h2>Feedback:</h2>

</center>
<br><br>

<?php 
$selectOption ="";
$selectDist="";

if(isset($_POST['division']) & isset($_POST['district'])){
$selectOption = $_POST['division'];
$selectDist = $_POST['district'];

}
?>


<?php
$sql = "SELECT * FROM  `complaints` WHERE status =2 and D_id='$selectOption' and Dis_id='$selectDist' ORDER BY date DESC";
	$result = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($result);
	
		
	

?>
<?php while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
      echo "<center><font size ='4px'>Complaint ID :{$row['C_id']} </font> <br> ".
         "<font size ='5px'>Feedback : {$row['feedback']}</font> </center><br> ".
                 "<hr>"; 
 }
?>
</body>

</html>