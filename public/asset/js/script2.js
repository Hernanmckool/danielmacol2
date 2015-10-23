$(document).ready(function(){
	var tipo = $("#tipo").val();
	if(tipo == "secciones"){
		Mostrar_sec();
	}

	if(tipo == "categorias"){
		Mostrar_cat();
	}

	if(tipo == "articulos"){
		Mostrar_art();
	}

});



function Mostrar(lnk){
    $('#table').empty();
	var route = "/articulos/"+lnk+"/show";

	$.get(route, function(res){
		$.each(res,function(key,value){
		$('#table').append('<tr><td><h2>'+value.titulo+'</h2></td></tr><tr><td>'+value.articulo+'</td></tr>')

		});		

	}); 
}

function Mostrar_sec(){
    $('#table_sec').empty();
	var route = "/secciones/listing";

	$.get(route, function(res){
		$.each(res,function(key,value){
		$('#table_sec').append("<tr><td>"+value.seccion+"</td><td><div align='center'><button value="+value.id+" OnClick='Modal_edit_sec(this);' class='btn btn-sm btn-warning btn-flat, glyphicon glyphicon-pencil' data-toggle='modal' data-target='#myModal'></button>&nbsp;&nbsp;<button value="+value.id+" OnClick='Modal_elim_sec(this);' class='btn btn-sm btn-danger btn-flat, glyphicon glyphicon-remove' data-toggle='modal' data-target='#myModalElim'></button>");
		});		
	}); 
}

function Mostrar_cat(){
    $('#table_cat').empty();
	var route = "/categorias/listing";

	$.get(route, function(res){
		$.each(res,function(key,value){
		$('#table_cat').append("<tr><td>"+value.categoria+"</td><td>"+value.seccion+"</td><td><div align='center'><button value="+value.id+" OnClick='Modal_edit_cat(this);' class='btn btn-default btn-flat, glyphicon glyphicon-pencil' data-toggle='modal' data-target='#myModal'></button>");
		});		
	}); 
}

function Mostrar_art(){
    $('#table_art').empty();
	var route = "/articulos/listing";

	$.get(route, function(res){
		$.each(res,function(key,value){
		$('#table_art').append("<tr><td>"+value.titulo+"</td><td>"+value.categoria+"</td><td><div align='center'><button value="+value.id+" OnClick='Modal_edit_art(this);' class='btn btn-default btn-flat, glyphicon glyphicon-pencil' data-toggle='modal' data-target='#myModal'></button>");
		});		
	}); 
}


function Modal_edit_usr(btn){
	var route="/usuario/"+btn.value+"/edit";
    $('#nombre').empty();
    $('#apellido').empty();
    $('#email').empty();

	$.get(route, function(res){
		$(res).each(function(key,value){
		$("#nombre").val(value.nombre);
		$("#apellido").val(value.apellido);
		$("#email").val(value.email);
		});
	});
}

function Modal_edit_sec(btn){
	var route= "/secciones/"+btn.value+"/edit";
    $('#id').empty();
    $('#seccion').empty();

	$.get(route, function(res){
		$(res).each(function(key,value){
			$("#id").val(value.id);
			$("#seccion").val(value.seccion);
		});
	});
}

function Modal_edit_cat(btn){
	var route= "/categorias/"+btn.value+"/edit";
	var route2= "/secciones/combo";
    $('#id').empty();
    $('#categoria').empty();
    $('#seccion').empty();

    $.get(route2, function(data){
    	$.each(data, function(index, secObj){
    		$('#seccion').append('<option value="'+secObj.id+'">'+secObj.seccion+'</option>')
    	});
    });

	$.get(route, function(res){
		$(res).each(function(key,value){
			$("#id").val(value.id);
			$("#categoria").val(value.categoria);
			$('#seccion > option[value="'+value.id_seccion+'"]').attr('selected', 'selected');
		});
	});
}

function Modal_edit_art(btn){
	var route= "/articulos/"+btn.value+"/edit";
	var route2= "/categorias/combo";
    $('#id').empty();
    $('#titulo').empty();
    $('#articulo').empty();
    $('#categoria').empty();

    $.get(route2, function(data){
    	$.each(data, function(index, artObj){
    		$('#categoria').append('<option value="'+artObj.id+'">'+artObj.categoria+'</option>')
    	});
    });

	$.get(route, function(res){
		$(res).each(function(key,value){
			$("#id").val(value.id);
			$("#titulo").val(value.titulo);
			$("#articulo").val(value.articulo);
			$('#categoria > option[value="'+value.id_categoria+'"]').attr('selected', 'selected');
		});
	});
}

$("#act_seccion").click(function(){
	var value = $("#id").val();
	var	dato = $("#seccion").val();
	var route = "/secciones/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {seccion: dato},
		success: function(){
			Mostrar_sec();
			$("#myModal").modal('toggle');
			$("#msj-success-act").fadeIn(2000);
		    setTimeout(function() {
		        $("#msj-success-act").fadeOut(1500);
		    },5000);
		}

	});
});

$("#act_categoria").click(function(){
	var value = $("#id").val();
	var	cate = $("#categoria").val();
	var	secc = $("#seccion").val();
	var route = "/categorias/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {categoria: cate, id_seccion: secc},
		success: function(){
			Mostrar_cat();
			$("#myModal").modal('toggle');
			$("#msj-success-act").fadeIn(2000);
		    setTimeout(function() {
		        $("#msj-success-act").fadeOut(1500);
		    },5000);
		}

	});
});

$("#act_articulo").click(function(){
	var value = $("#id").val();
	var	titu = $("#titulo").val();
	var	artc = $("#articulo").val();
	var	cate = $("#categoria").val();
	var route = "/articulos/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {titulo: titu, articulo: artc, id_categoria: cate},
		success: function(){
			Mostrar_art();
			$("#myModal").modal('toggle');
			$("#msj-success-act").fadeIn(2000);
		    setTimeout(function() {
		        $("#msj-success-act").fadeOut(1500);
		    },5000);
		}

	});
});

function Modal_elim_sec(btn){
	$("#id").val(btn.value);
}

function Elim_sec(){
	var value = $("#id").val();
	var route = "/secciones/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Mostrar_sec();
			$("#myModalElim").modal('toggle');
			$("#msj-success-elim").fadeIn(2000);
		    setTimeout(function() {
		        $("#msj-success-elim").fadeOut(1500);
		    },5000);
		}
	});

}
