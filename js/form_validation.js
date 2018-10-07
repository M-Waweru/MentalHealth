$(document).ready(function() {
    console.log("hello");

    var username = $("#loginform #username");
    var email = $("#loginform #email");
    var pwd = $("#loginform #password");
    var confirmPassword = $("#loginform #confirmPassword");

    username.focusout(function() {
        if (username.val() ==null || username.val()=="") {
            if ( $('#usernamealert').css('visibility') == 'hidden' ) {
                $('#usernamealert').css('visibility','visible');
            }
        } else {
            $('#usernamealert').css('visibility', 'hidden');
        }
    });

    email.focusout(function() {
        if (email.val() ==null || email.val()=="") {
            if ( $('#emailalert').css('visibility') == 'hidden' ) {
                $('#emailalert').css('visibility','visible');
            }
        } else {
            $('#emailalert').css('visibility', 'hidden');
        }
    });

    pwd.focusout(function() {
        if (pwd.val() ==null || pwd.val()=="") {
            if ( $('#pwdalert').css('visibility') == 'hidden' ) {
                $('#pwdalert').css('visibility','visible');
            }
        } else {
            $('#pwdalert').css('visibility', 'hidden');
        }
    });

    confirmPassword.focusout(function() {
        if (confirmPassword.val() ==null || confirmPassword.val()=="" || confirmPassword.val() != pwd.val()) {
            if ( $('#confirmalert').css('visibility') == 'hidden' ) {
                $('#confirmalert').css('visibility','visible');
            }
        } else {
            $('#confirmalert').css('visibility', 'hidden');
        }
    });
});
