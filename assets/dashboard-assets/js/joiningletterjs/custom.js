var BASE_URL = "http://127.0.0.1/payrollmanagementsystem/";

$(function() {
    $("form#joinletterform").on('submit', function(e) {
        e.preventDefault();

        var joinletterForm = $(this);

        $.ajax({
            url: joinletterForm.attr('action'),
            type: 'POST',
            data: joinletterForm.serialize(),
            success: function(response){
                console.log(response);
                if(response.status == 'success') {
                    $("#success_message").removeClass("d-none");

                }else if(response.status == 'failed'){
                    $("#failed_message").removeClass("d-none");

                }
            },complete: function(){
                $('#joinletterform')[0].reset();
            }
        });
    });
});

$(function() {
    $("#joinletterformUpdate").on('submit', function(e) {
        e.preventDefault();

        var joinletterFormUpdate = $(this);

        $.ajax({
            url: joinletterFormUpdate.attr('action'),
            type: 'post',
            data: joinletterFormUpdate.serialize(),
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