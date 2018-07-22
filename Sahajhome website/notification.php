<?php
//session_start();
require_once('connect.php');	
include('lock.php');

?>

<div style="float:left; margin-top: -30px;background-color: green; ">
<img src="logo.jpg" alt="Sahaj Icon" style="width:120px;height:120px;margin: 0px;padding: 0px;display: block;border: none;vertical-align: text-bottom;">
</div>

<div style="margin-top: 40px; margin-right: 40px; ">

<center>
<a href="home1.php">Complaints</a>
<a href="feedback.php" id="pd">Feedback</a>
<a href="pending.php" id="pd">Pending</a>
<a href="report.php" id="rp">Report</a>
<a href="index.php">Logout</a>
<br></center>
</div>
<hr>
<form method="post" action="#">
<center>
<table><tr>
<td>                           
<font size="3px"><b>Division:</b></font></td><td><select name= "division" >
<option>--select--</option> 
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
<center>
<br><font size ='4px'>Notify Everyone :  <br> 
<textarea  id='txt'  rows='4' cols='50' name='data'></textarea><br><br>
    
<input type="submit" value="Send" /></center>
</form>
<hr>

<?php 
$selectOption ="";
$selectDist="";
$data="";
$_SESSION['choice2']="";
$_SESSION['choice3']="";

// 
if(isset($_POST['division'], $_POST['district'], $_POST['data']) & !empty($_POST['data'])){
$selectOption = $_POST['division'];
$selectDist = $_POST['district'];
$data = $_POST['data'];
$_SESSION['choice2']= $_POST['division'];
$_SESSION['choice3']= $_POST['district'];


//$Nid=NULL;


$sql5 = "INSERT INTO `notification`(N_id, data, D_id, Dis_id) VALUES (NULL, '$data','$selectOption','$selectDist')";
            //"INSERT INTO `sahajapp`.`notification` (`N_id`, `data`, `D_id`, `Dis_id`) VALUES (NULL, 'asasadadsadsadd', '1', '10')";
	$result5 = mysqli_query($connection, $sql5);
	//$count5 = mysqli_num_rows($result5);
if($result5){
header('location:nextnotify.php');
}
}
?>

<!DOCTYPE html>
<html>
<head>	
	<link rel="stylesheet" type="text/css" href="styles.css">

<title>Notifications</title>

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


</head>
<b><?php echo "<font color='red'>Select Division, District and Do not keep the text field blank</font>";?></b>
<?php
/*

 //To show Notification
$show = "SELECT * FROM  `notification` WHERE  D_id='$selectOption' and Dis_id='$selectDist'";
	$result = mysqli_query($connection, $show);
	//$count = mysqli_num_rows($result);
    
while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
  echo "<form method='post'>"."<font size ='4px'>Notification ID :{$row['N_id']} </font>  <br> ".
         "<font size ='4px'>Details : {$row['data']} </font><br> <br>".
"<b>Enter Notification Id : </b><input type='text' name='nid'><br><br>".
   "<input type='submit' value='Delete'></form>". 
                "<hr>"; 
}

if(isset($_POST['nid'])){
$selectNot=$_POST['nid'];

$delete=" DELETE FROM `notification` WHERE  N_id = '$selectNot' ";
$result3= mysqli_query($connection, $delete);

}

*/ 
?>

</html>