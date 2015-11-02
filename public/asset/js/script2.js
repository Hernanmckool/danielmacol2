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
	if(tipo == "usuario"){
		Mostrar_usr();
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

function Mostrar_usr(){
    $('#table_usr').empty();
	var route = "/usuario/listing";

	$.get(route, function(res){
		$.each(res,function(key,value){
		$('#table_usr').append("<tr><td>"+value.nombre+"</td><td>"+value.apellido+"</td><td>"+value.email+"</td><td><div align='center'><button value="+value.id+" OnClick='Modal_edit_usr(this);' class='btn btn-sm btn-warning btn-flat, glyphicon glyphicon-pencil' data-toggle='modal' data-target='#myModal'></button>&nbsp;&nbsp;<button value="+value.id+" OnClick='Modal_elim_usr(this);' class='btn btn-sm btn-danger btn-flat, glyphicon glyphicon-remove' data-toggle='modal' data-target='#myModalElim'></button>");
		});		
	}); 
}

function Mostrar_sec(){
    $('#table_sec').append("<tr align='center'><td colspan='2'><img src='asset/img/loading.gif' alt='Cargando' width='60' height='60'> </td><td>");
	var route = "/secciones/listing";

	$.get(route, function(res){
		$('#table_sec').empty();			
		$.each(res,function(key,value){
		$('#table_sec').append("<tr><td>"+value.seccion+"</td><td><div align='center'><button value="+value.id+" OnClick='Modal_edit_sec(this);' class='btn btn-sm btn-warning btn-flat, glyphicon glyphicon-pencil' data-toggle='modal' data-target='#myModal'></button>&nbsp;&nbsp;<button value="+value.id+" OnClick='Modal_elim_sec(this);' class='btn btn-sm btn-danger btn-flat, glyphicon glyphicon-remove' data-toggle='modal' data-target='#myModalElim'></button>");
		});		
	}); 
}

function Mostrar_cat(){
    $('#table_cat').append("<tr align='center'><td colspan='3'><img src='asset/img/loading.gif' alt='Cargando' width='60' height='60'> </td><td>");
	var route = "/categorias/listing";

	$.get(route, function(res){
	    $('#table_cat').empty();
		$.each(res,function(key,value){
		$('#table_cat').append("<tr><td>"+value.categoria+"</td><td>"+value.seccion+"</td><td><div align='center'><button value="+value.id+" OnClick='Modal_edit_cat(this);' class='btn btn-sm btn-warning btn-flat, glyphicon glyphicon-pencil' data-toggle='modal' data-target='#myModal'></button>&nbsp;&nbsp;<button value="+value.id+" OnClick='Modal_elim_cat(this);' class='btn btn-sm btn-danger btn-flat, glyphicon glyphicon-remove' data-toggle='modal' data-target='#myModalElim'></button>");
		});		
	}); 
}

function Mostrar_art(){
    $('#table_art').append("<tr align='center'><td colspan='3'><img src='asset/img/loading.gif' alt='Cargando' width='60' height='60'> </td><td>");
	var route = "/articulos/listing";

	$.get(route, function(res){
	    $('#table_art').empty();
		$.each(res,function(key,value){
		$('#table_art').append("<tr><td>"+value.titulo+"</td><td>"+value.categoria+"</td><td><div align='center'><button value="+value.id+" OnClick='Modal_edit_art(this);' class='btn btn-sm btn-warning btn-flat, glyphicon glyphicon-pencil' data-toggle='modal' data-target='#myModal'></button>&nbsp;&nbsp;<button value="+value.id+" OnClick='Modal_elim_art(this);' class='btn btn-sm btn-danger btn-flat, glyphicon glyphicon-remove' data-toggle='modal' data-target='#myModalElim'></button>");
		});		
	}); 
}


function Modal_edit_usr(btn){
	var route="/usuario/"+btn.value+"/edit";
    $('#id').empty();
    $('#nombre').empty();
    $('#apellido').empty();
    $('#email').empty();
    $('#nombres').empty();
    $('#apellidos').empty();

	$.get(route, function(res){
		$(res).each(function(key,value){
		$("#id").val(value.id);
		$("#nombres").html(value.nombre);
		$("#apellidos").html(value.apellido);
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

$("#act_usuario").click(function(){
	var value = $("#id").val();
	var	nom = $("#nombre").val();
	var	ape = $("#apellido").val();
	var	ema = $("#email").val();
	var route = "/usuario/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {nombre: nom, apellido: ape, email: ema},
		success: function(){
			Mostrar_usr();
			$("#myModal").modal('toggle');
			$("#msj-success-act").fadeIn(2000);
		    setTimeout(function() {
		        $("#msj-success-act").fadeOut(1500);
		    },5000);
		},
        error: function(msj) { 
		var v1 = msj.responseJSON.nombre;
		var v2 = msj.responseJSON.apellido;
		var v3 = msj.responseJSON.email;
		$("#msj_v1").empty();
		$("#msj_v2").empty();
		$("#msj_v3").empty();

		Mostrar_usr();

		$("#myModal").modal('toggle');

		if (v1 != undefined){
		$("#msj_v1").html(v1);
		$("#msj-error-valid-v1").fadeIn(2000);
		    setTimeout(function() {
		        $("#msj-error-valid-v1").fadeOut(1500);
		    },5000);
		}

		if (v2 != undefined){
		$("#msj_v2").html(v2);
		$("#msj-error-valid-v2").fadeIn(2000);
		    setTimeout(function() {
		        $("#msj-error-valid-v2").fadeOut(1500);
		    },5000);
		}

		if (v3 != undefined){
		$("#msj_v3").html(v3);
		$("#msj-error-valid-v3").fadeIn(2000);
		    setTimeout(function() {
		        $("#msj-error-valid-v3").fadeOut(1500);
		    },5000);
		}
		}
	});
});


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
		},
        error: function(msj) { 
		var v1 = msj.responseJSON.seccion;
		$("#msj_v1").empty();

		Mostrar_sec();

		$("#myModal").modal('toggle');

		if (v1 != undefined){
		$("#msj_v1").html(v1);
		$("#msj-error-valid-v1").fadeIn(2000);
		    setTimeout(function() {
		        $("#msj-error-valid-v1").fadeOut(1500);
		    },5000);
		}
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
		},
        error: function(msj) { 
		var v1 = msj.responseJSON.categoria;
		$("#msj_v1").empty();

		Mostrar_cat();

		$("#myModal").modal('toggle');

		if (v1 != undefined){
		$("#msj_v1").html(v1);
		$("#msj-error-valid-v1").fadeIn(2000);
		    setTimeout(function() {
		        $("#msj-error-valid-v1").fadeOut(1500);
		    },5000);
		}
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
		},
        error: function(msj) { 
		var v1 = msj.responseJSON.titulo;
		var v2 = msj.responseJSON.articulo;
		$("#msj_v1").empty();
		$("#msj_v2").empty();

		Mostrar_art();

		$("#myModal").modal('toggle');

		if (v1 != undefined){
		$("#msj_v1").html(v1);
		$("#msj-error-valid-v1").fadeIn(2000);
		    setTimeout(function() {
		        $("#msj-error-valid-v1").fadeOut(1500);
		    },5000);
		}
		if (v2 != undefined){
		$("#msj_v2").html(v2);
		$("#msj-error-valid-v2").fadeIn(2000);
		    setTimeout(function() {
		        $("#msj-error-valid-v2").fadeOut(1500);
		    },5000);
		}
		}
	});
});

