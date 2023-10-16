<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Room</title>
  <link rel="stylesheet" href="/styles/testdashboard.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body>
  
  <div class="containerbox">
    <!--Sidebar-->
    <?php include("./component/emp_sidebar.php") ?>

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
          <button type="button" class="btn-primary" data-bs-toggle="modal" data-bs-target="#roomModal">Add New
            Room</button>
          <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userModal">Add Room</button> -->
        </div>
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

      <body>
        <div class="chart-box">
          <div class="chart-line">
          <canvas id="myChart" style="width:100%;max-width:700px"></canvas>

          <script>
            var xyValues = [
              { x: 50, y: 7 },
              { x: 60, y: 8 },
              { x: 70, y: 8 },
              { x: 80, y: 9 },
              { x: 90, y: 9 },
              { x: 100, y: 9 },
              { x: 110, y: 10 },
              { x: 120, y: 11 },
              { x: 130, y: 14 },
              { x: 140, y: 14 },
              { x: 150, y: 15 }
            ];

            new Chart("myChart", {
              type: "scatter",
              data: {
                datasets: [{
                  pointRadius: 4,
                  pointBackgroundColor: "#fff",
                  data: xyValues
                }]
              },
              options: {
                legend: { display: false },
                scales: {
                  xAxes: [{ ticks: { min: 40, max: 160 } }],
                  yAxes: [{ ticks: { min: 6, max: 16 } }],
                }
              }
            });
          </script>
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

</body>

</html>