<?php
session_start();
include 'connect.php';

$sql = "SELECT
r.room_id,
rt.name AS type_name,
rd.zone,
rt.price,
r.room_status
FROM
room r
JOIN
room_details rd ON r.room_detail_id = rd.room_detail_id
JOIN
room_type rt ON rd.room_type_id = rt.room_type_id";
    $stmt = $conn -> query($sql);
    $stmt -> execute();
    $result = $stmt ->fetchAll(PDO::FETCH_ASSOC);
    //  print_r($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Room</title>
  <link rel="stylesheet" href="/styles/testdashboard.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body>
  <!-- popupModal -->
  <?php include("addroom_modal.php") ?>

  <div class="containerbox">
    <!--Sidebar-->
    <?php include("./component/sidebar.php") ?>

    <!--content-->
    <div class="room-content">
      <div class="header">
        <div class="header-left">
          <h3>Rooms Manage</h3>
        </div>
        <div class="header-right">
          <div class="calendar">
            <input type="date" name="" id="" />
          </div>
        </div>
      </div>

      <div class="room-status">
        <div class="ct-left">
          <button>All Status</button>
          <button>Available</button>
          <button>Sold out</button>
        </div>
        <div class="ct-right">
          <div class="dropdown-status">
            <button class="dropbtn">Sort by</button>
            <div class="dropdown-content">
              <a href="#">Oldest</a>
              <a href="#">Newest</a>
            </div>
          </div>
          <button type="button" class="btn-primary" data-bs-toggle="modal" data-bs-target="#roomModal">Add New Room</button>
          <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userModal">Add Room</button> -->
        </div>
      </div>

      <div class="room-cont">
      <div class="row justify-content-center">
        <div class="col-md-8">
              <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">หมายเลขห้อง</th>
                    <th scope="col">ประเภทห้อง</th>
                    <th scope="col">โซน</th>
                    <th scope="col">ราคา</th>
                    <th scope="col">สถานะ</th>
                    <th scope="col">จัดการข้อมูล</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($result as $val) { ?>
                  <tr>
                    <th scope="row"><?php echo $val['room_id']?></th>
                    <td><?php echo $val['type_name']?></td>
                    <td><?php echo $val['zone']?></td>
                    <td><?php echo $val['price']?></td>
                    <td><?php echo $val['room_status']?></td>
                    <td><button type="button" class="btn-primary" data-bs-toggle="modal" data-bs-target="#roomModal">view</button></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
        </div>    
      </div>
      </div>

      <div class="footer">
        <p style="color: white; font-size: 14px;">
          <!-- Cightpyrop © Designed & Developed by Boomieindahouse 2023 -->
        </p>
      </div>
    </div>
  </div>

  <script src="./script/modal.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>