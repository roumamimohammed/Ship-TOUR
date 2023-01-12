<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="<?= URLROOT.'/css/bootstrap.min.css';?>">
    <link rel="stylesheet" href="<?= URLROOT.'/css/boxicons.min.css';?>">
    <link rel="stylesheet" href="<?= URLROOT.'/css/style.css';?>">
    

    <title>ShipCruiseTour</title>
    
  </head>
  <body>
    
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
      

      <div class="container">
        <a class="navbar-brand logo-text" href="#">Tour ;)</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">

          <li class="nav-item">
              <a class="nav-link" href="<?= URLROOT.'/pages/dh';?>">Home</a>
            </li>
             <li class="nav-item">
               <a class="nav-link" href="<?= URLROOT.'/pages/dh1';?>">NAVIRE</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="<?= URLROOT.'/pages/dh2';?>">CROISIERE</a>
             </li>
          </ul>
        </div>
      </div>
    </nav>
<h1 class="text-center  my-5 py-3">View All Products </h1>

<div class="container">
    <div class="row">
        <div class="col-10 mx-auto p-4 border mb-5">
                <?php if(isset($success)): ?>
                    <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
                <?php endif; ?>
                <?php if(isset($error)): ?>
                    <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
                <?php endif; ?>
            <table class="table">
                <thead class="thead-warning">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <?php foreach($products as $row):  ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['label']; ?></td>
                            <td><?php echo $row['price']; ?> <b class="float-right"> $ </b></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td>
                                <a href="" class="btn btn-warning" >Edit</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-danger" >Delete</a>
                            </td>
                        </tr>
                    <?php  endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>
</div>
</body>
</html>
