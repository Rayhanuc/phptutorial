jQuery(document).ready(function() {
	jQuery('.form1').on('submit', function(){

		var naam = jQuery('input#naam').val();
		var address = jQuery('textarea#address').val();

		// $.ajax({
		// 	'url': 'process.php',
		// 	'success':function(result){
		// 		jQuery('.help').text(result);
		// 	},

		// 	'type': 'post',
		// 	'data': {
		// 		'naam':naam,
		// 		'address': address
		// 	}
		// });

		$.post('process.php',
					{
				'naam':naam,
				'address': address
					}
			,function(result){
				jQuery('.help').text(result);
			})

		return false
	});
});