<?php
require_once('connect.php');
//session_start();
include('lock.php');

?>


<div style="float:left; margin-top: -30px;background-color: green; ">
<img src="logo.jpg" alt="Sahaj Icon" style="width:120px;height:120px;margin: 0px;padding: 0px;display: block;border: none;vertical-align: text-bottom;">
</div>

<div style="margin-top: 40px; margin-right: 40px; ">
<center>
<a href="notification.php">Notifications</a>
<a href="home1.php" id="rp">Complaints</a>
<a href="feedback.php" id="fb">feedback</a>
<a href="pending.php" id="pd">Pending</a>
<a href="index.php" style='text-align:center'>Logout</a>
</center>
</div>
<hr>
<?php 
$selectOption ="";
$selectDist="";


if(isset($_POST['division']) & isset($_POST['district']))
{
$selectOption = $_POST['division'];
$selectDist = $_POST['district'];

}
?>


<?php

$msg = "";
$count = "NA";
$count1 = "NA";
$count2 = "NA";
$from="NA";
$to="NA";
if (isset($_POST['to']) & isset($_POST['from'])){


$from = date('Y-m-d', strtotime($_POST['from']));
$to = date('Y-m-d', strtotime($_POST['to']));

$sql3 = "SELECT * FROM complaints WHERE date  BETWEEN  '$from' AND '$to' ";
$result3 = mysqli_query($connection, $sql3);
$count3 = mysqli_num_rows($result3);

if($count3==0){
      
  $msg = "No Data is present between selected dates";
}
else{

$sql = "SELECT * FROM  `complaints` WHERE status =1 and date BETWEEN  '$from' AND '$to' and D_id='$selectOption' and Dis_id='$selectDist' ";
	$result = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($result);
	
$sql1 = "SELECT * FROM  `complaints` WHERE status =0 and date BETWEEN  '$from' AND '$to' and D_id='$selectOption' and Dis_id='$selectDist' ";
	$result1 = mysqli_query($connection, $sql1);
	$count1 = mysqli_num_rows($result1);

$sql2 = "SELECT * FROM  `complaints` WHERE status =2 and date BETWEEN  '$from' AND '$to' and D_id='$selectOption' and Dis_id='$selectDist' ";
	$result2 = mysqli_query($connection, $sql2);
	$count2 = mysqli_num_rows($result2);
	

//header('Content-Type: application/octetstream; name="file.txt"');
//header('Content-Type: application/octet-stream; name="file.txt"');
//header('Content-Disposition: attachment; filename="file.txt"');



//    header('Content-Type: text/plain');

   //header('Content-Disposition: attachment; filename="data.txt"');
   
   // echo the file contents
   // exit();


//header('Content-Disposition: attachment; filename="data.doc"');
//header("Content-Disposition: attachment; filename="data.doc");
//header("Content-Type: application/force-download");
//header("Content-Length: " . strlen(200 byte));
//header("Connection: close");
}	
}	
/*while($r = mysql_fetch_assoc($sql))*/	

?>
<!DOCTYPE html>
<html>
<head>
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
<title>Report</title>

</head>
<br>
<center>
<form action="#" method="POST">
    <table><tr><td>
      <label><b>From :</b></td><td>
        <input type="date"  name="from" />
      </label></td></tr>
        
      <tr><td><label><b>To :</b></td><td>
        <input type="date"  name="to" />
      </label></td></tr>
<tr>
<td>                           
<font size="3px"><b>Division:</b></font></td><td><select name= "division" >
<option value="0">--select--</option> 
 <option value="1" >Amravati</option>
  <option value="2">Nagpur</option>
  <option value="3">Nashik</option>
  <option value="4">Aurangabad</option>
 <option value="5">Kokan</option>
  <option value="6">Pune</option>
  </select></td>
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
    
<tr><td></td><td>
      <button class="button" type="submit">Get Report</button>
</td></tr>
    </table>
  </form>


<h2>Report:</h2>
</center>
<center>
<?php 

$sql4= "SELECT * FROM `division` WHERE D_id ='$selectOption'  ";
$result4 = mysqli_query($connection, $sql4);
$res = mysqli_fetch_array($result4, MYSQL_ASSOC);
//$div = $r['D_name'];
//and Dis_id='$selectDist'

$sql5= "SELECT * FROM `district` WHERE Dis_id ='$selectDist'  ";
$result5 = mysqli_query($connection, $sql5);
$ros = mysqli_fetch_array($result5, MYSQL_ASSOC);


$fh = fopen('data.doc', 'w');

fwrite($fh, "Report:");
fwrite($fh, "\n");
fwrite($fh, "\n");
fwrite($fh, "Division: ".$res['D_name']."\n");
fwrite($fh, "\n");
fwrite($fh, "District: ".$ros['name']."\n");
fwrite($fh, "\n");
fwrite($fh,"Start Date:  ". $from. " End Date:  ".$to);
fwrite($fh, "\n");
fwrite($fh,"Pending Complaints ".$count);
fwrite($fh, "\n");     
fwrite($fh,"Unresolved Complaints ". $count1);
fwrite($fh, "\n");
fwrite($fh,"Resolved Complaints ". $count2);

//readfile($fh);

 // $filename = tempnam(sys_get_temp_dir(), "data");
//$word->Documents[1]->SaveAs($filename);

  //header('Content-Disposition: attachment; filename="$fh"');

  //  header('Content-type: text/plain');


echo " <font size ='5px'><b>Division:<b>{$res['D_name']} </font><br><br>";
echo " <font size ='5px'><b>District:<b>{$ros['name']} </font><br>";
  ?>
<?php echo "<br><font size ='5px' color='red'> $msg </font><br><br>";?>
<?php echo " <b><font size ='5px'>Start Date:</b> $from  <b>End Date:</b> $to </font><br>";?>
<?php echo "<br><font size ='5px'>Pending Complaints $count </font>";?>
<?php echo "<br><br><font size ='5px'>Unresolved Complaints $count1 </font>"; ?>
<?php echo "<br><br><font size ='5px'>Resolved Complaints $count2 </font>";?>
<?php echo "<br><br><a href='download.php'>Download</a>";?>

<center>
</html>