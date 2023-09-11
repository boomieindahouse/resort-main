<?php
  
    session_start();
    require_once 'server.php';

    if (isset($_POST['signup'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cfpassword = $_POST['cfpassword'];
        //$role = 'user'

        if (empty($fname)) {
            $_SESSION['error'] = 'Please enter your first name';
            header("location: signup.php");
        } else if (empty($lname)) {
            $_SESSION['error'] = 'Please enter your last name';
            header("location: signup.php");
        } else if (empty($phone)) {
            $_SESSION['error'] = 'Please enter your phone number';
            header("location: signup.php");
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = 'type of email is incorrect';
            header("location: signup.php");
        } else if (empty($password)) {
            $_SESSION['error'] = 'Please enter your password';
            header("location: signup.php");
        } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
            $_SESSION['error'] = 'Password must be 5-20 characters';
            header("location: signup.php");
        } else if (empty($cfpassword)) {
            $_SESSION['error'] = 'Please confirm your password';
            header("location: signup.php");
        } else if ($password != $cfpassword) {
            $_SESSION['error'] = 'Password is not match, please try again';
            header("location: signup.php");
        } else {
            try {
                $check_email = $conn->prepare("SELECT email FROM users WHERE email = :email");
                $check_email->bindParam(":email", $email);
                $check_email->execute();
                $row = $check_email->fetch(PDO::FETCH_ASSOC);

                if (row['email'] == $email){
                    $_SESSION['warning'] = "This email is unavailable <a href='signin.php'>Click here</a> to sing in";
                    header("location: signup.php");
                }else if(!isset($_SESSION['error'])){
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("INSERT INTO users(fname, lname, phone, email, password) 
                                            VALUE(:fname, :lname, :phone, :email, :password)");
                    $stmt->bindParam(":fname, $fname");
                    $stmt->bindParam(":lname, $lname");
                    $stmt->bindParam(":phone, $phone");
                    $stmt->bindParam(":email, $email");
                    $stmt->bindParam(":password, $passwordHash");
                    $stmt->execute();
                    $_SESSION['success'] = "Sign up completely! <a href='singup.php' class='alert-link'>Click here</a>for sign in";
                    header("location: signup.php");
                } else {
                    $_SESSION['error'] = "We found something wrong"
                    header("location: signup.php");
                }

            } catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }


?>