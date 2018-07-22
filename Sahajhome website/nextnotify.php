<?php
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
<center><h3>Notifications:</h3>
</center>

<?php

$division=$_SESSION['choice2']; 

$dist=$_SESSION['choice3']; 




?>



<?php

 
$show = "SELECT * FROM  `notification` WHERE  D_id='$division' and Dis_id='$dist' ORDER BY N_id DESC";
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


header('location:nextnotify.php');
}

?>



