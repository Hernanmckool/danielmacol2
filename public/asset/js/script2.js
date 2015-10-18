	function Mostrar(bnt){
		var route="/usuario/"+bnt.value+"/edit";

		$.get(route, function(res){
			$(res).each(function(key,value){
			$("#documento").val(value.nombres);
			$("#telefono").val(value.telefono);
			$("#pais").val(value.pais);
			$("#estado").val(value.estado);
			$("#direccion").val(value.direccion);
			$("#postal").val(value.postal);
			$("#profesion").val(value.profesion);
			$("#cargo").val(value.cargos);
			$("#departamento").val(value.departamento);
			$("#email").val(value.email);
			$("#toperador").val(value.id_operador);
			$("#usuario").val(value.usuario);
			});
		});
	}

    $('#id_pais').on('change',function(e){
    console.log(e);

    var pais_id = e.target.value;
    $('#id_estado').empty();
    $.get('/ajax-estado?pais_id=' + pais_id, function(data){

    	$.each(data, function(index, estadoObj){
    		$('#id_estado').append('<option value="'+estadoObj.id+'">'+estadoObj.nombre+'</option>')
    	});

    });
  });
