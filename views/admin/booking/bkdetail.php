<?php
session_start();
include('connect.php');

// ดึงข้อมูลการจองห้องพักจากฐานข้อมูล
$sql = "SELECT * FROM booking";
$stmt = $conn->prepare($sql);
$stmt->execute();
$bookings = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายละเอียดการจองห้องพัก</title>
    <link rel="stylesheet" href="/styles/your_styles.css">
</head>
<body>
    <h1>รายละเอียดการจองห้องพัก</h1>
    <table>
        <thead>
            <tr>
                <th>รหัสการจอง</th>
                <th>ประเภทห้อง</th>
                <th>วันที่เช็คอิน</th>
                <th>วันที่เช็คเอ้าท์</th>
                <th>จำนวนห้อง</th>
                <th>เลขบัตรประชาชน</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>เบอร์โทรศัพท์</th>
                <th>ประเภทรถ</th>
                <th>ป้ายทะเบียน</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bookings as $booking) { ?>
                <tr>
                    <td><?php echo $booking['booking_id']; ?></td>
                    <td><?php echo $booking['room_type']; ?></td>
                    <td><?php echo $booking['check_in_date']; ?></td>
                    <td><?php echo $booking['check_out_date']; ?></td>
                    <td><?php echo $booking['num_rooms']; ?></td>
                    <td><?php echo $booking['id_card']; ?></td>
                    <td><?php echo $booking['first_name']; ?></td>
                    <td><?php echo $booking['last_name']; ?></td>
                    <td><?php echo $booking['phone']; ?></td>
                    <td><?php echo $booking['car_type']; ?></td>
                    <td><?php echo $booking['license_plate']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
