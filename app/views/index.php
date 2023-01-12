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
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#services">Services</a>
             </li>
            
             <li class="nav-item">
               <a class="nav-link" href="#features">Features</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#team">Team</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#contact">Contact</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="<?= URLROOT.'/pages/login';?>">Login</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="<?= URLROOT.'/pages/inscrire';?>">Inscrire</a>
             </li>
          </ul>
        </div>
      </div>
    </nav>

   <section id="home">
      <div class="container text-center">
         <div class="row justify-content-center">
            <div class="col-md-10">
               <h1 class="text-white display-4">WE ARE CREATIVE AGENCY, CREATIVE PEOPLE</h1>
               <p class="text-white">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-les</p>
               <a href="#contact" class="btn btn-brand">Contact</a>
            </div>
         </div>
      </div>
   </section>

   <section id="services">
      <div class="container">
         <div class="row">
            <div class="col-12 section-intro">
               <h1>Our Services</h1>
               <div class="hline"></div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-4 col-sm-6 p-4">
               <div class="icon-box">
                  <i class='bx bxs-landscape'></i>
               </div>
               <h4 class="title-sm mt-4">Trip</h4>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem incidunt sunt molestiae!</p>
            </div>
            <div class="col-lg-4 col-sm-6 p-4">
               <div class="icon-box">
                  <i class='bx bxs-coffee'></i>
               </div>
               <h4 class="title-sm mt-4">Restauration</h4>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem incidunt sunt molestiae!</p>
            </div>
            <div class="col-lg-4 col-sm-6 p-4">
               <div class="icon-box">
                  <i class='bx bxs-image'></i>
               </div>
               <h4 class="title-sm mt-4">Best vue</h4>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem incidunt sunt molestiae!</p>
            </div>
            <div class="col-lg-4 col-sm-6 p-4">
               <div class="icon-box">
                  <i class='bx bxs-check-shield'></i>
               </div>
               <h4 class="title-sm mt-4">Security</h4>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem incidunt sunt molestiae!</p>
            </div>
            <div class="col-lg-4 col-sm-6 p-4">
               <div class="icon-box">
                  <i class='bx bx-laptop'></i>
               </div>
               <h4 class="title-sm mt-4">Internet</h4>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem incidunt sunt molestiae!</p>
            </div>
            <div class="col-lg-4 col-sm-6 p-4">
               <div class="icon-box">
                  <i class='bx bxs-happy-heart-eyes'></i>
               </div>
               <h4 class="title-sm mt-4">Party</h4>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem incidunt sunt molestiae!</p>
            </div>
         </div>
      </div>
   </section>


   <section id="features">
      <div class="container">
         <div class="row">
            <div class="col-12 section-intro">
               <h1>Our Features</h1>
               <div class="hline"></div>
            </div>
         </div>
         <div class="row gy-4">
            <div class="col-lg-4 col-sm-6 feature d-flex">
               <div class="icon-box me-3">
                  <i class="bx bx-check"></i>
               </div>
               <div>
                  <h5 class="title-sm">Feature</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit incidunt inventore quibusdam accusamus esse.</p>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6 feature d-flex">
               <div class="icon-box me-3">
                  <i class="bx bx-check"></i>
               </div>
               <div>
                  <h5 class="title-sm">Feature</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit incidunt inventore quibusdam accusamus esse.</p>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6 feature d-flex">
               <div class="icon-box me-3">
                  <i class="bx bx-check"></i>
               </div>
               <div>
                  <h5 class="title-sm">Feature</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit incidunt inventore quibusdam accusamus esse.</p>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6 feature d-flex">
               <div class="icon-box me-3">
                  <i class="bx bx-check"></i>
               </div>
               <div>
                  <h5 class="title-sm">Feature</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit incidunt inventore quibusdam accusamus esse.</p>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6 feature d-flex">
               <div class="icon-box me-3">
                  <i class="bx bx-check"></i>
               </div>
               <div>
                  <h5 class="title-sm">Feature</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit incidunt inventore quibusdam accusamus esse.</p>
               </div>
            </div>
            <div class="col-lg-4 col-sm-6 feature d-flex">
               <div class="icon-box me-3">
                  <i class="bx bx-check"></i>
               </div>
               <div>
                  <h5 class="title-sm">Feature</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit incidunt inventore quibusdam accusamus esse.</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="team" class="row g-0 py-0 text-center">
      <div class="col-lg-3 col-sm-6 team-member">
         <div class="team-member-img">
            <img src="<?= URLROOT.'/img/mom.jpg';?>" >
            <div class="social-icons">
               <a href="#"><i class="bx bxl-facebook"></i></a>
               <a href="#"><i class="bx bxl-twitter"></i></a>
               <a href="#"><i class="bx bxl-instagram"></i></a>
               <a href="#"><i class="bx bxl-github"></i></a>
            </div>
         </div>
         <div class="p-4">
            <h5 class="title-sm mt-3 mb-0 text-white">John Foe</h5>
            <small class="text-white"></small>
            <div class="hline"></div>
            <p class="text-white">Well skillful lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>
         </div>
      </div>
      <div class="col-lg-3 col-sm-6 team-member even">
         <div class="team-member-img">
            <img src="<?= URLROOT.'/img/team-4-800x800.jpg';?>" alt="">
            <div class="social-icons">
               <a href="#"><i class="bx bxl-facebook"></i></a>
               <a href="#"><i class="bx bxl-twitter"></i></a>
               <a href="#"><i class="bx bxl-instagram"></i></a>
               <a href="#"><i class="bx bxl-github"></i></a>
            </div>
         </div>
         <div class="p-4">
            <h5 class="title-sm mt-3 mb-0 text-white">John Foe</h5>
            <small class="text-white"></small>
            <div class="hline"></div>
            <p class="text-white">Well skillful lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>
         </div>
      </div>
      <div class="col-lg-3 col-sm-6 team-member">
         <div class="team-member-img">
            <img src="<?= URLROOT.'/img/team-6-800x800.jpg';?>" alt="">
            <div class="social-icons">
               <a href="#"><i class="bx bxl-facebook"></i></a>
               <a href="#"><i class="bx bxl-twitter"></i></a>
               <a href="#"><i class="bx bxl-instagram"></i></a>
               <a href="#"><i class="bx bxl-github"></i></a>
            </div>
         </div>
         <div class="p-4">
            <h5 class="title-sm mt-3 mb-0 text-white">John Foe</h5>
            <small class="text-white"></small>
            <div class="hline"></div>
            <p class="text-white">Well skillful lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>
         </div>
      </div>
      <div class="col-lg-3 col-sm-6 team-member even">
         <div class="team-member-img">
            <img src="<?= URLROOT.'/img/team-8-800x800.jpg';?>" alt="">
            <div class="social-icons">
               <a href="#"><i class="bx bxl-facebook"></i></a>
               <a href="#"><i class="bx bxl-twitter"></i></a>
               <a href="#"><i class="bx bxl-instagram"></i></a>
               <a href="#"><i class="bx bxl-github"></i></a>
            </div>
         </div>
         <div class="p-4">
            <h5 class="title-sm mt-3 mb-0 text-white">John Foe</h5>
            <small class="text-white"></small>
            <div class="hline"></div>
            <p class="text-white">Well skillful lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>
         </div>
      </div>
   </section>

   

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


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="js/bootstrap.bundle.min.js"></script>
    
  </body>
</html> 