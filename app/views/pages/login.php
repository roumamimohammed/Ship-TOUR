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
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".login").hide();
                $(".register_li").addClass("active");
    
                $(".login_li").click(function(){
                  $(this).addClass("active");
                  $(".register_li").removeClass("active");
                  $(".login").show();
                   $(".register").hide();
                })
    
                $(".register_li").click(function(){
                  $(this).addClass("active");
                  $(".login_li").removeClass("active");
                  $(".register").show();
                   $(".login").hide();
                })
            });
        </script>
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
        <li class="register_li">Register</li>
        <li class="login_li">login</li>
      </ul>
    </div>
    
    <div class="register">
      <div class="input_field">
        <input type="text" placeholder="Username" class="input">
      </div>
      <div class="input_field">
        <input type="text" placeholder="E-mail" class="input">
      </div>
      <div class="input_field">
        <input type="password" placeholder="Password" class="input">
      </div>
      <div class="btn"><a href="#">Register</a></div>
    </div>
    
    <div class="login">
      <div class="input_field">
        <input type="text" placeholder="E-mail" class="input">
      </div>
      <div class="input_field">
        <input type="password" placeholder="Password" class="input">
      </div>
      <div class="btn"><a href="#">Login</a></div>
    </div>
    
  </div>
</div>
</body>
</html>