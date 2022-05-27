<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>البحث</title>
    <style>
        table ,tr , th ,td {
            border : 1px solid black;

        } 
    </style>
</head>
<body>
   <form><form action="shuser.php" method= "get">
   <input type=" " name ="n1">
   <input type="submit" name="">
   </form>
   <table>
   <tr>
        <th>حذف</th>
        <th>حفظ</th>
        <th>الصفة</th>
        <th>الدولة</th>
        <th>النوع</th>
        <th>التليفون</th>
        <th>كلمة السر</th>
        <th>اسم المستخدم</th>
        <th>تاريخ الصفة</th>
        <th>الاسم</th>
        <th>رقم</th>
   </tr>
   <?php

        include ('../connect.php');
        $n1=$_GET['n1'];
        $sql="SELECT * FROM wuser WHERE wusername LIKE '%$n1%' OR wname LIKE '%$n1%'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){

    ?>
   <tr>
       <td><a href="fun/deleteuser.php?n1=<?php echo $row['wid'] ?>">delete</a></td>
       <form action="fun/updateuser.php" method="post" >
       <td><input type="submit" name="" value="save" ></td>
       <input type="hidden" name="wid" value="<?php echo $row['wid'] ?>">
        <td> 
            <select name="status" >
               <option value="<?php echo $row['status'] ?>"><?php echo $row['status'] ?></option>
               <option value="muder"> muder </option>
               <option value="muthaf"> muthaf </option>
               <option value="mustakhdem"> mustakhdem </option>   
            < select>
        </td>
    </form>
       <td><?php echo $row['wcountry'] ?></td>
       <td><?php echo $row['wsex'] ?></td>
       <td><?php echo $row['wtele'] ?></td>
       <td><?php echo $row['wpassword'] ?></td>
       <td><?php echo $row['wusername'] ?></td>
       <td><?php echo $row['wdate'] ?></td>
       <td><?php echo $row['wname'] ?></td>
       <td><?php echo $row['wid'] ?></td>
   </tr>
   <?php
}
?>
   </table>
</form>
</body>
</html>