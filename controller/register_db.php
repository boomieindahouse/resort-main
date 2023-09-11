<?php
    session_start();
    include('server.php');
    $error = array();

    if (isset($_POST['reg_id'])) {
    $personal_id = $_POST['personal_id'];
    $passwords = $_POST['passwords'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    
    if (empty($personal_id)) {
        $_SESSION['error'] = 'Please enter your personal_id';
        header("location: /signup");
        exit;
    } else if (empty($passwords)) {
        $_SESSION['error'] = 'Please enter your passwords';
        header("location: /signup");
        exit;
    } else if (empty($fname)) {
        $_SESSION['error'] = 'Please enter your first name';
        header("location: /signup");
        exit
    } else if (empty($lname)) {
        $_SESSION['error'] = 'Please enter your last name';
        header("location: /signup");
        exit;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'Please enter your email';
        header("location: /signup");
        exit;
    } 
    /*
    if (isset($_POST['reg_id'])){
        $cardid = mysqli_real_escape_string($conn,$_POST['personal_id']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $FirstName = mysqli_real_escape_string($conn,$_POST['fname']);
        $LastName = mysqli_real_escape_string($conn,$_POST['lname']);
        $Email = mysqli_real_escape_string($conn,$_POST['email']);
    */

    if(empty($cardid)){
        array_push(error,"username required");
    }

    }

    $users_check_query = "SELECT * FROM users WHERE personal_id = '$cardid'";
    $query = mysqli_query($conn,$cardid_check_query);
    $result = mysqli_fetch_assoc($query);

    if($result){
        if ($result['personal_id']=== $cardid){
            array_push($error, "id wrong");
        }
    }

    if(count($error) == 0){
        $sql = "INSERT INTO users (personal_id,password,fname,lname,email) VALUES ('personal_id','password','fname','lname','email',)";
        mysqli_query($conn, $sql);
        $_SESSION['cardid'] = $personal_id;
        $_SESSION['succes'] = "You are logged in";
        header('location:index.php');
    }
    
?>
