$(document).ready(function(){

    $("#hidelogin").click(function(){
        $("#LoginForm").hide();
        $("#registerForm").show();
    });

    $("#hideRegister").click(function(){
        $("#LoginForm").show();
        $("#registerForm").hide();
    });

});