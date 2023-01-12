<?php require_once APPROOT.'/views/client/header_client.php'; ?>

<div class="container-fluid">
<h1 class="text-center mb-5">HI! Mr <?= $_SESSION['nom'];?></h1>
    <h1 class="text-center">Mes réservations</h1>
</div>


<div class="container mt-5 mb-5" id="croisieres">

</div>


<footer>
      <div class="footer-top">
         <div class="container">
            <div class="row gy-5">
               <div class="col-md-4">
                  <h4 class="logo-text">Lissome</h4>
                  <p>Praesent vulputate neque nec sem fermentum porttitor. Mauris eget dolor convallis, trista, dignissim sapien. Duis vel felis dictu</p>
                  <div class="social-icons">
                     <a href="#"><i class="bx bxl-facebook"></i></a>
                     <a href="#"><i class="bx bxl-twitter"></i></a>
                     <a href="#"><i class="bx bxl-instagram"></i></a>
                     <a href="#"><i class="bx bxl-github"></i></a>
                  </div>
               </div>
               <div class="col-md-2">
                  <h5 class="title-sm">Navigation</h5>
                  <div class="footer-links">
                     <a href="#">Services</a>
                     <a href="#">Our Work</a>
                     <a href="#">Team</a>
                     <a href="#">Blog</a>
                  </div>
               </div>
               <div class="col-md-2">
                  <h5 class="title-sm">More</h5>
                  <div class="footer-links">
                     <a href="#">FAQ's</a>
                     <a href="#">Privacy & Policy</a>
                     <a href="#">Liscences</a>
                  </div>
               </div>
               <div class="col-md-2">
                  <h5 class="title-sm">Contact</h5>
                  <div class="footer-links">
                     <p class="mb">1649 Norman Street, Safi, 9001</p>
                     <p class="mb-">05-16-06-42</p>
                     <p class="mb">hello@yourdomain.com</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footer-bottom">
         <div class="container">
            <div class="row justify-content-between gy-3">
               <div class="col-md-6">
                  <p class="mb-0">© Agency2023. All rights reserved</p>
               </div>
               <div class="col-auto">
                  <p class="mb-0">Created with ❤️ by MORO</p>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<script src="<?= URLROOT.'/js/reservarions.js' ?>"></script>