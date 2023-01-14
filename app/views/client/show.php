<?php require_once APPROOT . '/views/client/header_client.php'; ?>
<section id="cta" class="py-5">
   <div class="container py-4">
      <div class="row justify-content-center">
         <div class="col-md-6">
            <h3 class="text-white">Let's do something great.</h3>
         </div>
         <div class="col-auto">
            <div style="background-color: white;" class="container-sm rounded-3 ">
               <div class="row">
                  <div class="col">
                     <h4 style="color: black;" class="title_vg">Croisiere:<?= $data['croisiere']['nom_crois'] ?></h4>

                     <p><span style="color: black; font-family: Brush Script MT;">L'escale à :</span>
                     <p>
                        <?php foreach ($data['trajet'] as $escale) : ?>
                           <?= $escale['nom'] . '-' . $escale['pays'] . '&nbsp'  ?>
                        <?php endforeach; ?>
                     </p>
                     </p>

                  </div>
                  <div class="col">
                     <span style="color: black; font-family: Brush Script MT;">Date :</span><span><?= $data['croisiere']['date_depart'] ?></span>
                     <p style="color: black;" class="nuit"><?= $data['croisiere']['nbr_nuit'] ?> Nuits</p>
                     <p><span style="color: black; font-family: Brush Script MT;">Port de départ :</span><?= ' ' . $data['croisiere']['port_dep'] . ' - ' . $data['croisiere']['pays'] ?></p>
                  </div>
               </div>

            </div>

         </div>
      </div>
   </div>
</section>


<div class="container">
   <h4 class="text-center mb-5">Selectionner une chambre :</h4>
   <div class="row">
      <table class="table table-hover text-center">
         <thead>
            <tr>
               <th>Numreo de chambre</th>
               <th>Prix</th>
               <th>type</th>
               <th>Réservation</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach ($data['chambre'] as $chambre) : ?>
               <tr>
                  <td><?= $chambre['id_ch'] ?></td>
                  <td><?= $chambre['prix'] ?></td>
                  <td><?= $chambre['type'] ?></td>
                  <td><button class="btn btn-dark reserver" value="<?= $data['croisiere']['id_croisiere'] . '-' . $chambre['prix'] . '-' . $chambre['id_ch'] ?>">Réserver</button></td>
               </tr>
            <?php endforeach; ?>
         </tbody>
      </table>
   </div>
</div>






<section id="clients" class="bg-light">
   <div class="container">
      <div class="row gy-4">
         <div class="col-lg-2 col-md-3 col-6">
            <img src="<?= URLROOT . '/img/logo1.svg'; ?>" alt="">
         </div>
         <div class="col-lg-2 col-md-3 col-6">
            <img src="<?= URLROOT . '/img/logo2.svg'; ?>" alt="">
         </div>
         <div class="col-lg-2 col-md-3 col-6">
            <img src="<?= URLROOT . '/img/logo3.svg'; ?>" alt="">
         </div>
         <div class="col-lg-2 col-md-3 col-6">
            <img src="<?= URLROOT . '/img/logo4.svg'; ?>" alt="">
         </div>
         <div class="col-lg-2 col-md-3 col-6">
            <img src="<?= URLROOT . '/img/logo5.svg'; ?>" alt="">
         </div>
         <div class="col-lg-2 col-md-3 col-6">
            <img src="<?= URLROOT . '/img/logo6.svg'; ?>" alt="">
         </div>
      </div>
   </div>
</section>
<section id="contact">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-4">
            <img src="<?= URLROOT . '/img/jol.jpg'; ?>" alt="">
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
   $('.reserver').click(function() {
      var info = this.value;
      info = info.split('-');
      $.post("../../reservations/reserver", {
            id_croisiere: info[0],
            prix: info[1],
            chambre: info[2]
         },
         function(response) {
            let timerInterval
    Swal.fire({
  title: 'SUCCESS',
  html: 'I will close in <b></b> milliseconds.',
  timer: 500,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
           
         },
      );
   });
</script>