<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AH Hotels_about us</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <!--links.php inc-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/common.css">

  <style>
    .box{
        border-top-color:var(--teal) !important;

    }

    .h-line {
  inline-size: 150px;
  margin: 0 auto;
  block-size: 2px;
}
  </style>

</head>
<body class="bg-light">

 
<!--header.php-->

<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-fonts" href="index.php">AH Hotels</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
      </ul>
      <div class="d-flex">
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
          Login
        </button>
        <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
          Register
        </button>
      </div>
    </div>
  </div>
</nav> 

<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-circle fs-3 me-2"></i>User Login
          </h5>
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control shadow-none">
          </div>
          <div class="mb-4">
            <label class="form-label">Password</label>
            <input type="password" class="form-control shadow-none">
          </div>
          <div class="d-flex align-items-center justify-content-between mb-2">
            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
            <a href="javascript:void(0)" class="text-secondary text-decoration-none"> Forgot Password?</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-vcard fs-3 me-2"></i>User Registration
          </h5>
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
            Note: your details must match with your ID (Aadhar card, passport, driving license, etc.). That will be required during check-in.
          </span>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control shadow-none">
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control shadow-none">
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Phone Number</label>
                <input type="number" class="form-control shadow-none">
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Picture</label>
                <input type="file" class="form-control shadow-none">
              </div>
              <div class="col-md-12 p-0 mb-3">
                <label class="form-label">Address</label>
                <textarea class="form-control shadow-none" rows="1"></textarea>
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Pincode</label>
                <input type="number" class="form-control shadow-none">
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Date of birth</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control shadow-none">
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Confirm password</label>
                <input type="password" class="form-control shadow-none">
              </div>
            </div>
            <div class="text-center my-1">
              <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

    <div class="my-5 px-4">
        <h2 class="fw-bold  h-fonts text-center">ABOUT US</h2>
        <div class="h-line  bg-dark"></div>
        <p class="text-center mt-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Consequuntur architect autem dolores amet<br>
         corporis praesentium enim fuga asperiores provident impedit.</p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                   Nesciunt quasi voluptates mollitia,
                   laudantium unde veritatis delectus!
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-1">
                <img src="images/about/about.jpg" class="w-100">
            </div>
        </div>
    </div>
    <!--about us images-->

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4 class="mt-3 h-fonts">100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/customers.svg" width="70px">
                    <h4 class="mt-3 h-fonts">200+ CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/rating.svg" width="70px">
                    <h4 class="mt-3 h-fonts">150+ REVIEWS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.svg" width="70px">
                    <h4 class="mt-3 h-fonts">100+ STAFFS</h4>
                </div>
            </div>
        </div>
    </div>

    <!--swiper-->
    <h3 class="my-5 fw-bold h-fonts text-center">MANAGEMENT TEAM</h3>
    <div class="container px-4">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide bg-white text-center rounded">
            <img src="images/about/team.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
          </div>
          <div class="swiper-slide bg-white text-center rounded">
            <img src="images/about/team.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
          </div>
          <div class="swiper-slide bg-white text-center rounded">
            <img src="images/about/team.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
          </div>
          <div class="swiper-slide bg-white text-center rounded">
            <img src="images/about/team.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
          </div>
          <div class="swiper-slide bg-white text-center rounded">
            <img src="images/about/team.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
          </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>  
        

<!--  Footer design foogter.php -->

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-fonts fw-bold fs-3 mb-2">AH HOTELS</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Distinctio nemo voluptate eligendi atque omnis, 
        dolorum incidunt id velit eos aliquam officia ut facilis maxime, 
        quia obcaecati corrupti, exercitationem repellat sapiente?
      </p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3 fw-bold h-fonts">Links</h5>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Features</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a><br>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3 fw-bold h-fonts">Follow us</h5>
      <a href="#" class="d-inline-block  text-dark text-decoration-none mb-2">
        <i class="bi bi-twitter me-1"></i>Twitter
      </a><br>
      <a href="#" class="d-inline-block  text-dark text-decoration-none mb-2">
        <i class="bi bi-facebook me-1"></i>Facebook
      </a><br>
      <a href="#" class="d-inline-block  text-dark text-decoration-none">
        <i class="bi bi-instagram me-1"></i>Instagram
      </a><br>
    </div>
  </div>
</div>
<h6 class="text-center bg-dark h-fonts text-white p-3 m-0">Designed and Developed by HETAL RAJBHAR</h6>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper(".mySwiper", {
  spaceBetween:40,
  pagination: {
    el: ".swiper-pagination",
    },
  loop: true,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  breakpoints: {
    320: {
    slidesPerView: 1,
    },
    640: {
    slidesPerView: 1,
    },
    768: {
    slidesPerView: 2,
    },
    1204: {
    slidesPerView: 3,
    },
  }
 });
    
    
  </script>
</body>
</html>
