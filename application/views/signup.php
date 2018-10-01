<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('css/materialize.min.css') ?>"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <div class="row">
        <div class="col s12 m4 offset-m4">
            <div class="card">
                <div class="card-action teal lighten-1 white-text">
                    <h3>Sign Up</h3>
                </div>
                <form method="POST" action="<?php echo base_url('index.php/signup_control/signup_validate') ?>">
                    <div class="card-content" id="loginform">
                        <div class="form-field">
                            <label for="username">Username</label>
                            <input name="username" type="text" id="username">
                            <p id="usernamealert" style="visibility: hidden; color: red;">Username cannot be blank</p>

                        </div><br>
                        <div class="form-field">
                            <label for="usertype">User Type</label>
                            <select name="usertype" required>
                              <option value="" disabled selected>Choose user type</option>
                              <option value="doctors">Doctor</option>
                              <option value="patients">Patient</option>
                          </select>
                      </div><br>
                      <div class="form-field">
                        <label for="email">Email</label>
                        <input name="email" type="text" id="email">
                        <p id="emailalert" style="visibility: hidden; color: red;">Email cannot be blank</p>

                    </div><br>
                    <div class="form-field">
                        <label for="password">Password</label>
                        <input name="password" type="password" id="password">
                        <p id="pwdalert" style="visibility: hidden; color: red;">Password cannot be blank</p>

                    </div><br>
                    <div class="form-field">
                        <label for="confirmPassword">Confirm Password</label>
                        <input name="confirmPassword" type="password" id="confirmPassword">
                        <p id="confirmalert" style="visibility: hidden; color: red;">Passwords don't match</p>

                    </div><br>
                    <div class="form-field">
                        <button type="submit" class="btn-large waves-effect waves-dark" style="width: 100%;">Sign Up</button>
                        <?php 
                        echo $this->session->flashdata("error");
                        ?>
                    </div><br>
                </div>                    
            </form>
        </div>
    </div>
</div>
<!--JavaScript at end of body for optimized loading-->
<script src="<?php echo base_url('js/jquery-3.1.1.min.js') ?> "></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('select').formSelect();
});
</script>
<script type="text/javascript" src="<?php echo base_url('js/materialize.min.js') ?> "></script>
<script type="text/javascript" src="<?php echo base_url('js/form_validation.js') ?> "></script>
</body>
</html>
