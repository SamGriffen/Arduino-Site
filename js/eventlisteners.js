if($(".svg-image").length > 0){
	$(".svg-image").on("load", function(event){
		console.log(event.target);
	})
}