<?php
    session_start();
    if(isset($_SESSION['admin_login'])){
        header('location: /');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    </head>

<body>
    <div class="container">
        <h3 class="mt-4">Sign in</h3>
        <hr>
        <form action="/signin_db" method="post">
        <?php if(isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger">
            <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            ?>
        </div>
        <?php } ?>
        <?php if(isset($_SESSION['success'])) { ?>
        <div class="alert alert-success">
            <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            ?>
        </div>
        <?php } ?>
        <?php if(isset($_SESSION['warning'])) { ?>
        <div class="alert alert-warning">
            <?php
                echo $_SESSION['warning'];
                unset($_SESSION['warning']);
            ?>
        </div>
        <?php } ?>

            <div class="mb-3">
                <label for="email" class="form-label">อีเมลล์</label>
                <input type="email" class="form-control" name="email" aria-describedy="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" name="signin" class="btn btn-primary">sign in</button>

            <p>คลิกเพื่อ สมัครสมาชิก <a href="/views/signup.php">Sign up</a></p>
        </form>
        <hr>
    </div>
</body>

</html>