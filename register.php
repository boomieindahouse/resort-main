<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Project</h1>

    <form action="test.db" method="post">
        <div class="input-info">
            <label for="cardid">เลขบัตรประชาชน</label>
            <input type="text" name="cardid">
        </div>
        <div class="input-info">
            <label for="passwords">รหัสผ่าน</label>
            <input type="password" name="passwords">
        </div>
        <div class="input-info">
            <label for="FirstName">ชื่อจริง</label>
            <input type="text" name="FirstName">
        </div>
        <div class="input-info">
            <label for="LastName">นามสกุล</label>
            <input type="text" name="LastName">
        </div>
        <div class="input-info">
            <label for="Email">อีเมลล์</label>
            <input type="text" name="Email">
        </div>
        <div class="input-info">
            <button type="submit" name="reg_id" class ="btn" >Register</button>
        </div>
        <p>คลิกเพื่อ เข้าสู่ระบบ<a href="login.php">Login</a></p>
        
    </form>
</body>
</html>