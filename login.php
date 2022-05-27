<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول لموقع شركة التقنية للمواد العازلة</title>
    <style>
        div {
            top:200px;
            position: relative;
            background: red;
            width: 33%;
            left: 33%;
        }
        input
         {
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
    <?php
    session_start();
    session_unset();
    session_destroy();
    ?>
</head>

<body>
    <div>
        <form action="fun/logintest.php" method="post" >
            <input type="text" name="n1" placeholder="اكتب اسم المستخدم">
            <label>اسم المستخدم</label><br />
            <input type="password" name="n2" placeholder="ادخل الرقم السري">
            <label>كلمة السر</label><br />
            <input style="width: 100%;" type="submit" name="" value="ارسال">
        </form>
        <center>
        <a href="adduser.php">ليس لديا حساب </a>
        <a href="index.php"><button>رجوع</button></a>
    </center>
    </div>
</body>

</html>