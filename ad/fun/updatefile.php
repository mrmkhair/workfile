<?php
session_start();
include ('../../connect.php');

$wid=$_POST['wid'];
$wto=$_POST['wto'];
$wtype=$_POST['wtype'];
$wuser=$_SESSION['usernameworkfile'];
$wtime=date('y-m-d');
$wtitle=$_POST['wtitle'];
$wsubject=$_POST['wsubject'];
$wattachment=$_FILES['wattachment']['name'];
if($wattachment== NULL){
    $wattachment=$_POST['wold'];
}else{
  unlink("../file/".$_POST['wold']);
 $wattachmenttmp=$_FILES['wattachment']['tmp_name'];
 $upload_file='../file/';
 move_uploaded_file($wattachmenttmp,$upload_file.$wattachment);
}

$sql="UPDATE wfile SET 
wto='$wto',
wtype='$wtype',
wuser='$wuser',
wtime='$wtime',
wtitle='$wtitle',
wsubject='$wsubject',
wattachment='$wattachment'
 WHERE wid='$wid'";

$result=$conn->query($sql);
header('location:http://localhost/workfile/ad/search.php');
?>