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

  <?php include("addroom_modal.php") ?>
  <!-- <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="firstname" class="col-form-label">First Name:</label>
                    <input type="text" required class="form-control" name="firstname">
                </div>
                <div class="mb-3">
                    <label for="firstname" class="col-form-label">Last Name:</label>
                    <input type="text" required class="form-control" name="lastname">
                </div>
                <div class="mb-3">
                    <label for="firstname" class="col-form-label">Position:</label>
                    <input type="text" required class="form-control" name="position">
                </div>
                <div class="mb-3">
                    <label for="img" class="col-form-label">Image:</label>
                    <input type="file" required class="form-control" id="imgInput" name="img">
                    <img loading="lazy" width="100%" id="previewImg" alt="">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
        
        </div>
    </div>
    </div> -->


  <div class="containerbox">
    <!--Sidebar-->
    <div class="sidebar">
      <div class="resort-logo">
        <h3>Dashboard</h3>
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
            <a href="#" class="nav-link text-white">
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
            <a href="./employee" class="nav-link text-white">
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

      <div class="tb_warpper">
        <table class="table table-dark" id="table_room">
          <thead>
            <tr>
              <th scope="col">Room Name</th>
              <th scope="col">Bed Type</th>
              <th scope="col">zone</th>
              <th scope="col">Status</th>
              <th scope="col">Book Date</th>
              <th scope="col">Event Action</th>
            </tr>
          </thead>
          <tbody class="tbody_post">
            <td>
              <div class="room-box">
                <img class="room-img" src="/assets/roomhotel.jpg" alt="">
                <div class="detail-room">
                  <h5>No.101A</h5>
                </div>
              </div>
            </td>
            <td>2</td>
            <td>1</td>
            <td>Available</td>
            <td>22-9-2023</td>
            <td>
              <button>Edit</button>
              <button>Delete</button>
            </td>
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

</body>

</html>