$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})


//Timeout para alertas

window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);

// Initialize file input with defaults with plugin options
$( document ).ready(function() {
    //Para inicializar los popover en toda la aplicacion
    $('[data-toggle="popover"]').popover();
    
    //Mas informacion sobre fileinput aqui http://plugins.krajee.com/file-input
	$("#image").fileinput({'showUpload':false, 'previewFileType':'any', 'language':'es', 'showUpload':false, 'allowedFileTypes':['image'], 'maxFileSize':2048});
    $("#file").fileinput({'showUpload':false, 'previewFileType':'any', 'language':'es', 'showUpload':false, 'allowedFileExtensions':['doc', 'docx','ppt', 'pptx','xls', 'xlsx','pdf','jpg','png'], 'maxFileSize':2048});

    //Mas informacion sobre bootstrap datepicker aqui http://eonasdan.github.io/bootstrap-datetimepicker/
    $('#date').datetimepicker({
    	locale: 'es',
    	showTodayButton: true,
    	format: 'YYYY-MM-DD'
    });

    $('#dateIni').datetimepicker({
    	locale: 'es',
    	showTodayButton: true,
    	format: 'YYYY-MM-DD'
    });

    $('#dateEnd').datetimepicker({
    	locale: 'es',
    	showTodayButton: true,
    	format: 'YYYY-MM-DD'
    });

    $("#dateIni").on("dp.change", function (e) {
        $('#dateEnd').data("DateTimePicker").minDate(e.date);
    });
    $("#dateEnd").on("dp.change", function (e) {
        $('#dateIni').data("DateTimePicker").maxDate(e.date);
    });

    $("form").validate();
});

