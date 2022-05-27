<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>اعدادات الموقع </h3>

<div class="container">
<?php

  include ('../connect.php');
   $wlag = $_POST['wlag'];
  $sql="SELECT * FROM winfo WHERE wlag='$wlag'";
    $result=$conn->query($sql);
    while($row = $result->fetch_assoc()){
       
        ?>
    <form action="fun/updateinfo.php" method="POST" enctype="multipart/form-data">
    <label for="fname"> اللغة</label>
    <input style="display: none;" type="text" id="fname" name="wlag" value="<?php echo $row['wlag'] ?>">
    <input style="display: none;" type="text" id="fname" name="oldwimg" value="<?php echo $row['wimg'] ?>">
  
    <label for="fname"> اسم الموقع</label>
    <input type="text" id="fname" name="wname" value="<?php echo $row['wname'] ?>">
    <label for="fname"> السطر الاول</label>
    <input type="text" id="fname" name="wline1" value="<?php echo $row['wline1'] ?>">
    <label for="fname">السطر الثانى </label>
    <input type="text" id="fname" name="wline2" value="<?php echo $row['wline2'] ?>">
    <label for="fname">االسطر الثالث </label>
    <input type="text" id="fname" name="wline3" value="<?php echo $row['wline3'] ?>">
    <label for="fname">السطر الرابع </label>
    <input type="text" id="fname" name="wline4" value="<?php echo $row['wline4'] ?>">
    <label for="fname">السطر الخامس </label>
    <input type="text" id="fname" name="wline5" value="<?php echo $row['wline5'] ?>">
    <label for="fname">دخول </label>
    <input type="text" id="fname" name="wbutn1" value="<?php echo $row['wbutn1'] ?>">
    <label for="fname">تسجيل </label>
    <input type="text" id="fname" name="wbutn2" value="<?php echo $row['wbutn2'] ?>">
    <label for="fname">الموقع </label>
    <input type="text" id="fname" name="wbutn3" value="<?php echo $row['wbutn3'] ?>">
    <label for="fname">الشخصي </label>
    <input type="text" id="fname" name="wbutn4" value="<?php echo $row['wbutn4'] ?>">
    <label for="fname">صورة الموقع </label>
    <input type="file" id="fname" name="wimg" >
   
    <input type="submit" value="تحديث">
  </form>
  <?php } ?>
</div>

</body>
</html>
