<?php
session_start();
require_once('connect.php');

if (isset($_POST['submit'])) {
    $name_list = $_POST['name_list'];
    $price = $_POST['price'];


    // สร้างคำสั่ง SQL เพื่อเพิ่มรายการลงในฐานข้อมูล
    $sql = "INSERT INTO expenses (name_list, price) VALUES (:name_list, :price)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':name_list', $name_list);
    $stmt->bindValue(':price', $price);

    if ($stmt->execute()) {
        // เพิ่มรายการสำเร็จ
        $_SESSION['success'] = 'เพิ่มรายการเรียบร้อยแล้ว';
        header("location: /admin/expense");
        exit;
    } else {
        // เพิ่มรายการไม่สำเร็จ
        $_SESSION['error'] = 'ไม่สามารถเพิ่มรายการได้';
        header("location: /admin/expense");
        exit;
    }
}
