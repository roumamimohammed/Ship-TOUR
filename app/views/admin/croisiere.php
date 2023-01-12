<?php require_once APPROOT.'/views/admin/header_admin.php';  ?>
<div class="container-fluid">
    <h1 class="text-center mb-5">HI! Mr <?= $_SESSION['nom'];?></h1>
</div>
<div class="container-fluid">
    <h1 class="text-center mb-5">Croisières:<button type="button" id="btnaddCroisiere" class="btn btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">ADD</button></h1>
   
</div>

<div class="container mb-4">
  <div class="row d-flex justify-content-between">

  </div>   
  <table class="table table-hover">
    <thead class="table-dark">
      <tr>
        <th>Numreo</th>
        <th>Nom</th>
        <th>Nom NAVIRE</th>
        <th>Prix</th>
        <th>Nombre des nuits</th>
        <th>port de depart</th>
        <th>date de depart</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($data3 as $croisie) :?>
        
            <tr>
                <td><?= $croisie['id_croisiere'] ?></td>
                <td><?= $croisie['nom_crois'] ?></td>
                <td><?= $croisie['nom_nav'] ?></td>
                <td><?= $croisie['prix'] ?></td>
                <td><?= $croisie['nbr_nuit'] ?></td>
                <td><?= $croisie['port_dep'] ?></td>
                <td><?= $croisie['date_depart'] ?></td>
                <td><a href="<?= '../Croisieres/deletecroisiere/'.$croisie['id_croisiere'] ?>"><i class="fa fa-trash" style="font-size:20px;color:black;"></i></a></td>
            </tr> 
      
        <?php endforeach;?>
    </tbody>
  </table>
</div>
 <div class="container mt-5 mb-5" id="croisieres">

</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nouvelle Croisière</h1>
      </div>
      <div class="modal-body">
        <form action="../Croisieres/addcroisiere" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Nom de croisière :</label>
            <input type="text" class="form-control" placeholder="Nom de croisière" name="nom" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Image :</label>
            <input type="file" class="form-control" name="image" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Nombre de nuit :</label>
            <input type="number" min="0" placeholder="Nombre de nuit" class="form-control" name="nbr_nuit" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Date de départ :</label>
            <input type="date" class="form-control" name="date_depart" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Port de départ :</label>
            <select class="form-control" name="port_depart" required>
                    <option >--Select--</option>
                <?php foreach($data as $port) : ?>
                    <option value="<?= $port['id_p'] ?>"><?= $port['nom'].' - '.$port['pays'] ?></option>
                <?php endforeach ;?>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Nom de navire :</label>
            <select class="form-control" name="id_navire" required>
                    <option >--Select--</option>
                <?php foreach($data2 as $navire) : ?>
                    <option value="<?= $navire['id_n'] ?>"><?= $navire['nom'] ?></option>
                <?php endforeach ?>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Escale a:</label><br>
            <div class="container">
              <div class="row">
              <?php foreach($data as $port) : ?>
                  <div class="col-md-6">
                    <input type="checkbox" name="check_navire[]" value="<?= $port['id_p'] ?>" id="<?= $port['id_p'] ?>" class="check">&nbsp;<label for="check"><?= $port['nom'].' - '.$port['pays'] ?></label>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-warning">Ajouter</button>
          </div>
        </form>

      </div>
    </div>
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
<script src="<?php echo URLROOT.'/js/admin.js' ?>"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    