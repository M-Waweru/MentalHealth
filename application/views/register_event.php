<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
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
                    <div class="card-content" id="loginform">
                        <div class="form-field">
                            <p id="namealert" style="visibility: hidden; color: red;">Name cannot be blank</p>
                            <label for="name">Name of event</label>
                            <input type="text" id="name">
                        </div><br>
                        <div class="form-field input-field">
                            <p id="Descriptionalert" style="visibility: hidden; color: red;">Description cannot be blank</p>
                            <label for="Description">Description</label>
                            <textarea id="description" class="materialize-textarea"></textarea>
                        </div><br>
                        <div class="form-field">
                            <p id="Typealert" style="visibility: hidden; color: red;">Type cannot be blank</p>
                            <label for="Type">Type</label>
                            <input type="text" id="Type">
                        </div><br>
                        <div class="form-field">
                            <p id="datealert" style="visibility: hidden; color: red;">Date cannot be blank</p>
                            <label for="date">Date</label>
                            <input type="text" class="datepicker" id="date">
                        </div><br>
                        <div class="form-field">
                            <p id="Location" style="visibility: hidden; color: red;">Location cannot be blank</p>
                            <label for="location">Location</label>
                            <input type="text" id="location">
                        </div><br>
                        <div class="form-field">
                            <button class="btn-large waves-effect waves-dark" style="width: 100%;">Register</button>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>
        <!--JavaScript at end of body for optimized loading-->
        <script src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/event_validation.js"></script>
    </body>
</html>