var BASE_URL = "http://127.0.0.1/payrollmanagementsystem/";

$(function() {
    $("form#addemployeeform").on('submit', function(e) {
        e.preventDefault();

        var addemployeeForm = $(this);

        $.ajax({
            url: addemployeeForm.attr('action'),
            type: 'POST',
            data: new FormData(this),
            cache:false,
            processData: false,
            contentType: false,
            success: function(response){
                console.log(response);
                if(response.status == 'success') {
                    $("#success_message").removeClass("d-none");

                }else if(response.status == 'failed'){
                    $("#failed_message").removeClass("d-none");

                }
            },complete: function(){
                $('#addemployeeform')[0].reset();
            }
        });
    });
});

$(function() {
    $("#addemployeeformUpdate").on('submit', function(e) {
        e.preventDefault();

        var addemployeeFormUpdate = $(this);

        $.ajax({
            url: addemployeeFormUpdate.attr('action'),
            type: 'post',
            data: new FormData(this),
            cache:false,
            processData: false,
            contentType: false,
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