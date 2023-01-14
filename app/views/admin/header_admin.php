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
     <!-- CSS only -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT.'/css/style.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT.'/css/statics.css' ?>">
  
    

    <title>ShipCruiseTour</title>
    
  </head>
  <body data-bs-spy="scroll" data-bs-target=".navbar">
    
   <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
      

      <div class="container">
        <a class="navbar-brand logo-text" href="#">Tour ;)</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">

          <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT.'/pages/admin' ?>">Statistique <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT.'/pages/croisiere'?>">Croisière</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT.'/pages/port'?>">Port</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT.'/pages/navire'?>">Navire</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URLROOT.'/pages/chambre'?>">Chambre</a>
            </li>
             <li>
                <div class="btn-group" id="logout">
                    <button type="button" class="btn btn-dark "  >
                    <a style="color: white;"  href="<?= URLROOT.'/pages/logout'?>">Log out</a>
                    </button>
                
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 