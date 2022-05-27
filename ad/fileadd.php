<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الاضافة</title>
</head>
<body>
    <form action="fun/addfile.php" method="POST" enctype="multipart/form-data">
        <label>موجه الى</label><br/>
        <select name="wto">
            <option>الجمهور</option>
            <option>الموظفين</option>
            <option>الادارة</option>
        </select><br/>
        <label>النوع</label><br/>
        <select name="wtype">
            <option>صادر</option>
            <option>وارد</option>
        </select><br/>
        <label>العنوان</label><br/>
        <input type="" name="wtitle"><br/>
        <label>الموضوع</label><br/>
        <textarea name="wsubject"></textarea><br/>
        <input type="file" name="wattachment"><br/>
        <input type="submit" value="ارسال">
    </form>
   
</body>
</html>