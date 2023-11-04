<?php
session_start();
require_once "connect.php";

if (isset($_POST['addroom'])) {
    $room_id = $_POST['room_id'];
    $room_status = $_POST['room_status'];
    $room_detail_id = $_POST['room_detail_id'];

    // You can add additional fields related to rooms as needed

    $sql = $conn->prepare("INSERT INTO room(room_id, room_status, room_detail_id, user_id) 
                            VALUES(:room_id, :room_status, :room_detail_id)");
    $sql->bindParam(":room_id", $room_id);
    $sql->bindParam(":room_status", $room_status);
    $sql->bindParam(":room_detail_id", $room_detail_id);

    $sql->execute();

    if ($sql) {
        $_SESSION['success'] = "เพิ่มห้องพักเรียบร้อยแล้ว";
        header("location: /views/admin/room"); // Redirect to the room management page
    } else {
        $_SESSION['error'] = "ไม่สามารถเพิ่มห้องพักได้";
        header("location: /views/admin/room"); // Redirect to the room management page
    }
}
?>
