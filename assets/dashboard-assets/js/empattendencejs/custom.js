var BASE_URL = "http://127.0.0.1/payrollmanagementsystem/";

$(function() {
    $("form#attendenceform").on('submit', function(e) {
        e.preventDefault();

        var attendenceForm = $(this);

        $.ajax({
            url: attendenceForm.attr('action'),
            type: 'POST',
            data: attendenceForm.serialize(),
            success: function(response){
                console.log(response);
                if(response.status == 'success') {
                    $("#success_message").removeClass("d-none");

                }else if(response.status == 'failed'){
                    $("#failed_message").removeClass("d-none");

                }
            },complete: function(){
                $('#attendenceform')[0].reset();
            }
        });
    });
});

$(function() {
    $("#attendenceformUpdate").on('submit', function(e) {
        e.preventDefault();

        var attendenceFormUpdate = $(this);

        $.ajax({
            url: attendenceFormUpdate.attr('action'),
            type: 'post',
            data: attendenceFormUpdate.serialize(),
            success: function(response){
                console.log(response);
                if(response.status == 'success') {
                    $("#success_message").removeClass("d-none");

                }else if(response.status == 'failed'){
                    $("#failed_message").removeClass("d-none");

                }
            }
        });
    });
});