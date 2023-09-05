<?php
    session_start();
    include('server.php');

    $error = array();

    if (isset($_POST['reg_id'])){
        $cardid = mysqli_real_escape_string($conn,$_POST['cardid']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $FirstName = mysqli_real_escape_string($conn,$_POST['FirstName']);
        $LastName = mysqli_real_escape_string($conn,$_POST['LastName']);
        $Email = mysqli_real_escape_string($conn,$_POST['Email']);
    
    if(empty($cardid)){
        array_push(error,"username required");
    }

    }

    $users_check_query = "SELECT * FROM users WHERE card_id = '$cardid'";
    $query = mysqli_query($conn,$cardid_check_query);
    $result = mysqli_fetch_assoc($query);

    if($result){
        if ($result['cardid']=== $cardid){
            array_push($error, "id wrong");
        }
    }

    if(count($error) == 0){
        $sql = "INSERT INTO users (card_id,password,FirstName,LastName,Email) VALUES ('cardid','password','FirstName','LastName','Email',)";
        mysqli_query($conn, $sql);
        $_SESSION['cardid'] = $cardid;
        $_SESSION['succes'] = "You are logged in";
        header('location:index.php');
    }
?>