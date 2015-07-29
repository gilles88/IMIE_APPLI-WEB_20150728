jQuery(document).ready(function($) {
	
	//search user
	$('.search_form form button').click(function(event) {
		var err = 0;
		$(this).parent().children('input').each(function(index, el) {
			if ($(this).val() == "") err++
		});
		
		if (err>1) {
			$('.content table').before('<p class="warning text-center">Veuillez remplir les champs correctement svp.</p>');
			return false;				
		}
	});

});
