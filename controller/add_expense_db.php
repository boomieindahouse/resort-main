<?php
session_start();
require_once('connect.php');

if (isset($_POST['submit'])) {
    $name_list = $_POST['name_list'];
    $price = $_POST['price'];


    // สร้างคำสั่ง SQL เพื่อเพิ่มรายการลงในฐานข้อมูล
    $sql = "INSERT INTO expense (name_list, price) VALUES (:name_list, :price)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name_list', $name_list);
    $stmt->bindParam(':price', $price);

    if ($stmt->execute()) {
        // เพิ่มรายการสำเร็จ
        $_SESSION['success'] = 'เพิ่มรายการเรียบร้อยแล้ว';
    } else {
        // เพิ่มรายการไม่สำเร็จ
        $_SESSION['error'] = 'ไม่สามารถเพิ่มรายการได้';
    }
    
    header("location: your_transaction_page.php");
}
