<?php
session_start();
include 'connect.php';
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
    <div class="sidebar">
      <div class="resort-logo">
        <h3>Logo</h3>
      </div>
      <!--wait for profile admin
        <div class="profile-admin">
          <a
            href="#"
            class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
            id="dropdownUser1"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <img
              src="https://github.com/mdo.png"
              alt=""
              width="32"
              height="32"
              class="rounded-circle me-2"
            />
            <strong>mdo</strong>
          </a>
          <div class="dropdown">
            <button class="dropbtn">Dropdown</button>
            <div class="dropdown-content">
              <a href="#">Sign out</a>
            </div>
          </div>
        </div>
        -->
      <div class="nav-item">
        <ul>
          <li>
            <a href="./dashboard" class="nav-link text-white">
              <svg class="bi me-2" width="0" height="0">
                <use xlink:href="#home"></use>
              </svg>
              Home
            </a>
          </li>
          <li>
            <a href="./edit_room" class="nav-link text-white">
              <svg class="bi me-2" width="0" height="0">
                <use xlink:href="#table"></use>
              </svg>
              Rooms
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="0" height="0">
                <use xlink:href="#grid"></use>
              </svg>
              booking detail
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="0" height="0">
                <use xlink:href="#people-circle"></use>
              </svg>
              Employee
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="0" height="0">
                <use xlink:href="#people-circle"></use>
              </svg>
              Expenses
            </a>
          </li>
        </ul>
      </div>

      <div class="side-foot">
        <a class="signout" href="/logout">Sign out</a>
      </div>
    </div>

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
          <form action="/add_emp_db" method="post" enctype="multipart/form-data">
            <div class="container">
              <div class="row">
                <div class="col">
                  1 of 2
                </div>
                <div class="col">
                  2 of 2
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="fname">First name</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                  </div>
                </div>
              </div>
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