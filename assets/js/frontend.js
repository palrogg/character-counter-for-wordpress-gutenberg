jQuery( document ).ready( function ( e ) {
	var sum = 0;
	jQuery('.novella-entry-content p, .novella-entry-content h2').each(function(i, elem){
	    sum += jQuery(elem).text().length;
	})
	console.log(sum);
});