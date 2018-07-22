<html>
<head>
<?php
//session_start(); /*uncomment this if needed*/
require_once('connect.php');
include('lock.php');
	
?>


	<link rel="stylesheet" type="text/css" href="styles.css">

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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">


</script>

 
<script type="text/javascript">
<?php
/* jQuery(document).ready(function(){

  jQuery('select#division').val('<?php echo $_POST['division'];?>');

 jQuery('select#district').val('<?php echo $_POST['district'];?>');


});
*/?>
</script>

<script type="text/javascript">

</script>


<?php

/*every function stored here*/
//$data=data;

//$update="UPDATE complaints SET  status =  3 WHERE  C_id = $data ";
//$result3= mysqli_query($connection, $update);
/*
function post() {

var id =$('#cid').val();

$.post('validate.php',{postid: id},

function(data){

<?php
$data=data;

echo" $data";
$update="UPDATE complaints SET  status =  3 WHERE  C_id = '$data' ";
$result3= mysqli_query($connection, $update);
?>
});       

}


*/	


?>

<title>Complaints</title>
</head>


<div style="float:left; margin-top: -30px;background-color: green; ">
<img src="logo.jpg" alt="Sahaj Icon" style="width:120px;height:120px;margin: 0px;padding: 0px;display: block;border: none;vertical-align: text-bottom;">
</div>

<div style="margin-top: 40px; margin-right: 40px; ">
<center>
<a href="notification.php">Notifications</a>
<a href="feedback.php" id="fb">feedback</a>
<a href="pending.php" id="pd">Pending</a>
<a href="report.php" id="rp">Report</a>
<a href="index.php" style='text-align:center'>Logout</a>
<br>
</center>
<hr>

<form method="post" >
<center>
<table><tr>

<td>                           
<font size="3px"><b>Division:</b></font></td><td>
<select name= "division" id="division">
<option>--select--</option> 
<option value="1" >Amravati</option>
  <option value="2">Nagpur</option>
  <option value="3">Nashik</option>
  <option value="4">Aurangabad</option>
 <option value="5">Kokan</option>
  <option value="6">Pune</option>
  </select></td><tr><td><br></td><td><br></td></tr>

<tr><td><b>Select Your District :</b></td><td>
<select name= "district" id="district" >
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

<br><br>
<input type="submit" value="Submit"  />
</form>
</center>

<?php 
$selectOption ="";
$selectDist="";
$selectCom="";
$selectReply="";
$_SESSION['choice']="";
$_SESSION['choice1']="";

if(isset($_POST['division']) & isset($_POST['district'])){
$selectOption = $_POST['division'];
$selectDist = $_POST['district'];
$_SESSION['choice']= $_POST['division'];
$_SESSION['choice1']= $_POST['district'];


header('location:reply.php');
}
?>

<hr>

<?php
/*

$sql = "SELECT *  FROM  `complaints`  WHERE STATUS =1 and D_id='$selectOption' and Dis_id='$selectDist' ";
	$result = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($result);


*/
?>


<?php 
/*




while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
$date = date('j F, Y', strtotime($row['date']));     
 echo "<form><font size ='4px'>Complaint ID :{$row['C_id']}  </font><br> ".
         "<font size ='4px'>Details : {$row['details']} </font><br> ".
         "<font size ='4px'>Date : {$date} </font><br> ".
"<b>Enter Complaint Id : </b><input type='text' name='cid' id='cid'><br><br>".
"<textarea  id='txt'  rows='4' cols='50' name='detail' id='detail'></textarea><br><br>".
    "<input type='submit' value='Reply'></form>".
   "<hr/>";

 }

if(isset($_POST['cid']) & isset($_POST['detail'])){
$selectCom=$_POST['cid'];
$selectReply=$_POST['detail'];

$update="UPDATE complaints SET  status =  1, reply= '$selectReply' WHERE  C_id = '$selectCom' ";
$result3= mysqli_query($connection, $update);
alert("reply send");
}
*/

?>




</html>