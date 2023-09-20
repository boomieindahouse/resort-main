<?php
    include("connect.php");
    //include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" sizes="32px" href="/assets/favicon.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/dashboard.css">
    <title>Dashboard</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
</head>

<body>
    <div class="ct-box">
        <div class="sidebar">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height:1057px">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4">Resort</span>
                </a>
                <hr class="hr1">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="./dashboard" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#home"></use>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#table"></use>
                            </svg>
                            Rooms
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            booking detail
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#people-circle"></use>
                            </svg>
                            Employee
                        </a>
                    </li>
                </ul>
                <hr st>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>mdo</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ct-dash">
            <div class="header">
                <div class="header-left">
                    <h3>Rooms Manage</h3>
                </div>
                <div class="header-right">
                    <div class="calendar">
                        <input type="date" name="" id="">
                    </div>
                </div>
            </div>
            <hr>
            <div class="room-status">
                <div class="ct-left">
                    <button>All Status</button>
                    <button>Available</button>
                    <button>Sold out</button>
                </div>
                <div class="ct-right">
                    <div class="dropdown-status">
                        <button class="dropbtn">Dropdown</button>
                        <div class="dropdown-content">
                            <a href="#">Sort by</a>
                            <a href="#">Oldest</a>
                            <a href="#">Newest</a>
                        </div>
                    </div>
                    <button>Add Newroom</button>
                </div>
            </div>


            <div style="margin-left: 20px;" class="grid-info">
                <div class="room-card">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top"
                            src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://mresort-hotel.com.my/wp-content/uploads/elementor/thumbs/24A-ptpw3fspejivkagoyi1f4e3rcuufxdl6dl6z096p6o.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Twins Bed</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                            <div class="btn-opt">
                                <a href="#" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-primary">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top"
                            src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://mresort-hotel.com.my/wp-content/uploads/elementor/thumbs/23-copy-web-ptpw3zjbe29wc3o0r8kl2r4fty55f0rjgaw632dfk0.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Single Bed</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                            <div class="btn-opt">
                                <a href="#" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-primary">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top"
                            src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/427272414.jpg?k=1cbd2705462e301fe7160f9088e96092d55e6155c74fbd162c3366f765295453&o=&hp=1"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Single Bed</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.
                            </p>
                            <div class="btn-opt">
                                <a href="#" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-primary">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>