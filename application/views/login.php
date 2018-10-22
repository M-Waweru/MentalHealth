<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="/MentalHealth/css/materialize.min.css"  media="screen,projection"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
  <ul id="accountcontent" class="dropdown-content">
    <li><a href="#!">Account Settings</a></li>
    <li><a href="#!">Notifications</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
  </ul>
  <nav>
    <div class="nav-wrapper">
      <a href="<?php echo base_url() ?>" class="brand-logo">Hey Friend</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <?php 
        if ($this->session->userdata('username')!=''){
          echo "<li><a class='dropdown-trigger' data-target='accountcontent' href='#'>".$this->session->userdata('username')."</a></li>";
          echo "<li><a href=''>Get Professional Help</a></li>";
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
  <div class="container">
    <div class="row">
         <div class="col s12 m6 offset-m3">
    <div class="card">
      <div class="card-action teal lighten-1 white-text">
        <h3>Login</h3>
      </div>
      <form action="<?php echo base_url('/index.php/login/login_validate') ?>" method="post">
       <div class="card-content" id="loginform">
        <p class="red">
          <?php echo validation_errors(); ?>
        </p>
        <div class="form-field">
          <label for="usertype">User Type</label>
          <select name="usertype" required>
            <option value="" disabled selected>Choose user type</option>
            <option value="doctors">Doctor</option>
            <option value="patients">Patient</option>
          </select>
        </div><br>
        <div class="form-field">
          <label for="username">Username</label>
          <input name="username" type="text" id="username">
          <p id="usernamealert" style="visibility: hidden; color: red;">Username cannot be blank</p>
        </div><br>
        <div class="form-field">
          <label for="password">Password</label>
          <input name="password" type="password" id="password">
          <p id="pwdalert" style="visibility: hidden; color: red;">Password cannot be blank</p>
        </div><br>
        <p style="color: red;">
          <?php 
          echo $this->session->flashdata("error");
          ?>
        </p>
        <div class="form-field">
          <button type="submit" class="btn-large waves-effect waves-dark" style="width: 100%;">Login</button>
        </div><br>
      </div>                    
    </form>
  </div>
</div>
</div>
    </div>

<script src="<?php echo base_url('js/jquery-3.1.1.min.js') ?> "></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('select').formSelect();
    $('.sidenav').sidenav();
    $(".dropdown-trigger").dropdown();  
  });
</script>
<!-- <script type="text/javascript" src="/MentalHealth/js/materialize.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url('/js/materialize.min.js') ?>"></script>
<script type="text/javascript" src="/MentalHealth/js/form_validation.js"></script>
</body>
</html>