<?php 
    session_start();
    include 'connect.php';

    $sql = "SELECT * FROM room";
    $stmt = $conn -> query($sql);
    $stmt -> execute();
    $result = $stmt ->fetchAll(PDO::FETCH_ASSOC);
    print_r($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <p>SSOSS</p>
    
</body>
</html>