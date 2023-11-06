<?php
session_start();
require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/styles/header.css">
  <link rel="stylesheet" href="/styles/homepage.css">
  <link rel="stylesheet" href="/styles/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <link rel="stylesheet" href="/styles/homepagecss/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="/styles/homepagecss/animate.css">

  <link rel="stylesheet" href="/styles/homepagecss/owl.carousel.min.css">
  <link rel="stylesheet" href="/styles/homepagecss/owl.theme.default.min.css">
  <link rel="stylesheet" href="/styles/homepagecss/magnific-popup.css">

  <link rel="stylesheet" href="/styles/homepagecss/aos.css">

  <link rel="stylesheet" href="/styles/homepagecss/ionicons.min.css">

  <link rel="stylesheet" href="/styles/homepagecss/bootstrap-datepicker.css">
  <link rel="stylesheet" href="/styles/homepagecss/jquery.timepicker.css">


  <link rel="stylesheet" href="/styles/homepagecss/flaticon.css">
  <link rel="stylesheet" href="/styles/homepagecss/icomoon.css">
  <link rel="stylesheet" href="/styles/homepagecss/style.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">ต้นน้ำรีสอร์ท</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="/homepage" class="nav-link">หน้าแรก</a></li>
          <li class="nav-item"><a href="rooms.html" class="nav-link">รูปภาพ</a></li>
          <li class="nav-item"><a href="restaurant.html" class="nav-link">ต่อต่อเรา</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">ข้อมูลที่พัก</a></li>
          <li class="nav-item"><a href="/booking" class="nav-link">จองห้องพัก</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(assets/image/resort.jpg); opacity:0.9;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
            <div class="text mb-5 pb-3">
              <h1 class="mb-3">ต้นน้ำรีสอร์ท</h1>
              <h2>โรงแรม &amp; รีสอร์ท</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="slider-item" style="background-image:url(assets/image/resort.jpg);">
      <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-12 ftco-animate text-center">
          <div class="text mb-5 pb-3">
            <h1 class="mb-3">จองห้องพัก</h1>
            <h2>เข้ามาพักกับเรา</h2>
        </div>
      </div>
    </div>
    </div>
  </div> -->
  </section>

  <section class="ftco-booking">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <form action="#" class="booking-form">
            <div class="row">
              <div class="col-md-3 d-flex">
                <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                  <div class="wrap">
                    <label for="#">Check-in Date</label>
                    <input type="date" name="checkindate" id="checkindate">
                  </div>
                </div>
              </div>
              <div class="col-md-3 d-flex">
                <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                  <div class="wrap">
                    <label for="#">Check-out Date</label>
                    <input type="date" name="checkindate" id="checkindate">
                  </div>
                </div>
              </div>
              <div class="col-md d-flex">
                <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                  <div class="wrap">
                    <label for="#">Room</label>
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon"><span class="material-symbols-outlined">arrow_drop_down</span>
                        </div>
                        <select name="" id="" class="form-control">
                          <option value="">เตียงเดี่ยว</option>
                          <option value="">เตียงคู่</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex">
                <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                  <div class="wrap">
                    <label for="#">Customer</label>
                    <div class="form-field">
                      <div class="select-wrap">
                        <div class="icon"><span class="material-symbols-outlined">arrow_drop_down</span></div>
                        <select name="" id="" class="form-control">
                          <option value="">1 ห้อง</option>
                          <option value="">2 ห้อง</option>
                          <option value="">3 ห้อง</option>
                          <option value="">4 ห้อง</option>
                          <option value="">5 ห้อง</option>
                          <option value="">6 ห้อง</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex">
                <div class="form-group d-flex align-self-stretch">
                  <input type="submit" value="เช็คห้องว่าง" class="btn btn-primary py-3 px-4 align-self-stretch">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section ftc-no-pb ftc-no-pt">
    <div class="container">
      <div class="row">
        <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(assets/image/resort.jpg);">
          <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
            <span class="material-symbols-outlined">
              image
            </span>
          </a>
        </div>
        <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
            <div class="ml-md-0">
              <span class="subheading">Welcome to Tonnarm Resort</span>
              <h2 class="mb-4">ต้นน้ำรีสอร์ท ยินดีต้อนรับ</h2>
            </div>
          </div>
          <div class="pb-md-5">
            <p>เกี่ยวกับ โรงแรม ต้นน้ำรีสอร์ท</p>
            <p>โรงแรม ต้นน้ำรีสอร์ท โรงแรมในอำเภอครบุรี จำนวนห้องพัก 21 ห้อง เข้าถึงได้ง่ายจากถนนใหญ่เพียง 5 กิโลเมตร เดินทางไปยังสถานที่ สำคัญต่างๆ ในครบุรีได้สะดวก มีบริการฟรีอินเทอร์เน็ตไร้สาย (WI-FI) และฟรีที่จอดรถสำหรับผู้เข้าพัก โรงแรม ต้นน้ำรีสอร์ท</p>
            <p>นอกจากนี้ยังมีบริการห้องพักสำหรับผู้เข้าพักที่ใช้วิลแชร์ และห้องพักแบบ CONNECT สิ่งอำนวยความสะดวกในห้องพัก ได้แก่ เครื่องปรับอากาศ SMART TV พร้อมช่องดาวเทียม ตู้เย็น ระเบียงส่วนตัว มีบริเวณทำงาน กาต้มน้ำ และไดร์เป่าผมให้บริการ</p>
            <p>สถานที่สำคัญใกล้เคียง
              • โรงงานน้ำตาล 1.2 กิโลเมตร
              • โรงพยาบาลครบุรี 1.2 กิโลเมตร
              • ตัวอำเภอ 2 กิโลเมตร
              • หาดจอมทอง 3 กิโลเมตร
              • สะพาน100ปี 3.5 กิโลเมตร
              • เทสโก้โลตัส4.5 กิโลเมตร
              • สันเขื่อนลำมูลบน 4.5 กิโลเมตร
              • วัดจอมทอง 5 กิโลเมตร</p>
            <!-- <ul class="ftco-social d-flex">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services py-4 d-block text-center">
            <div class="d-flex justify-content-center">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="material-symbols-outlined">
                  directions_car
                </span>
              </div>
            </div>
            <div class="media-body p-2 mt-2">
              <h3 class="heading mb-3">มีที่จอดรถ</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services py-4 d-block text-center">
            <div class="d-flex justify-content-center">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="material-symbols-outlined">
                  work_history
                </span>
              </div>
            </div>
            <div class="media-body p-2 mt-2">
              <h3 class="heading mb-3">เปิด 24 ชม.</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
          <div class="media block-6 services py-4 d-block text-center">
            <div class="d-flex justify-content-center">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="material-symbols-outlined">
                  restaurant
                </span>
              </div>
            </div>
            <div class="media-body p-2 mt-2">
              <h3 class="heading mb-3">มีบริการสั่งอาหาร</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services py-4 d-block text-center">
            <div class="d-flex justify-content-center">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="material-symbols-outlined">
                  nest_cam_iq_outdoor
                </span>
              </div>
            </div>
            <div class="media-body p-2 mt-2">
              <h3 class="heading mb-3">มีกล้องวงจรปิด</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h2 class="mb-4">ห้องพักของเรา</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm col-md-6 col-lg-4 ftco-animate">
          <div class="room">
            <a href="/singleroom" class="img d-flex justify-content-center align-items-center" style="background-image: url(assets/image/kingsize.jpg);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="fa-search"></span>
              </div>
            </a>
            <div class="text p-3 text-center">
              <h3 class="mb-3"><a href="/singleroom">เตียงเดี่ยว</a></h3>
              <p><span class="price mr-2">450 บาท</span> <span class="per">ต่อคืน</span></p>
              <hr>
              <p class="pt-1"><a href="/singleroom" class="btn-custom">ดูรายละเอียดเพิ่มเติม</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm col-md-6 col-lg-4 ftco-animate">
          <div class="room">
            <a href="/singleroom" class="img d-flex justify-content-center align-items-center" style="background-image: url(assets/image/twin.png);">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search2"><img src="search-interface-symbol.png" alt=""></span>
              </div>
            </a>
            <div class="text p-3 text-center">
              <h3 class="mb-3"><a href="/singleroom">เตียงคู่</a></h3>
              <p><span class="price mr-2">500 บาท</span> <span class="per">ต่อคืน</span></p>
              <hr>
              <p class="pt-1"><a href="/singleroom" class="btn-custom">ดูรายละเอียดเพิ่มเติม</a></p>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
  </section>


  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">ต้นน้ำ รีสอร์ท</h2>
            <p>อยู่ทางไปโรงน้ำตาล อยู่ติดถนนใหญ่ ฝั่งขวามือ มองเห็นป้ายอยู่ทางขวา</p>
            <!-- <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul> -->
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Useful Links</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">ความคิดเห็น</a></li>
              <li><a href="#" class="py-2 d-block">ห้องพัก</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Privacy</h2>
            <ul class="list-unstyled">
              <li><a href="#" class="py-2 d-block">เกี่ยวกับเรา</a></li>
              <li><a href="#" class="py-2 d-block">ติดต่อเรา</a></li>
              <li><a href="#" class="py-2 d-block">บริการอื่นๆ</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">มีคำถาม ?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="material-symbols-outlined">
                    map
                  </span><span class="text">&nbsp; 599 หมู่1 ต.จระเข้หิน อ.ครบุรี &nbsp;&nbsp;จ.นครราชสีมา</span></li>
                <li><a href="#"><span class="material-symbols-outlined">
                      call
                    </span><span class="text">&nbsp;089-8949156</span></a></li>
                <li><a href="#"><span class="material-symbols-outlined">
                      mail
                    </span><span class="text">&nbsp;isnonnysnax@hotmail.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-end">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          <li style="list-style-type:none;"><a href="/signin" class="nav-link">สำหรับพนักงาน</a></li>
          <li style="list-style-type:none;"><a href="/searchbooking" class="nav-link">ค้นหาห้องว่าง</a></li>
          <!-- <li style="list-style-type:none;"><a href="/booking" class="nav-link">จองห้องพัก</a></li> -->
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


  <script src="/script/js/jquery.min.js"></script>
  <script src="/script/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/script/js/popper.min.js"></script>
  <script src="/script/js/bootstrap.min.js"></script>
  <script src="/script/js/jquery.easing.1.3.js"></script>
  <script src="/script/js/jquery.waypoints.min.js"></script>
  <script src="/script/js/jquery.stellar.min.js"></script>
  <script src="/script/js/owl.carousel.min.js"></script>
  <script src="/script/js/jquery.magnific-popup.min.js"></script>
  <script src="/script/js/aos.js"></script>
  <script src="/script/js/jquery.animateNumber.min.js"></script>
  <script src="/script/bootstrap-datepicker.js"></script>
  <script src="/script/jquery.timepicker.min.js"></script>
  <script src="/script/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/script/js/google-map.js"></script>
  <script src="/script/js/main.js"></script>


</body>

</html>