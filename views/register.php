<?php 
   include_once("server.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Project</h1>

    <form action="/register_db" method="post">
        <div class="input-info">
            <label for="personal_id">เลขบัตรประชาชน</label>
            <input type="personal_id" name="personal_id">
        </div>
        <div class="input-info">
            <label for="passwords">รหัสผ่าน</label>
            <input type="password" name="passwords">
        </div>
        <div class="input-info">
            <label for="FirstName">ชื่อจริง</label>
            <input type="fname" name="fname">
        </div>
        <div class="input-info">
            <label for="LastName">นามสกุล</label>
            <input type="lname" name="lname">
        </div>
        <div class="input-info">
            <label for="Email">อีเมลล์</label>
            <input type="email" name="Email">
        </div>
        <div class="input-info">
            <input type="submit" name="reg_id" value="Sign in" >
        </div>
        <p>คลิกเพื่อ เข้าสู่ระบบ<a href="login.php">Login</a></p>
        
    </form>
</body>
</html>