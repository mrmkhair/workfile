<?php
session_start();
include ('../../connect.php');
$wlag=$_POST['wlag'];
$wname=$_POST['wname'];
$wline1=$_POST['wline1'];
$wline2=$_POST['wline2'];
$wline3=$_POST['wline3'];
$wline4=$_POST['wline4'];
$wline5=$_POST['wline5'];
$wbutn1=$_POST['wbutn1'];
$wbutn2=$_POST['wbutn2'];
$wbutn3=$_POST['wbutn3'];
$wbutn4=$_POST['wbutn4'];
$wimg=$_FILES['wimg']['name'];
if ($wimg== NULL){
    $wimg=$_POST['oldwimg'];
}else{
  unlink("../file/".$_POST['oldwimg']);
 $wattachmenttmp=$_FILES['wimg']['tmp_name'];
 $upload_file='../file/';
 move_uploaded_file($wattachmenttmp,$upload_file.$wimg);
}
$sql="UPDATE winfo SET 
wname='$wname',
wline1='$wline1',
wline2='$wline2',
wline3='$wline3',
wline4='$wline4',
wline5='$wline5',
wbutn1='$wbutn1',
wbutn2='$wbutn2',
wbutn3='$wbutn3',
wbutn4='$wbutn4',
wimg='$wimg'
WHERE wlag='$wlag'";

$result=$conn->query($sql);
header('location:http://localhost/workfile/ad/ad.php')
?>