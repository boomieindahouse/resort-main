<?php
session_start();
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Available Rooms</title>
    <link rel="stylesheet" href="/styles/testdashboard.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="containerbox">
        <!--Sidebar-->
    <?php include("./component/sidebar.php") ?>

        <!--content-->
        <div class="content">
            <div class="header">
                <h3>Available Rooms</h3>
            </div>

            <!-- Available Rooms Data -->
            <div class="table-responsive box" style="color: white;">
                <table id="table_available_rooms" class="table table-striped table-dark" style="width: 100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>Room Type</th>
                            <th>Available Rooms</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "
                        SELECT rt.name AS room_type, COUNT(a.room_id) AS available_rooms
                        FROM room_type rt
                        LEFT JOIN room_details rd ON rt.room_type_id = rd.room_type_id
                        LEFT JOIN room a ON rd.room_detail_id = a.room_detail_id
                        LEFT JOIN booking b ON a.room_id = b.room_id
                        WHERE a.room_id NOT IN (
                            SELECT room_id
                            FROM booking
                            WHERE CURDATE() BETWEEN start_date AND end_date
                        )
                        GROUP BY rt.name";
                        $stmt = $conn->query($sql);
                        $stmt->execute();
                        $availableRooms = $stmt->fetchAll();

                        foreach ($availableRooms as $room) {
                            echo "<tr>";
                            echo "<td>" . $room['room_type'] . "</td>";
                            echo "<td>" . $room['available_rooms'] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="footer">
                <p style="color: white; font-size: 14px;">
                    <!-- Cightpyrop © Designed & Developed by Boomieindahouse 2023 -->
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#table_available_rooms');
    </script>
</body>
</html>
