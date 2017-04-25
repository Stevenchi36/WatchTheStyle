$(document).ready(function(){
    $('#password1, #password2').on('keyup', function(){

        if($('#password1').val() == $('#password2').val()){
            $('#pwError').html('Passwords Match').css('color', 'green');
            $('#register').removeAttr('disabled');
        }
        else{
            $('#pwError').html("Passwords Don't Match").css('color','red');
            $('#register').attr('disabled','disabled');
        }

    });
});
