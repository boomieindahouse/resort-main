<?php 
   include_once("server.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>Project</h1>

    <form action="/signup_db" method="post">
        <?php if(isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
            </div>
        <?php } ?>
        <?php if(isset($_SESSION['success'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
            </div>
        <?php } ?>
        <?php if(isset($_SESSION['warning'])) { ?>
            <div class="alert alert-warning" role="alert">
                <?php
                    echo $_SESSION['warning'];
                    unset($_SESSION['warning']);
                ?>
            </div>
        <?php } ?>
        

        <div class="input-info">
            <input type="text" placeholder='เลขบัตรประชาชน' name="personal_id">
        </div>
        
        <div class="input-info">
            <input type="text" placeholder='ชื่อจริง' name="fname">
        </div>
        <div class="input-info">
            <input type="text" placeholder='นามสกุล' name="lname">
        </div>
        <div class="input-info">
            <input type="text" placeholder='เบอร์โทรศัพท์' name="phone">
        </div>
        <div class="input-info">
            <input type="email" placeholder='อีเมลล์' name="email">
        </div>
        <div class="input-info">
            <input type="password" placeholder='รหัสผ่าน' name="passwords">
        </div>
        <div class="input-info">
            <input type="password" placeholder='ยืนยันรหัสผ่าน' name="cfpasswords">
        </div>
        <div class="input-info">
            <input type="submit" name="signup" value="Sign in" >
        </div>
        <p>คลิกเพื่อ เข้าสู่ระบบ<a href="login.php">Login</a></p>
        
    </form>
</body>
</html>