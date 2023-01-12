<?php require_once APPROOT.'/views/admin/header_admin.php'; 
 ?>
<div class="container-fluid">
    <h1 class="text-center mb-5">HI! Mr <?= $_SESSION['nom'];?></h1>
</div>
<div class="container-fluid">
    <h1 class="text-center mb-5">Ports:<button type="button" class="btn btn-outline-danger rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">ADD</button>
 </h1>
    
</div>
<div class="container mb-4">
 
  <div class="row d-flex justify-content-between ">

   

</div>
<table class="table table-hover">
  <thead class="table-dark">
      <tr>
        <th>Numreo</th>
        <th>Nom</th>
        <th>Pays</th>
        <th>Supprimer</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($data as $port) :?>
            <tr>
                <td><?= $port['id_p'] ?></td>
                <td><?= $port['nom'] ?></td>
                <td><?= $port['pays'] ?></td>
                <td><a href="<?= '../Ports/deleteport/'.$port['id_p'] ?>"><i class="fa fa-trash" style="font-size:20px;color:black;"></i></a></td>
            </tr> 
        <?php endforeach;?>
    </tbody>
  </table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nouveau port</h1>
      </div>
      <div class="modal-body">
        <form action="../Ports/addport" method="POST">
          <div class="mb-5 mt-3">
            <label class="form-label">Nom de port :</label>
            <input type="text" class="form-control" placeholder="Nom de port" name="nom" required>
          </div>
          <div class="mb-3">
            <label  class="form-label">Pays :</label>
            <input type="text" class="form-control" placeholder="Pays" name="pays" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-info">Ajouter</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



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
    