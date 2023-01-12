<?php require_once APPROOT.'/views/admin/header_admin.php';  ?>
<div class="container-fluid">
    <h1 class="text-center mb-5">HI! Mr <?= $_SESSION['nom'];?></h1>
</div>
<div class="container-fluid">
    <h1 class="text-center mb-5">Chambres:
            <button type="button" class="btn btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">ADD</button>
        </h1>
</div>




<div>           
<table class="table table-hover">
    <thead class="table-dark">
      <tr>
        <th>Numreo</th>
        <th>Nom NAVIRE</th>
        <th>TYPE</th>
        <th>Prix</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($data as $croisie) :?>
         
            <tr>
                <td><?= $croisie['id_ch'] ?></td>
                <td><?= $croisie['nom'] ?></td>
                <td><?= $croisie['type'] ?></td>
                <td><?= $croisie['prix'] ?></td>
                <td><a href="<?= '../chambres/deletechambre/'.$croisie['id_ch'] ?>"><i class="fa fa-trash" style="font-size:20px;color:black;"></i></a></td>
            </tr> 
        <?php endforeach;?>
    </tbody>
  </table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nouveau chambre</h1>
      </div>
      <div class="modal-body">
        <form action="../Chambres/addchambre" method="POST">
          <div class="mb-3">
            <label for="pwd" class="form-label">Prix de chambre :</label>
            <input type="number" min="1" required class="form-control" placeholder="Prix de chambre" name="prix_ch">
          </div>
          <div class="mb-3">
            <label class="form-label">Type de chambre :</label>
            <select class="form-control" required name="type">
                <option value="">--Select--</option>
                <option value="2">1 personnes</option>
                <option value="3">3 personnes</option>
                <option value="4">+3 personnes</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Nom de navire :</label>
            <select class="form-control" name="id_navire" required>
                    <option value="">--Select--</option>
                <?php foreach($data as $chambre) : ?>
                    <option value="<?= $chambre['id_n'] ?>"><?= $chambre['nom'] ?></option>
                <?php endforeach ?>
        </select>
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
    