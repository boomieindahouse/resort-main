<?php
session_start();
include ('connect.php');
if (!isset($_SESSION['admin_login'])) {
  if(isset($_SESSION['user_login'])){
      header('location: /employee/dashboard');
      exit;
  }
  header('location: /signin');
  exit;
}
if (isset($_GET['delemp'])) {
  $delete_id = $_GET['delemp'];
  $deletestmt = $conn->query("DELETE FROM users WHERE user_id = $delete_id");
  $deletestmt->execute();

  if($deletestmt) {
      echo "<script>alert('ลบพนักงานที่คุณต้องการเรียบร้อยแล้ว');</script>";
      $_SESSION['success'] = "ลบพนักงานที่คุณต้องการเรียบร้อยแล้ว";
      header("refresh:2; url=/admin/employee");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Employee</title>
  <link rel="stylesheet" href="/styles/testdashboard.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body>

  <?php include("addemployee_modal.php") ?>

  <div class="containerbox">
    <!--Sidebar-->
    <?php include("./component/sidebar.php") ?>

    <!--content-->
    <div class="content">
      <div class="header">
        <div class="header-left">
          <h3>การจัดการพนักงาน</h3>
        </div>
        <div class="header-right">
          <div class="calendar">
            <input type="date" name="" id="" />
          </div>
        </div>
      </div>

      <div class="emp-status">
        <div class="ct-left">
          <!-- <button>All Status</button>
          <button>Available</button>
          <button>Sold out</button> -->
        </div>
        <div class="ct-right">
          <!-- <div class="dropdown-status">
            <button class="dropbtn">Sort by</button>
            <div class="dropdown-content">
              <a href="#">Oldest</a>
              <a href="#">Newest</a>
            </div>
          </div> -->
          <button type="button" class="btn-primary" data-bs-toggle="modal" data-bs-target="#empModal">เพิ่มพนักงาน</button>
          <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userModal">Add Room</button> -->
        </div>
      </div>

      //ตารางพนักงาน
      <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success">
          <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);
          ?>
        </div>
      <?php } ?>
      <?php if (isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger">
          <?php
          echo $_SESSION['error'];
          unset($_SESSION['error']);
          ?>
        </div>
      <?php } ?>

      <!-- Employee Data -->
      <div class="table-reponsive box" style="color:white;">
        <table id="table_emp" class="table table-striped table-dark" style="width:100%">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>ชื่อ</th>
              <th>นามสกุล</th>
              <th>อีเมลล์</th>
              <th>เบอร์โทร</th>
              <th>สิทธิ์</th>
              <th>เลขประจำตัวประชาชน</th>
              <th>การกระทำ</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $stmt = $conn->query("SELECT user_id, fname, lname, email, phone, permiss_id, personal_id, img FROM users");
            $stmt->execute();

            $users = $stmt->fetchAll();
            foreach ($users as $user) {
            ?>
              <tr>
                <td>
                  <?php echo $user['user_id'] ?>
                </td>
                <td>
                  <?php echo $user['fname'] ?>
                </td>
                <td>
                  <?php echo $user['lname'] ?>
                </td>
                <td>
                  <?php echo $user['email'] ?>
                </td>
                <td>
                  <?php echo $user['phone'] ?>
                </td>
                <td>
                  <?php
                  $permiss_id = $user['permiss_id'];
                  if ($permiss_id == '1') {
                    echo 'Admin';
                  } elseif ($permiss_id == '2') {
                    echo 'Employee';
                  }
                  ?>
                </td>
                <td>
                  <?php echo $user['personal_id'] ?>
                </td>
                <td class="text-center" style="width: 300px;">
                  <a href="" class="btn btn-primary btn-icon box-shadow" style="width: 79.25px;"><i class="zmdi zmdi-search zmdi-hc-fw"></i> แสดง</a>
                  <a href="./edit_employee?user_id=<?= $user['user_id']; ?>" class="btn btn-warning btn-icon box-shadow" style=""></i> แก้ไข</a>
                  <a href="?delemp=<?= $user['user_id']; ?>" class="btn btn-danger btn-icon box-shadow" onclick="return confirm('คุณต้องการลบข้อมูลพนักงานคนนี้ใช่หรือไม่');"></i> ลบ</a>

                </td>
              </tr>
            <?php
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

  <script src="./script/modal.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script>
    new DataTable('#table_emp');
  </script>

</body>

</html>