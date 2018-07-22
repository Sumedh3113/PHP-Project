<?php
//session_start();
require_once('connect.php');
include('lock.php');
//session_start();
?>
<html><head>
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
</head>


<div style="float:left; margin-top: -30px;background-color: green; ">
<img src="logo.jpg" alt="Sahaj Icon" style="width:120px;height:120px;margin: 0px;padding: 0px;display: block;border: none;vertical-align: text-bottom;">
</div>

<div style="margin-top: 40px; margin-right: 40px; ">
<center>
<a href="home1.php">Complaints</a>
<a href="notification.php">Notifications</a>
<a href="feedback.php" id="fb">feedback</a>
<a href="pending.php" id="pd">Pending</a>
<a href="report.php" id="rp">Report</a>
<a href="index.php" style='text-align:center'>Logout</a>
<br>
</center>
<hr>
<center><h3>New Complaints:</h3>
</center>

<?php

$division=$_SESSION['choice']; 

$dist=$_SESSION['choice1']; 

/*Before upload set status=0*/

$sql = "SELECT *  FROM  `complaints`  WHERE STATUS =0 and D_id='$division' and Dis_id='$dist' ";
	$result = mysqli_query($connection, $sql);
	$count = mysqli_num_rows($result);



?>



<?php
while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
$date = date('j F, Y', strtotime($row['date']));     
 echo "<form method='post'><font size ='4px'>Complaint ID :{$row['C_id']}  </font><br> ".
         "<font size ='4px'>Details : {$row['details']} </font><br> ".
         "<font size ='4px'>Date : {$date} </font><br> ".
"<b>Enter Complaint Id : </b><input type='text' name='cid' ><br><br>".
"<textarea  id='txt'  rows='4' cols='50' name='detail'></textarea><br><br>".
    "<input type='submit' value='Reply' ></form>".
   "<hr/>";

 }

if(isset($_POST['cid'], $_POST['detail']) & !empty($_POST['detail']) ){
$selectCom=$_POST['cid'];
$selectReply=$_POST['detail'];

$update="UPDATE complaints SET  status =  1, reply= '$selectReply' WHERE  C_id = '$selectCom' ";
$result3= mysqli_query($connection, $update);

header('location:trial.php');
}


?>