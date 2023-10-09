<?php 
    session_start();
    require_once "connect.php";
    
    if (isset($_POST['addemp'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $permiss_id = $_POST['permiss_id'];
        $personal_id = $_POST['personal_id'];
        $img = $_FILES['img'];

        $allow = array('jpg', 'jpeg', 'png');
        $extension = explode(".", $img['name']);
        $fileActExt = strtolower(end($extension));
        $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
        $filePath = 'uploads/'.$fileNew;

        if (in_array($fileActExt, $allow)) {
            if($img['size'] > 0 && $img['error'] == 0) {
                if (move_uploaded_file($img['tmp_name'], $filePath)) {
                    $sql = $conn->prepare("INSERT INTO users(fname, lname, email, phone, permiss_id, personal_id, img) VALUES(:fname, :lname, :email, :phone, :permiss_id, :personal_id, :img)");
                    $sql->bindParam(":fname", $fname);
                    $sql->bindParam(":lname", $lname);
                    $sql->bindParam(":email", $email);
                    $sql->bindParam(":phone", $phone);
                    $sql->bindParam(":permiss_id", $permiss_id);
                    $sql->bindParam(":personal_id", $personal_id);
                    $sql->bindParam(":img", $fileNew);
                    $sql->execute();

                    if ($sql) {
                        $_SESSION['success'] = "Data has been inserted successfully";
                        header("location: /admin/employee");
                    } else {
                        $_SESSION['error'] = "Data has not been inserted successfully";
                        header("location: /admin/employee");
                    }
                }
            }
        }
}
?>