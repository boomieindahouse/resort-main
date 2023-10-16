<?php 
    session_start();
    require_once "connect.php";
    
    if (isset($_POST['addemp'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cfpassword = $_POST['cfpassword'];
        $phone = $_POST['phone'];
        $permiss_id = $_POST['permiss_id'];
        $personal_id = $_POST['personal_id'];
        $img = $_FILES['img'];

        $allow = array('jpg', 'jpeg', 'png');
        $extension = explode(".", $img['name']);
        $fileActExt = strtolower(end($extension));
        $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
        $filePath = 'uploads/user_img/'.$fileNew;

        if (in_array($fileActExt, $allow)) {
            if($img['size'] > 0 && $img['error'] == 0) {
                if (move_uploaded_file($img['tmp_name'], $filePath)) {
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $sql = $conn->prepare("INSERT INTO users(fname, lname, email, password, phone, permiss_id, personal_id, img) 
                                            VALUES(:fname, :lname, :email, :password,  :phone, :permiss_id, :personal_id, :img)");
                    $sql->bindParam(":fname", $fname);
                    $sql->bindParam(":lname", $lname);
                    $sql->bindParam(":email", $email);
                    $sql->bindParam(":password", $passwordHash);
                    $sql->bindParam(":phone", $phone);
                    $sql->bindParam(":permiss_id", $permiss_id);
                    $sql->bindParam(":personal_id", $personal_id);
                    $sql->bindParam(":img", $fileNew);
                    $sql->execute();

                    if ($sql) {
                        $_SESSION['success'] = "เพิ่มผู้ใช้งานเรียบร้อยแล้ว";
                        header("location: /admin/employee");
                    } else {
                        $_SESSION['error'] = "ไม่สามารถเพิ่มผู้ใช้งานได้";
                        header("location: /admin/employee");
                    }
                }
            }
        }
}
?>