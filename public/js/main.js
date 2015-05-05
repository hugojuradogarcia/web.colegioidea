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
				var recursos = data;
				alert(data.editor);
				//console.log(data[2])
				//$('#data-article').html( data['editor'] );

				//document.getElementById("data-article").innerHTML = data;
			}
		});
	});
})