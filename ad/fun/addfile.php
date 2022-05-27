<?php
session_start();
include ('../../connect.php');
$wto=$_POST['wto'];
$wtype=$_POST['wtype'];
$wuser=$_SESSION['usernameworkfile'];
$wtime=date('y-m-d');
$wtitle=$_POST['wtitle'];
$wsubject=$_POST['wsubject'];
$wattachment=$_FILES['wattachment']['name'];
$wattachmenttmp=$_FILES['wattachment']['tmp_name'];
$upload_file='../file/';
move_uploaded_file($wattachmenttmp,$upload_file.$wattachment);
$sql="INSERT INTO wfile (wto , wtype , wuser , wtime , wtitle , wsubject , wattachment )
              VALUES ('$wto','$wtype','$wuser','$wtime','$wtitle','$wsubject','$wattachment')";
$result=$conn->query($sql);
header('location:http://localhost/workfile/ad/fileadd.php');
?>