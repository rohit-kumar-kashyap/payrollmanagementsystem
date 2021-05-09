var BASE_URL = "http://127.0.0.1/payrollmanagementsystem/";

$(function() {
    $("form#deductionsform").on('submit', function(e) {
        e.preventDefault();

        var deductionForm = $(this);

        $.ajax({
            url: deductionForm.attr('action'),
            type: 'POST',
            data: deductionForm.serialize(),
            success: function(response){
                console.log(response);
                if(response.status == 'success') {
                    $("#success_message").removeClass("d-none");

                }else if(response.status == 'failed'){
                    $("#failed_message").removeClass("d-none");

                }
            },complete: function(){
                $('#deductionsform')[0].reset();
            }
        });
    });
});

$(function() {
    $("#deductionformUpdate").on('submit', function(e) {
        e.preventDefault();

        var deductionFormUpdate = $(this);

        $.ajax({
            url: deductionFormUpdate.attr('action'),
            type: 'post',
            data: deductionFormUpdate.serialize(),
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