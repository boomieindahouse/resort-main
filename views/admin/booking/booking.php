<?php
    session_start();
    require_once("connect.php");
?>
<!DOCTYPE html>
<link rel="stylesheet" href="/styles/booking.css">
<html>
<head>
    <title>จองห้องพัก</title>
</head>
<body>

    <form id="reserveRoomForm" action="/add_booking_db" method="post" enctype="multipart/form-data">
        <h1>ฟอร์มการจองห้องพัก</h1>
        <label for="room_id">ประเภทห้อง</label>
        <select name="room_type" id="room_type">
                <?php
                $sql = $conn->prepare("SELECT * FROM room_type");
                $sql->execute();
                $roomTypes = $sql->fetchAll();

                foreach ($roomTypes as $roomType) {
                    echo "<option value='" . $roomType['room_type_id'] . "'>" . $roomType['name'] . "</option>";
                }
                ?>
            </select>

        <!-- เลือกวันที่เช็คอิน -->
        <label for="check_in_date">วันที่เช็คอิน:</label>
            <input type="date" name="check_in_date" id="check_in_date"/>

          <!-- เลือกวันที่เช็คเอ้าท์ -->
          <label for="check_out_date">วันที่เช็คเอ้าท์:</label>
            <input type="date" name="check_out_date" id="check_out_date"/>

            <!-- จำนวนห้องที่ต้องการจอง -->
            <label for="num_rooms">จำนวนห้องที่ต้องการจอง:</label>
            <input type="number" name="num_rooms" id="num_rooms"/><br>

         <!-- ข้อมูลผู้จอง -->
         <h2>ข้อมูลผู้จอง</h2>
            <label for="id_card">เลขบัตรประชาชน:</label>
            <input type="text" maxlength="13" name="customer_card" id="customer_card"/>

            <label for="first_name">ชื่อ:</label>
            <input type="text" name="fname" id="fname"/>

            <label for="last_name">นามสกุล:</label>
            <input type="text" name="lname" id="lname"/>

            <label for="phone">เบอร์โทรศัพท์:</label>
            <input type="text" name="phone" id="phone"/>

            <!-- ข้อมูลรถ (ตัวเลือก) -->
            <h2>ข้อมูลรถ</h2>
            <label for="car_type">ประเภทรถ:</label>
            <select name="car_type" id="car_type">
            <option value="">please select</option>
            <option value="">รถเก๋ง</option>
            <option value="">รถกระบะ</option>
            <option value="">ไม่มี</option>
            </select>

            <label for="license_plate">ป้ายทะเบียน:</label>
            <input type="text" name="car_num" id="car_num"/>

            <button type="submit" name="addbooking">ยืนยันการจอง</button>
    </form>
</body>
</html>
