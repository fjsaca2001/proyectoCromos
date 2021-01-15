$(function() {
    $('#tematica').on('change', onSelectChange);
});
function onSelectChange(){
    var id = $(this).val();
    if(! id){
        $('#actividad').html('<option value=""> Seleccione una actividad</option>');
        return;
    }


    // ajax

    $.get('/api/agregarPregunta/'+id+'/actividades', function (data) {  
        var html_select = '<option value=""> Seleccione una actividad</option>';
        for (var i = 0; i < data.length; ++i){
            html_select += '<option value="'+data[i].idActividad+'">'+data[i].nombreActividad+'</option>';
        }
        $('#actividad').html(html_select);
    });
}