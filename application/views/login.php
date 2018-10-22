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
<script type="text/javascript" src="/MentalHealth/js/form_validation.js"></script>
</body>
</html>