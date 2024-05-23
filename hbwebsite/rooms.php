<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AH Hotels_ROOMS</title>
  <!--links.php inc-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/common.css">
<style>
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
          <a class="nav-link me-2" href="contact.php">Contact us</a>
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
      <h2 class="fw-bold  h-fonts text-center">OUR ROOMS</h2>
      <div class="h-line  bg-dark"></div>
    </div>


   

    <div class="container">
      <div class="row">
       
       <!--filters-->
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
          <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
            <div class="container-fluid flex-lg-column align-items-stretch">
              <h2 class="mt-2">FILTERS</h2>
              <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font: size 18px;">CHECK AVAILABILITY</h5>
                  <label type="form-label">Check-in</label>
                  <input class="date" class="form-control shadow-none mb-3">
                  <label class="form-label">Check-out</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font: size 18px;">FACILITIES</h5>
                  <div class="mb-2">
                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                    <label class="form-check-label" for="f1">Facility one</label>
                  </div>
                  <div class="mb-2">
                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                    <label class="form-check-label" for="f2">Facility two</label>
                  </div>
                  <div class="mb-2">
                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                    <label class="form-check-label" for="f3">Facility three</label>
                  </div>
                </div>
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font: size 18px;">GUESTS</h5>
                  <div class="d-flex">
                    <div class="me-3">
                      <label class="form-label">Adults</label>
                      <input type="number" class="form-control shadow-none">
                    </div>
                    <div>
                      <label class="form-label">Children</label>
                      <input type="number" class="form-control shadow-none">
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </nav>
         </div>   

         <!--card room details and image-->

        <div class="col-lg-9 col-md-12 px-4">

          <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-3 align-items-center">
              <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="images/rooms/1.jpg" class="img-fluid rounded" >
              </div>
              <div class="col-md-5 px-lg-3 px-md-3 px-0">
                <h5 class="mb-3">Simple Room Name</h5>
                <div class="features mb-3">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    1 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    1 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    3 Sofa
                  </span>
                </div>
              <div class="facilities mb-3">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    Television
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    Room heater
                  </span>
              </div>
              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                  4 Childrens
                </span>
              </div>
              </div>
              <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                <h6 class="mb-4">₹200 per night</h6>
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More details</a>
              </div>
            </div>
          </div>

          <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-3 align-items-center">
              <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="images/rooms/1.jpg" class="img-fluid rounded" >
              </div>
              <div class="col-md-5 px-lg-3 px-0">
                <h5 class="mb-3">Simple Room Name</h5>
                <div class="features mb-3">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    1 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    1 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    3 Sofa
                  </span>
                </div>
              <div class="facilities mb-3">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    Television
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    Room heater
                  </span>
              </div>
              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                  4 Childrens
                </span>
              </div>
              </div>
              <div class="col-md-2 text-center">
                <h6 class="mb-4">₹200 per night</h6>
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More details</a>
              </div>
            </div>
          </div>

          <div class="card mb-4 border-0 shadow">
            <div class="row g-0 p-3 align-items-center">
              <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                <img src="images/rooms/1.jpg" class="img-fluid rounded" >
              </div>
              <div class="col-md-5 px-lg-3 px-0">
                <h5 class="mb-3">Simple Room Name</h5>
                <div class="features mb-3">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    1 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    1 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    3 Sofa
                  </span>
                </div>
              <div class="facilities mb-3">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    Television
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    Room heater
                  </span>
              </div>
              <div class="guests">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                  4 Childrens
                </span>
              </div>
              </div>
              <div class="col-md-2 text-center">
                <h6 class="mb-4">₹200 per night</h6>
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark  shadow-none">More details</a>
              </div>
            </div>
          </div>
        </div>
           
      </div>
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


</body>
</html>
