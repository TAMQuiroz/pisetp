$('#checkNickname').on('click', function(e){
    //e.preventDefault();

    task_nickname = $('#nickname').val();

    $.ajax({
        url: '/ajax/checkNickname',
        type: 'get',
        data: {
            'task_nickname': task_nickname
        },
        
        success: function(data, status) {
            //console.log(data);
            if(data.success){
                $('#nickname').removeClass('error');
                $('#response').removeClass('error');
                $('#response').removeClass('bg-danger');
            }else{
                $('#nickname').addClass('error');
                $('#response').addClass('error');
                $('#response').addClass('bg-danger');
            }
            $('#response').html(data.message);
            setTimeout(function(){
                $(".collapse").collapse('hide');
            },1500); 
        },
        error: function(xhr, desc, err) {
            console.log(xhr);
            console.log("Details: " + desc + "\nError:" + err);
        }
    });
});