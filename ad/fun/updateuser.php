<?php
include ('../../connect.php');
$status=$_POST['status'];
$wid=$_POST['wid'];
$sql="UPDATE wuser SET status='$status' where wid='$wid'";

$result=$conn->query($sql);
header('location:http://localhost/workfile/ad/shuser.php?n1=');
?>