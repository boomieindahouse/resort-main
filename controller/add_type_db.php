<?php 
    session_start();
    require_once "connect.php";
    
    if (isset($_POST['addtype'])) {
        $typename = $_POST['typename'];
        $price = $_POST['price'];

        $allow = array('jpg', 'jpeg', 'png');
        $extension = explode(".", $img['name']);
        $fileActExt = strtolower(end($extension));
        $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
        $filePath = 'uploads/user_img/'.$fileNew;

        if (in_array($fileActExt, $allow)) {
            if($img['size'] > 0 && $img['error'] == 0) {
                if (move_uploaded_file($img['tmp_name'], $filePath)) {
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $sql = $conn->prepare("INSERT INTO users(typename, price) 
                                            VALUES(:typename, :price)");
                    $sql->bindParam(":typename", $typename);
                    $sql->bindParam(":price", $price);
                    $sql->execute();

                    if ($sql) {
                        $_SESSION['success'] = "เพิ่มประเภทห้องเรียบร้อยแล้ว";
                        header("location: /admin/room");
                    } else {
                        $_SESSION['error'] = "ไม่สามารถเพิ่มประเภทห้องได้";
                        header("location: /admin/room");
                    }
                }
            }
        }
}
?>