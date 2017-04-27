$(document).ready(function(){
    $('#password1, #password2').on('keyup', function(){

		if($('#password1').val().length < 8){
			$('#pwError').html('Password must be at least 8 characters.').css('color','red');
			$('#register').attr('disabled','disabled');
			$('.btnRegister').css('background-color','grey').css('text-shadow','');
		}
		else{
			if($('#password1').val() == $('#password2').val()){
				$('#pwError').html('Passwords Match').css('color', 'green');
				$('#register').removeAttr('disabled');
				$('.btnRegister').css('background-color','#6495ed').css('text-shadow','1px 1px 5px black');
			}
			else{
				$('#pwError').html("Passwords Don't Match").css('color','red');
				$('#register').attr('disabled','disabled');
				$('.btnRegister').css('background-color','grey');
			}
		}
    });
});
