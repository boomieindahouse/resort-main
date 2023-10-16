<?php
session_start();
if (!isset($_SESSION['admin_login'])) {
    if(isset($_SESSION['user_login'])){
        header('location: /employee/dashboard');
        exit;
    }
    header('location: /signin');
    exit;
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

      <div class="box">
        <div class="edit-emp">
          <h6>แก้ไข-โปรไฟล์</h6>
          <form action="/add_emp_db" method="post" enctype="multipart/form-data">
            <?php 
              if(isset($_GET['user_id'])){
                $user_id = $_GET['user_id'];
                $stmt = $conn->query("SELECT user_id, fname, lname, email, phone, permiss_id, personal_id, img FROM users WHERE user_id = $user_id");
                $stmt->execute();
                $data = $stmt->fetch();
              }
            ?>
            <div class="container">
              <div class="row">
                <div class="col">
                  1 of 1
                  <div class="form-group">
                    <input type="hidden" name="img" value="<?php echo $data['img']; ?>">
                    <img id="imgInput" style="width: 200px;"
                      src="uploads/user_img/<?php echo $data['img']; ?>">
                  </div> 
                </div>
                <div class="col">
                  2 of 2
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="fname">First name</label>
                    <input type="text" value="<?php echo $data['fname']; ?>" required class="form-control" id="fname"
                      name="fname">
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" value="<?php echo $data['lname']; ?>" class="form-control" id="lname"
                      name="lname">
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="tel" pattern="^[0-9]{10}$" class="form-control" id="phone" name="phone"
                        maxlength="10">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="permission">Permission</label><br>
                      <select class="form-select" aria-label="Default select example" name="permiss_id">
                        <option value="1">Admin</option>
                        <option value="2">Employee</option>
                      </select>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="personal_id">Personal ID</label>
                      <input type="text" class="form-control" id="personal_id" name="personal_id" maxlength="13"
                        pattern="^[0-9]{13}$">
                    </div>
                  </div>
                </div>
              </div>
            </div><br>
            <div class="col-lg-12 text-center">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
              <button type="submit" name="addemp" class="btn btn-success">บันทึก</button>
            </div>
          </form>
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script>
    new DataTable('#table_emp');
  </script>

</body>

</html>