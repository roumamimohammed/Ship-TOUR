<?php require_once APPROOT . '/views/client/header_client.php'; ?>




<div class="container availability-form">
   <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
         <h5 class="mb-4">Filtrer les croisières :</h5>
         <form>
            <div class="row d-flex justify-content-around">
               <div class="col-lg-3 mb-3">
                  <label class="form-label" style="font-weight: 500;">Port :</label>
                  <select class="form-control" name="port_depart" required>
                     <option>--Select--</option>
                     <?php foreach ($data as $port) : ?>
                        <option value="<?= $port['id_p'] ?>"><?= $port['nom'] . ' - ' . $port['pays'] ?></option>
                     <?php endforeach; ?>
                  </select>
               </div>
               <div class="col-lg-3 mb-3">
                  <label class="form-label" style="font-weight: 500;">Mois :</label>
                  <input type="month" class="form-control shadow-none">
               </div>
               <div class="col-lg-3 mb-3">
                  <label class="form-label" style="font-weight: 500;">Navire :</label>
                  <select class="form-control" name="port_depart" required>
                     <option>--select--</option>
                     <?php foreach ($data2 as $navire) : ?>
                        <option value="<?= $navire['id_n'] ?>"><?= $navire['nom'] ?></option>
                     <?php endforeach; ?>
                  </select>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>



<div class="container mt-5 mb-5" id="croisieres">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th></th>
            </tr>
        </thead>
        <?php foreach ($data3 as $croisie) : ?>
   <div class="row d-flex align-items-center justify-content-between">
         
            <tr>
                <td>
              
         <div class="row croisiere mb-5">
            <div class="col-md-4">
               <img style="height: 200px;" src="../img/<?= $croisie['image'] ?>" class="card-img-top" alt="...">
               </div>
               <div class="col-md-5 p-3">
                  <h4 style="color: black; font-family: Brush Script MT;" class="card-title">Croisiere:<?= $croisie['nom_crois'] ?></h4><br>
                  <span style="color: black; class="card-title">nombres des nuit:<?= $croisie['nbr_nuit'] ?></span><br>
                  <span style="color: black; class="card-title">nom du navire:<?= $croisie['nom_nav'] ?></span><br>
                  <span class="depart_dep">Date :</span><span><?= $croisie['date_depart'] ?></span>
                  </div>
                  <div class="col-md-3 text-center p-3" id="prix_div">
                  <span style="color:#FF8C00; font-family: Verdana, Geneva, Tahoma, sans-serif;" class="card-title">Prix:<?= $croisie['prix'] ?></span><br>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href=" <?= '../Reservations/show/'.$croisie['id_croisiere'] ?>" class="btn btn-outline-dark mb-3">Go</a>
               </div>
               </div>
             </td> 
             
            </tr>
       
         </div>
         <?php endforeach; ?>
     </table>
</div>

   

   

   <section id="clients" class="bg-light">
      <div class="container">
         <div class="row gy-4">
            <div class="col-lg-2 col-md-3 col-6">
               <img src="<?= URLROOT.'/img/logo1.svg';?>" alt="">
            </div>
            <div class="col-lg-2 col-md-3 col-6">
               <img src="<?= URLROOT.'/img/logo2.svg';?>" alt="">
            </div>
            <div class="col-lg-2 col-md-3 col-6">
               <img src="<?= URLROOT.'/img/logo3.svg';?>" alt="">
            </div>
            <div class="col-lg-2 col-md-3 col-6">
               <img src="<?= URLROOT.'/img/logo4.svg';?>" alt="">
            </div>
            <div class="col-lg-2 col-md-3 col-6">
               <img src="<?= URLROOT.'/img/logo5.svg';?>" alt="">
            </div>
            <div class="col-lg-2 col-md-3 col-6">
               <img src="<?= URLROOT.'/img/logo6.svg';?>" alt="">
            </div>
         </div>
      </div>
   </section>
<section id="contact">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-4">
               <img src="<?= URLROOT.'/img/jol.jpg';?>" alt="">
            </div>
            <div class="col-lg-6 offset-lg-1">
               <form>
                  <div class="mb-3">
                    <small>Name</small>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                     <small>Email</small>
                     <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                   </div>
                   <div class="mb-3">
                     <small>Name</small>
                     <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>
                   </div>
                  <button type="submit" class="btn btn-brand">Submit</button>
                </form>
            </div>
         </div>
      </div>
   </section>
   <section id="cta" class="py-5">
      <div class="container py-4">
         <div class="row justify-content-center">
            <div class="col-md-6">
               <h3 class="text-white">Let's do something great.</h3>
            </div>
            <div class="col-auto">
               <a href="#" class="btn btn-light">Get Started</a>
            </div>
         </div>
      </div>
   </section>

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
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>