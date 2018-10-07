<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel = "stylesheet" type = "text/css" 
  href = "/MentalHealth/css/dash.css"> 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
</head>
<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url() ?>">Hey Friend</a>
      </div>
      <ul class="nav navbar-nav">
        <?php 
        if ($this->session->userdata('username')!=''){
          echo "<li><a href=''>".$this->session->userdata('username')."</a></li>";
          echo "<li><a href=".site_url('appointment_control/').">Get Professional Help</a></li>";
          echo "<li><a href=".site_url('/login/logout').">Logout</a></li>";
        } else {
          echo "<li><a href=" . site_url('signup_control/') . ">Sign Up</a></li>";
          echo "<li><a href=''>About</a></li>";
          echo "<li><a href=" . site_url('/login/displayPage') . ">Login</a></li>";

        }
        ?>
      </ul>
    </div>
  </nav>
  
  <div class="w3-container w3-tangerine">

    <h2 class="w3-jumbo">welcome to Hey Friend</h2>
  </div>

  <div class="footer">

   <a href="#" class="fa fa-facebook"></a>
   <a href="#" class="fa fa-twitter"></a>
   <a href="#" class="fa fa-google"></a>
   <a href="#" class="fa fa-linkedin"></a>
   <a href="#" class="fa fa-youtube"></a>
   <a href="#" class="fa fa-instagram"></a>

 </div>

</body>
</html>
