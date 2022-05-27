<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> صفحة ادارة مستخدم</title>
    <style>
        div {
            top: 20px;
            position: relative;
            background: red;
            width: 33%;
            left: 33%;
        }

        input {
            position: relative;
            width: 66%;
            font-size: 28px;
        }

        label {
            position: relative;
            width: 34%;
            font-size: 28px;
        }
    </style>
</head>

<body>

      <div>
        <label>اضافة مستخدم جديد</label><br />
        <center>
        <?php
        $q1=$_GET['q1'];
        if($q1 == 1){
            echo " اسم المستخدم مسجل مسبقا"; 
        }
        if($q1 == 2){
            echo "  كلمتى السر غير متطابقتين ";  
        }

        ?>
        </center>
        <form action="fun/adduser.php" method="post">
            <input type="text" name="wname" placeholder="اكتب الاسم ">
            <label>الاسم </label><br />
            <input type="date" name="wdate" placeholder="ادخل الرقم السري">
            <label> تاريخ الميلاد</label><br />
            <input type="text" name="wusername" placeholder="اكتب اسم المستخدم">
            <label>اسم المستخدم </label><br />
            <input type="password" name="wpassword" placeholder="ادخل الرقم السري">
            <label>كلمة السر</label><br />
            <input type="password" name="wpassword2" placeholder="اعادة ادخال الرقم السري">
            <label>اعادة كلمة السر</label><br />
            <input type="tel" name="wtele" placeholder="ادخل رقم الهاتف">
            <label>رقم الهاتف </label><br />
            <label style="width: 50px;"> الجنس </label>
            <input style="width: 50px;" type="radio" name="wsex" value="ذكر" checked="checked">
            <label style="width: 50px;">ذكر </label>
            <input style="width: 50px;" type="radio" name="wsex" value="انثى">
            <label style="width: 50px;"> انثى </label><br />

            <select style="width: 75%;" font-size: 28px; name="wcountry" >
                <option></option>
                <option value="EGYPT">EGYPT</option>
                <option value="IRAQ">IRAQ</option>
                <option value="SAUDIA">SAUDIA</option>
            </select>
            <label style="width: 25%;"> الدولة </label><br />
            <input style="width: 100%;" type="submit" name="" value="ارسال">
        </form>
    </div>
</body>

</html>