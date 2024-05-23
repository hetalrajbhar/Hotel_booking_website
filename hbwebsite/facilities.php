<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AH Hotels_facilities</title>
  <!--links.php inc-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/common.css">

<style>
.pop:hover{
    border-top-color:var(--teal) !important;
    transform:scale(1.03);
    trasition:all 0.3s;
}
:root{
  --teal:#2ec1ac;
  --teal_hover:#2ec1ac;
}
.custom-bg{
    background-color:var(--teal);
    border:1px solid var(--teal);
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
    <h2 class="fw-bold  h-fonts text-center">OUR FACILITIES</h2>
    <div class="h-line  bg-dark"></div>
    <p class="text-center mt-3">
        Our hotel services provodes the manyfacilities to comfort th guests and customers .
        our main goal is to satisfy the customers need and give them luxirius facilities and services.
         <br>
        We provides the best management and services.We have better rooms,Ac, safety and good quality foods and services..</p>
    </div>

    <div class="container">
        <div class="row">
           <div class="col-lg-6 col-md-6  mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop ">
                <div class="d-flex align-items-center mb-2">
                    <img src="images/features/wifi.svg" width="40px">
                    <h5 class="m-0 ms-3">Wifi</h5>
                </div>
                <p>We have Wifi connectins and internet availibilty over our entire hotel rooms and hotels area.
                  we have fast network connections.
                </p>
            </div>
           </div>

           <div class="col-lg-6 col-md-5 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop ">
                <div class="d-flex align-items-center mb-2">
                    <img src="images/features/fire.svg" width="40px">
                    <h5 class="m-0 ms-3">Fire Safety</h5>
                </div>
                <p>WE provireds you better safety and emergency safety measures.
                  We have trained and certified security guides and services.
                  We have multiple fire safety cilenders on every floors of our hotel and in front of every rooms. </p>
            </div>
           </div>
           
           <div class="col-lg-6 col-md-5 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop ">
                <div class="d-flex align-items-center mb-2">
                    <img src="images/features/food.jpg" width="40px">
                    <h5 class="m-0 ms-3">Good quality food services</h5>
                </div>
                <p>We provides good food quality and multiple varieties of the foods.
                  We have internationa and national foods menu and We have trained and certified Chefs.
                </p>
            </div>
           </div>

           <div class="col-lg-6 col-md-5 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop ">
                <div class="d-flex align-items-center mb-2">
                    <img src="images/features/television.svg" width="40px">
                    <h5 class="m-0 ms-3">Entertainment</h5>i</h5>
                </div>
                <p>In our hotel there are televisions in every rooms and dining areas for customers entertaiment.
                </p>
            </div>
           </div>

           <div class="col-lg-6 col-md-5 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop ">
                <div class="d-flex align-items-center mb-2">
                    <img src="images/features/ac.svg" width="40px">
                    <h5 class="m-0 ms-3">AC</h5>
                </div>
                <p>our hotel has 200+ AC's .Each and every rooms has AC and air coolers.
                </p>
            </div>
           </div>

           <div class="col-lg-6 col-md-5 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop ">
                <div class="d-flex align-items-center mb-2">
                    <img src="images/features/star.png" width="40px">
                    <h5 class="m-0 ms-3">good service and facilities</h5>
                </div>
                <p>We have 5 star ratings to our  services and facilities.
                </p>
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
