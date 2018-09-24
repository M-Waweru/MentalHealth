$(document).ready(function() {
    console.log("hello");

    var pwd = $("#loginform #password");
    $("#loginform #password").focusout(function() {
        console.log(pwd.val());
        if (pwd.val() ==null || pwd.val()=="") {
            if ( $('#pwdalert').css('visibility') == 'hidden' ) {
                $('#pwdalert').css('visibility','visible');
            }
        }
    });

    function validatelogin(){
        var user = document.loginform.username.value;
        var pwd = document.loginform.pwd.value;
        
    }

});
