<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
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

            <div class="mb-3">
                <label for="email" class="form-label">เลขบัตรประชาชน</label>
                <input type="text" class="form-control" pattern="^[0-9]{13}$" title="กรุณากรอกเลขประจำตัวประชาชน 13 หลัก" name="personal_id" id="personal_id" aria-describedy="personal-id" maxlength="13">
            </div>
            <div class="mb-3">
                <label for="first name" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" name="fname" aria-describedy="fname">
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" name="lname" aria-describedy="lname">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">อีเมลล์</label>
                <input type="email" class="form-control" name="email" aria-describedy="email">
            </div>
            <div class="mb-3">
                <label for="phone number" class="form-label">เบอร์โทรศัพท์</label>
                <input type="tel" pattern="^[0-9]{10}$" title="กรุณากรอกเฉพาะเบอร์เท่านั้น" class="form-control" name="phone" maxlength="10">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label for="confirm password" class="form-label">ยืนยันรหัสผ่าน</label>
                <input type="password" class="form-control" name="cfpassword">
            </div>
            <button type="submit" name="signup" class="btn btn-primary">sign up</button>

            <p>คลิกเพื่อ เข้าสู่ระบบ <a href="/views/signin.php">Sign in</a></p>
        </form>
        <hr>
    </div>
</body>

</html>