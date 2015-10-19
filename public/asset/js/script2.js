	function Mostrar(lnk){
	    $('#table').empty();
		var route = "/articulos/"+lnk+"/edit";

		$.get(route, function(res){
			$.each(res,function(key,value){
				console.log(value.id)
    		$('#table').append('<tr><td><h2>'+value.titulo+'</h2></td></tr><tr><td>'+value.articulo+'</td></tr>')

			});		

		}); 
	}

