<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.php">
</head>

<body>
    <header><h1>Hello sdsdsdsd</h1></header>
    
    <div class = "content">
        <a href="./views/register.php">สมัครสมาชิก</a>
        <a href="login.php">เข้าสู่ระบบ</a>
<?php if(isset($_SESSION['succes'])); ?>
    <div class="susses">
        <h3>
            <?php
                echo $_SESSION['succes'];
                unset($_SESSION['succes']);
            ?>
        </h3>
    </div>

    </div>   
   


</body>
</html>