   
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medilab</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<!-- app css  -->
<link href="assets/css/app.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v4.10.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
   .square{
    width:350px;
    height:700px;
    background-color:rgb(37, 150, 190);
    position: relative;
       margin: 0 auto;
       
  }
  .square:hover{
    border-radius:5px;
    background-color:rgb(37, 140, 190);
  }
  .p{
    font-weight: bold;
  }
  .name{
    /* position: absolute;
    
    left:;
    top: 110px; */
     display: inline-block;
     margin-bottom: -100px;
     margin-left: 35px;
     font-style:italic;
  }
  .age{
    position: relative;
    font-size: 20px;
    left:220px;
    top: 10px;
     display: inline-block;
     font-style:italic;
     
  }

  .v{
    position: relative;
    left:30px;
    top: 20px;
    display: inline-block;
  }
  .gender{
    position: relative;
    top:-110px;
    left:220px;
  }

  .weight{
       position: relative;
    left:30px;
    top:-100px;
    display: inline-block;
  }

  .h{
     position: relative;
    top:-180px;
    left:210px;
  }
  .d{
       position: relative;
    left:30px;
    top: -150px;
    display: inline-block;
  }

  .dnt{
       position: relative;
    top:-230px;
    left:210px;
  }
  .status{
          position: relative;
          top: -190px;
          left:135px;
    
    display: inline-block;
    
  }
  .num{
    position: relative;
    top: 10px;
    font-weight: 500;
    font-size: ;

  } */

  </style>
</head>
<body style="background-image: url('https://img.freepik.com/free-vector/clean-medical-background_53876-97927.jpg?w=740&t=st=1675323048~exp=1675323648~hmac=68d9e2c17048e8f5479a5f271418124c453d39768d8aacdb0f417ae85a51c294');background-repeat: no-repeat; background-size: cover; position: absolute;>
  
<?php
include_once("conn.php");
        $query = "SELECT * FROM `al_child_details`";
        $result = mysqli_query($conn,$query);  
        if(mysqli_num_rows($result)){
                while($row = mysqli_fetch_array($result)){

?>
 

        
<br><br><br>
<div class="square">
<div class="center2"  style="display: flex;justify-content: center;flex-direction: column;margin: auto;">
<div class="center" >
<div class="ID">
<h1 class="heading" style="text-align: center;" >ID</h1>
<p class="num" style="text-align: center;"><?php echo $row['id'];?></p>
</div>

<div class="name" >
<p class="p">Child name</p>
<p><?php echo $row[1];?></p>
</div>

<div class="age">
  <p class="p">Age</p>
  <p><?php echo $row[2];?></p>
</div>
<br>
<hr>
<div class="v">
  <p class="p">Vaccination</p>
  <p><?php echo $row[10];?></p>
</div>
<hr>
<div class="gender">
  <p class="p">Gender</p>
  <p><?php echo $row[12];?></p>
</div>
<hr>
<div class="weight">
  <p class="p">Weight</p>
  <p><?php echo $row[3];?></p>
</div>

<div class="h">
  <p class="p">Hospital</p>
  <p><?php echo $row[14];?></p>
</div>

<div class="d">
  <p class="p">Doctor</p>
  <p><?php echo $row[13];?></p>
</div>

<div class="dnt">
  <p class="p">Date/Time</p>
  <p><?php echo $row[11];?></p>
</div>

<div class="status">
  <p class="p">Status</p>
  <p><?php echo $row[4];?></p>
</div>
        
</div>

<?php

}
}                                     
?>
<br>
<br>
<br>
</div>
</div>
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Medilab</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
