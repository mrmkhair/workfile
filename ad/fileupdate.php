<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>التعديل</title>
</head>
<body>
<?php
  include ('../connect.php');
  $n1=$_GET['n1'];
  $sql="SELECT * FROM wfile WHERE wid='$n1' ";
    $result=$conn->query($sql);
    while($row = $result->fetch_assoc()){
        
        ?>
    <form action="fun/updatefile.php" method="POST" enctype="multipart/form-data">
    <input style="display: none;" type="" name="wid" value="<?php echo $row['wid'] ?>">
    <input style="display: none;" type="" name="wold" value="<?php echo $row['wattachment'] ?>">
        <label>موجه الى</label><br/>
        <select name="wto">
            <option><?php echo $row['wto'] ?></option>
            <option>الجمهور</option>
            <option>الموظفين</option>
            <option>الادارة</option>
        </select><br/>
        <label>النوع</label><br/>
        <select name="wtype">
        <option><?php echo $row['wtype'] ?></option>
            <option>صادر</option>
            <option>وارد</option>
        </select><br/>
        <label>العنوان</label><br/>
        <input type="" name="wtitle" value="<?php echo $row['wtitle'] ?>"><br/>
        <label>الموضوع</label><br/>
        <textarea name="wsubject"><?php echo $row['wsubject'] ?></textarea><br/>
        <input type="file" name="wattachment"><br/>
        <input type="submit" value="ارسال"><br/>
        <img src="file/<?php echo $row['wattachment'] ?>">
    </form>
   <?php } ?>
</body>
</html>