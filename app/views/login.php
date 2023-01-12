<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
    
       
        <link rel="stylesheet" href="<?= URLROOT.'/css/style.css';?>">
        
    
        <title>ShipCruiseTour</title>
    
</head>
<body>
<a class='fas fa-angle-double-left' style='font-size:28px;color:Black ' href="<?= URLROOT.'/pages/index';?>"><</a>
  <div class="wrapper">
  <div class="left">
      <h3>Admin</h3>   
    <img src="../img/cap.webp" alt="Rocket_image">
  </div>
  <div class="right">
    <div class="tabs">
      <ul>
        <li class="login_li">login</li>
      </ul>
    </div>
    <form   class="login" action="<?php echo URLROOT; ?>/Users/login" method="POST">
   
      <div class="input_field">
        <input type="email" value="" name="email" placeholder="email" class="input" >
      </div>
      <div class="input_field">
        <input type="password" value="" name="pass" placeholder="Pass" class="input" >
      </div>
     
      <button type="submit" class="btn">Sign In</button>
      
   
	     </form>
    
    
    
  </div>
</div>
</body>
</html>