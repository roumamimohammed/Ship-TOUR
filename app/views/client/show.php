<?php require_once APPROOT.'/views/client/header_client.php';?>

<div class="container-fluid">
<h1 class="text-center mb-5">HI! Mr <?= $_SESSION['nom'];?></h1>
    <h1 class="text-center mb-5">Details croisières</h1>
</div>
  <div class="container mb-5">
    <div class="row croisiere mb-5">
        <div class="col-md-5 p-3">
            <p class="nuit"><?= $data['croisiere']['nbr_nuit']?> Nuits</p>
            <h4 class="title_vg"><?= $data['croisiere']['nom_crois']?></h4>
            <p><span class="depart_dep">Port de départ :</span><?= ' '.$data['croisiere']['port_dep'].' - '.$data['croisiere']['pays'] ?></p>
            <p><span class="depart_dep">L'escale à :</span><p>
                <?php foreach($data['trajet'] as $escale): ?>
                    <?= $escale['nom'].'-'.$escale['pays'].'&nbsp'  ?>
                <?php endforeach ; ?>
            </p></p>
            <span class="depart_dep">Date :</span><span><?= $data['croisiere']['date_depart'] ?></span>
        </div>
    </div>
  </div>

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
                <?php foreach($data['chambre'] as $chambre): ?>
                    <tr>
                        <td><?= $chambre['id_ch'] ?></td>
                        <td><?= $chambre['prix'] ?></td>
                        <td><?= $chambre['type'] ?></td>
                        <td><button class="btn btn-dark reserver" value="<?= $data['croisiere']['id_croisiere'].'-'.$chambre['prix'].'-'.$chambre['id_ch'] ?>">Réserver</button></td>
                    </tr> 
                <?php endforeach ; ?>
            </tbody>
        </table>
    </div>
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
    
<script>
    $('.reserver').click(function () { 
        var info=this.value;
        info=info.split('-'); 
        $.post("../../reservations/reserver",{id_croisiere:info[0],prix:info[1],chambre:info[2]},
            function (response) {
                Swal.fire(
                'Success!',
                'Réservation est passé avec succes !',
                'success'
            );
            },
        );  
    });
  </script>