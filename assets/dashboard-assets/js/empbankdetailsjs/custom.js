var BASE_URL = "http://127.0.0.1/payrollmanagementsystem/";

$(function() {
    $("form#empbankdetailsform").on('submit', function(e) {
        e.preventDefault();

        var empbankdetailsForm = $(this);

        $.ajax({
            url: empbankdetailsForm.attr('action'),
            type: 'POST',
            data: empbankdetailsForm.serialize(),
            success: function(response){
                console.log(response);
                if(response.status == 'success') {
                    $("#success_message").removeClass("d-none");

                }else if(response.status == 'failed'){
                    $("#failed_message").removeClass("d-none");

                }
            },complete: function(){
                $('#empbankdetailsform')[0].reset();
            }
        });
    });
});

$(function() {
    $("#empbankdetailsformUpdate").on('submit', function(e) {
        e.preventDefault();

        var empbankdetailsFormUpdate = $(this);

        $.ajax({
            url: empbankdetailsFormUpdate.attr('action'),
            type: 'post',
            data: empbankdetailsFormUpdate.serialize(),
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