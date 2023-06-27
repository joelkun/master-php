var url = 'http://proyecto-laravel.com.devel';
window.addEventListener("load", function(){
	
	//$('.btn-like').css('cursor','pointer');
	//$('.btn-dislike').css('cursor','pointer');

	// Boton de like
	function like(){ 
		$('.btn-like').unbind('click').click(function(){
			$(this).addClass('btn-dislike').removeClass('btn-like');
			$(this).attr('src',url+'/img/hearts-red.png');

			$.ajax({
				url: url+'/like/'+$(this).data('id'),
				type: 'GET',
				success: function(response){
					if(response.like){
					console.log("Has dado like");	
				}else {
					console.log("Error al  dar like");	
				}
				}
			})
			dislike();
		});
	}
	like();

	// Boton de dislike
	function dislike(){
		$('.btn-dislike').unbind('click').click(function(){
			$(this).addClass('btn-like').removeClass('btn-dislike');
			$(this).attr('src', url+'/img/hearts-gray.png');
			$.ajax({
				url: url+'/dislike/'+$(this).data('id'),
				type: 'GET',
				success: function(response){
					if(response.like){
						console.log("Has dado dislike");	
					}else {
						console.log("Error al  dar dislike");
					}
				}
			})
			like();
		});
	}
	dislike();

	// BUSCADOR
	$('#buscador').submit(function(){
		$(this).attr('action',url + '/people/'+$('#buscador #search').val());
	});


});