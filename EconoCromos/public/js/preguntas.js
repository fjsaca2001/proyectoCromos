// Funcion para cambiar las tematicas de un album
$(function() {
    $('#album').on('change', onSelectChange);
});
function onSelectChange(){
    var id = $(this).val();
    if(! id){
        $('#tematica').html('<option disabled selected value="">Seleccione una actividad</option>');
        return;
    }


    // ajax
    $.get('/api/agregarPregunta/'+id+'/album', function (data) {  
        var html_select = '<option disabled selected value="">Seleccione una actividad</option>';
        for (var i = 0; i < data.length; ++i){
            html_select += '<option value="'+data[i].idTematica+'">'+data[i].nombreTematica+'</option>';
        }
        $('#tematica').html(html_select);
    });
}

// Funcion para cambiar las actividades de una tematica
$(function() {
    $('#tematica').on('change', onSelectChange2);
});

function onSelectChange2(){
    var id = $(this).val();
    if(! id){
        $('#actividad').html('<option disabled selected value="">Seleccione una actividad</option>');
        return;
    }

    // ajax
    $.get('/api/agregarPregunta/'+id+'/actividades', function (data) {  
        var html_select = '<option disabled selected value="">Seleccione una actividad</option>';
        for (var i = 0; i < data.length; ++i){
            html_select += '<option value="'+data[i].idActividad+'">'+data[i].nombreActividad+'</option>';
        }
        $('#actividad').html(html_select);
    });
}

// Funcion para cambiar las tematicas por album
$(function() {
    $('#albun').on('change', onSelectChange3);
});

function onSelectChange3(){
    var id = $(this).val();
    if(! id){
        $('#tematica').html('<option disabled selected value="">Seleccione una temática</option>');
        return;
    }

    // ajax
    $.get('/api/agregarActividad/'+id+'/tematicas', function (data) {  
        var html_select = '<option disabled selected value="">Seleccione una temática</option>';
        for (var i = 0; i < data.length; ++i){
            html_select += '<option value="'+data[i].idTematica+'">'+data[i].nombreTematica+'</option>';
        }
        $('#tematica').html(html_select);
    });
}