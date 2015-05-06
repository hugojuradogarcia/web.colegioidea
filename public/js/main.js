// CLICK MODAL RECURSOS
$(document).ready(function(){
	$("a[href^='#'].recursos").click(function(event){
		var id =  $(this).attr("href");
		var id_recursos = id.replace("#", "");

		console.log(id_recursos);
		$.ajax({
			type 	: "POST",
			url 	: "actions/consultaRecursos.php",
			data	: "id_recursos=" + id_recursos,
			datatype: "json",
			success : function ( data ){
				//alert(data);
				var recursos = jQuery.parseJSON(data);
				//alert(data);
				//console.log(data[2])
				$('#md-modal-title').html( recursos.editor );
				$('#md-modal-text').html( recursos.descriptivo );
				$('.md-modal').css("max-width","900px");
				//document.getElementById("data-article").innerHTML = data;
			}
		});
	});
})