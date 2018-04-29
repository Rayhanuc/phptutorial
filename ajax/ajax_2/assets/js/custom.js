(function($){

$('.userregistration').submit(function(){
	var firstname = jQuery("input[name='first_name']").val();
	var lastname = jQuery("input[name='last_name']").val();
	var email = jQuery("input[name='email']").val();
	var password = jQuery("input[name='password']").val();


	$.ajax({
		'url':'register.php',
		'type': 'post',
		'data': {

			'firstname': firstname,
			'lastname': lastname,
			'email': email,
			'password': password,
		},
		'success': function(output){
			jQuery('.success').html(output);
		}
	})





return false;
});

}(jQuery))