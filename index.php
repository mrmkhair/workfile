<!DOCTYPE html>
<html>

<head>
<?php
include ('connect.php');
    error_reporting(0);
    session_start();
        if(is_null($_GET['wlag'])){
        $wlag='ar';
    }else{
        $wlag=$_GET['wlag'];
    }
    $sql0="SELECT * FROM winfo WHERE wlag='$wlag' ";
    $result0=$conn->query($sql0);
    while($row0 = $result0->fetch_assoc()){
   ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row0['wname'] ?></title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <a href="index.php?wlag=en"><button>   انجليزي  </button></a>
    <a href="index.php?wlag=ar"><button>   عربي   </button></a>
    <center>
        <h1><?php echo $row0['wline1'] ?></h1>
        <h2 class="haa" style="background: rgb(117, 3, 248);"><?php echo $row0['wline2'] ?></h2>
        <h2 class="haa" style="background: red;"><?php echo $row0['wline3'] ?></h2>
            <a href="https://technicalinsulation.000webhostapp.com/" target="_blank"> <button><?php echo $row0['wbutn1'] ?> </button></a>
            <a href="https://mrmkhair.000webhostapp.com/" target="_blank">  <button> <?php echo $row0['wbutn2'] ?>  </button></a>
        <?php
if(isset($_SESSION['usernameworkfile'])){
    $n1= $_SESSION['usernameworkfile'];
    $sql="SELECT * FROM wuser WHERE wusername='$n1'";
    $result=$conn->query($sql);
    while($row = $result->fetch_assoc()){
        $status=$row['status'];
        echo $status
        ?>
    <p><?php echo  "welcome mr ". $row['wname'];  ?></p>
   
    <a href="login.php?q1="> <button>    <?php echo $row0['wbutn3'] ?>   </button></a>
    <a href="  <?php if ($status=='mustakhdem'):?>
            us/us.php
            <?php endif ?>
            <?php if ($status=='muthaf'):?>
           em/em.php
            <?php endif ?>
            <?php if ($status=='muder'):?>
            ad/ad.php
            <?php endif ?>"> 
            <button>  <?php echo $row0['wbutn4'] ?> </button></a>
        
<?php
}}else
{?>
            <a  id="id1" href="login.php"> <button><?php echo $row0['wbutn2'] ?> </button></a>
            <a href="adduser.php" >  <button><?php echo $row0['wbutn2'] ?> </button></a>
        <?php
}?>
        <br />
        <img src="ad/file/<?php echo $row0['wimg'] ?>" alt=" لوجو شركةالتقنية للموادالعازلة" title="شركة التقنية للمواد العازلة" />
        <p>
        <?php echo $row0['wline5'] ?>
        </p>

    </center>
    
</body>
<?php } ?>
</html>