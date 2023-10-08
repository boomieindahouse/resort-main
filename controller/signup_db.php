<?php
  
    session_start();
    //require_once 'server';
    include('connect.php');

    if (isset($_POST['signup'])) {
        $personal_id = $_POST['personal_id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $cfpassword = $_POST['cfpassword'];
        //$role = 'user'
        if (empty($personal_id)) {
            $_SESSION['error'] = 'Please enter your personal_id';
            header("location: /signup");
            exit;
        } else if (empty($fname)) {
            $_SESSION['error'] = 'Please enter your first name';
            header("location: /signup");
            exit;
        } else if (empty($lname)) {
            $_SESSION['error'] = 'Please enter your last name';
            header("location: /signup");
            exit;
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = 'type of email is incorrect';
            header("location: /signup");
            exit;
        } else if (empty($phone)) {
                $_SESSION['error'] = 'Please enter your phone number';
                header("location: /signup");
                exit;
        } else if (empty($password)) {
            $_SESSION['error'] = 'Please enter your password';
            header("location: /signup");
            exit;
        } else if (strlen($_POST['password']) < 6) {
            $_SESSION['error'] = 'Password must be 6-20 characters';
            header("location: /signup");
            exit;
        } else if (empty($cfpassword)) {
            $_SESSION['error'] = 'Please confirm your password';
            header("location: /signup");
            exit;
        } else if ($password != $cfpassword) {
            $_SESSION['error'] = 'Password is not match, please try again';
            header("location: /signup");
            exit;
        } else {
            try {
                $check_email = $conn->prepare("SELECT email FROM users WHERE email = :email");
                $check_email->bindParam(":email", $email);
                $check_email->execute();
                $row = $check_email->fetch(PDO::FETCH_ASSOC);

                if ($row['email'] == $email) {
                    $_SESSION['warning'] = "This email is unavailable <a href='signin'>Click here</a> to sing in";
                    header("location: /signup");
                    exit;
                }else if(!isset($_SESSION['error'])){
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("INSERT INTO users(personal_id, fname, lname, email, phone, password, permiss_id) 
                                            VALUES(:personal_id, :fname, :lname, :email, :phone, :password, '1')");
                    $stmt->bindParam(":personal_id", $personal_id);
                    $stmt->bindParam(":fname", $fname);
                    $stmt->bindParam(":lname", $lname);
                    $stmt->bindParam(":email", $email);
                    $stmt->bindParam(":phone", $phone);
                    $stmt->bindParam(":password", $passwordHash);
                    $stmt->execute();
                    $_SESSION['success'] = "Sign up completely!";
                    header("location: /signup");
                    exit;
                } else {
                    $_SESSION['error'] = "Something wrong";
                    header("location: /signup");
                    exit;
                }

            } catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }