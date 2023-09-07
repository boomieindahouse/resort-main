<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Project</h1>

  
    <form action="test.db">
        <div class="input-info">
            <label for="cardid">เลขบัตรประชาชน</label>
            <input type="text" name="cardid">
        </div>
        <div class="input-info">
            <label for="passwords">รหัสผ่าน</label>
            <input type="password" name="passwords">
        </div>
        <input type="button" value="LOGIN" name="log_id" >
        <p>คลิกเพื่อ ลงทะเบียน<a href="register.php">Register</a></p>
        
    </form>
</body>
</html>