function Modal_elim_sec(btn){
	var texto = "Esta seguro de eliminar esta Seccion?"
    $('#id').empty();
    $('#tipos').empty();
    $('#div').empty();

	$("#id").val(btn.value);
	$("#tipos").html(texto);
	$('#div').append("<button type='button' class='btn btn-outline pull-left' data-dismiss='modal'>Cerrar</button><button type='button' class='btn btn-outline' onclick='Elim_sec();'>Continuar</button>");
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

function Modal_elim_cat(btn){
	var texto = "Esta seguro de eliminar esta Categoria?"
    $('#id').empty();
    $('#tipos').empty();
    $('#div').empty();

	$("#id").val(btn.value);
	$("#tipos").html(texto);
	$('#div').append("<button type='button' class='btn btn-outline pull-left' data-dismiss='modal'>Cerrar</button><button type='button' class='btn btn-outline' onclick='Elim_cat();'>Continuar</button>");

}

function Elim_cat(){
	var value = $("#id").val();
	var route = "/categorias/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Mostrar_cat();
			$("#myModalElim").modal('toggle');
			$("#msj-success-elim").fadeIn(2000);
		    setTimeout(function() {
		        $("#msj-success-elim").fadeOut(1500);
		    },5000);
		}
	});

}

function Modal_elim_art(btn){
	var texto = "Esta seguro de eliminar este Articulo?"
    $('#id').empty();
    $('#tipos').empty();
    $('#div').empty();

	$("#id").val(btn.value);
	$("#tipos").html(texto);
	$('#div').append("<button type='button' class='btn btn-outline pull-left' data-dismiss='modal'>Cerrar</button><button type='button' class='btn btn-outline' onclick='Elim_art();'>Continuar</button>");

}

function Elim_art(){
	var value = $("#id").val();
	var route = "/articulos/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			Mostrar_art();
			$("#myModalElim").modal('toggle');
			$("#msj-success-elim").fadeIn(2000);
		    setTimeout(function() {
		        $("#msj-success-elim").fadeOut(1500);
		    },5000);
		}
	});

}

function Modal_elim_usr(btn){
	var texto = "Esta seguro de eliminar este Usuario?"
    $('#id').empty();
    $('#tipos').empty();
    $('#div').empty();

	$("#id").val(btn.value);
	$("#tipos").html(texto);
	$('#div').append("<button type='button' class='btn btn-outline pull-left' data-dismiss='modal'>Cerrar</button><button type='button' class='btn btn-outline' onclick='Elim_usr();'>Continuar</button>");

}

function Elim_usr(){
	var value = $("#id").val();
	var route = "/usuario/"+value+"/eliminar";
	var token = $("#token").val();
	window.location.href = route;

}
