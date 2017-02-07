function obtenerMaestro() {
		var codigo = document.getElementById("codmaestro").value;
        if(codigo!=""){
		$.ajax({
			type:'POST',
			url: 'generar.php',
            dataType: 'json',
            data:{ codmaestro:$('#codmaestro').val(),tag:"maestro"}
            }).done(function(respuesta){
                if(respuesta==0){
                   swal('Error','El codigo no existe!','error'); 
                }else{
                    $("#nom_maestro").val(respuesta.nombre);
                    $('#seg_nombre').val(respuesta.seg_nombre);
                    $("#ape_paterno").val(respuesta.ap_paterno);
                    $("#ape_materno").val(respuesta.ap_materno);
                    $("#licenciatura").val(respuesta.licenciatura);
                    swal('Enviado','Enviado correctamente','success');
                }
            });
        }else{
            swal('Error','El codigo no es valido esta vacio','error');
        }
}
function obtenerClase(){
    var codigo = document.getElementById("codclase").value;
    if(codigo!=""){
        $.ajax({
			type:'POST',
			url: 'generar.php',
            dataType: 'json',
            data:{ codclase:$('#codclase').val(),tag:"clase"}
            }).done(function(respuesta){
                if(respuesta==0){
                   swal('Error','El codigo no existe!','error'); 
                }else{
                    $('#nomclase').val(respuesta.clase);
                    swal('Enviado','Enviado correctamente','success');
                }
            });
    }else{
        swal('Error','El codigo no es valido esta vacio','error');
    }
}
function agregarClase(){
     $.ajax({
			type:'POST',
			url: 'generar.php',
            dataType: 'json',
            data:{ clase:$('#codclase').val(),maestro:$('#codmaestro').val(),tag:"agregar"}
            }).done(function(respuesta){
                if(respuesta==0){
                   swal('Error','No se inserto los datos','error'); 
                }else{
                    //$('#clases').html("<p>");
                    swal('Enviado','Se insertaron los datos correctamente','success');
                }
            });
}