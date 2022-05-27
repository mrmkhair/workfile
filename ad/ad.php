<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    الادارة
    <a href="shuser.php?n1="><button> البحث فى المستخدمين </button></a><br/>
    <a href="fileadd.php"><button>  اضافة ملف  </button></a><br/>
    <a href="search.php"><button>  البحث والتعديل   </button></a>
   <form action="admin.php" method="POST">
    <select name="wlag">
        <option value="ar">ar</option>
        <option value="en">en</option>
    </select>
    <input type="submit">
  </form>
</body>
</html>