<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
    
       
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="css/style.css">
        
    
        <title>ShipCruiseTour</title>
</head>
<body>

<a class='fas fa-angle-double-left' style='font-size:28px;color:Black ' href="<?= URLROOT.'/pages/index';?>"></a>
            
  <div class="wrapper">
  <div class="left">
      <h3>Wellcome</h3>  
       
    <img src="../img/nn.png" alt="Rocket_image">
  </div>
  <div class="right">
    <div class="tabs">
      <ul>
        <li class="login_li">Register</li>
      </ul>
    </div>
    <form   class="register" action="<?php echo URLROOT; ?>/Users/register" method="POST">
    <div class="input_field">
     <input type="text" value="" name="nom" placeholder="nom" class="input" >
   </div>
   <div class="input_field">
     <input type="text" value="" name="prenom" placeholder="prenom" class="input" >
   </div>
   <div class="input_field">
     <input type="email" value="" name="email" placeholder="email" class="input" >
   </div>
   <div class="input_field">
     <input type="password" value="" name="pass" placeholder="Pass" class="input" >
   </div>
  
   <button type="submit" class="btn">Register</button>
   

    </form>
  </div>
</div>
</body>
</html>