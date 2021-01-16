$(function() {
    $('#tematicas').on('change', onSelectChange);
});
function onSelectChange(){
    var id = $(this).val();
    if(! id){
        id=1;
    }

    // ajax

    $.get('/api/actividades/'+id+'/actividades', function (data) {  
        var html_select = '';
        for (var i = 0; i < data.length; ++i){
            html_select += '<option value="'+data[i].idActividad+'">'+data[i].nombreActividad+'</option>';
        }
        $('#actividades').html(html_select);
    });
}