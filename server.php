<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "resnewdb";

    $_conn = mysqli_connect($servername, $username,$password,$dbname);

    
    if(!$_conn){
        die("connection failed".mysqli_connect_error());
    }else{
        echo "connected successdully";
    }
?>