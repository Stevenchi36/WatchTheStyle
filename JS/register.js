$(document).ready(function(){
    $('#password1, #password2').on('keyup', function(){

        if($('#password1').val() == $('#password2').val()){
            $('#pwError').html('Matching').css('color', 'green');
            $('#register').removeAttr('disabled');
        }
        else{
            $('#pwError').html('Not Matching').css('color','red');
            $('#register').attr('disabled','disabled');
        }

    });
});
