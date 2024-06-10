import './bootstrap';

$(document).ready(function(){
    console.log( "ready!" );
    $('#password-btn').on("click", function () {
        if($("#password").attr('type') === 'password') {
            $("#password").attr('type', 'text');
        } else {
            $("#password").attr('type', 'password');
        }
    });
});
