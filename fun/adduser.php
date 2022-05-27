<?php
include ('../connect.php');
$wname=$_POST['wname'];
$wdate=$_POST['wdate'];
$wusername=$_POST['wusername'];
$sql="SELECT * FROM wuser WHERE wusername='$wusername'";
$result=$conn->query($sql);
while($row = $result->fetch_assoc()) {
$count = $result->num_rows;
}
if($count >0) {
   header('location:http://localhost/workfile/adduser.php?q1=1');
   exit();
}
$wpassword=$_POST['wpassword'];
$wpassword2=$_POST['wpassword2'];
if($wpassword !==$wpassword2){
    header('location:http://localhost/workfile/adduser.php?q1=2');
    exit();
 }
$wtele=$_POST['wtele'];
$wsex=$_POST['wsex'];
$wcountry=$_POST['wcountry'];
$sql="INSERT INTO wuser (wname , wdate , wusername , wpassword , wtele , wsex , wcountry , status)
              VALUES ('$wname','$wdate','$wusername','$wpassword','$wtele','$wsex','$wcountry','mustakhdem')";
$result=$conn->query($sql);
header('location:http://localhost/workfile/index.php');
?>