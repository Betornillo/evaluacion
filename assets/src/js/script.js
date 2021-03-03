function toggleSignup() {
    if($('#loginButton').val() == 0) {
        $('#firstnameDiv').show();
        $('#lastnameDiv').show();
        $('#confirmPasswordDiv').show();
        $('#loginButton').val('1');
        $('#loginButton').html('Sign Up');
        $('#toggleMessage').html('<a href="#">Inicia sesion con tu cuenta si ya tienes una.</a>');
    }
    else
    {
        $('#firstnameDiv').hide();
        $('#lastnameDiv').hide();
        $('#confirmPasswordDiv').hide();
        $('#loginButton').val('0');
        $('#loginButton').html('Log In');
        $('#toggleMessage').html('<a href="#">Si todavía no tienes cuenta, presiona aquí.</a>');
    }
}
