<?php
// เรียกใช้ไฟล์เชื่อมต่อกับฐานข้อมูล
session_start();
require_once "connect.php";


if (isset($_POST['addbooking'])) {
    $room_id = $_POST['room_id'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $room_count = $_POST['room_count'];
    $customer_card = $_POST['customer_card'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $car_num = $_POST['car_num'];
   

    // คำนวณค่าอื่น ๆ ที่เกี่ยวข้องกับการจองห้องพัก (เช่น ค่าใช้จ่ายอื่น ๆ) ตรวจสอบค่าที่รับจากฟอร์มและปรับปรุงตามความต้องการ

    // ใส่ข้อมูลการจองลงในฐานข้อมูล
    $sql = $conn->prepare("INSERT INTO booking (room_id, start_date, end_date,room_count ,customer_card,fname, lname,phone, car_num) VALUES (:room_id,:start_date, :end_date,:room_count ,:customer_card,:fname, :lname,:phone, :car_num)");
    $sql->bindParam(":room_id", $room_id);
    $sql->bindParam(":start_date", $start_date);
    $sql->bindParam(":end_date", $end_date);
    $room_count = $_POST['room_count'];
    $sql->bindParam(":fname", $fname);
    $sql->bindParam(":lname", $lname);
    $phone = $_POST['phone'];
    $sql->bindParam(":car_num", $car_num);
    

    // ทำการจองห้องพัก
    if ($sql->execute()) {
        // การจองสำเร็จ
        echo "การจองห้องพักสำเร็จ!";
        // คุณสามารถเพิ่มการแสดงข้อความหรือลิงก์ไปหน้าอื่นที่คุณต้องการที่นี่
    } else {
        // การจองล้มเหลว
        echo "การจองห้องพักล้มเหลว!";
        // คุณสามารถเพิ่มการแสดงข้อความหรือลิงก์ไปหน้าอื่นที่คุณต้องการที่นี่
    }
}
?>
