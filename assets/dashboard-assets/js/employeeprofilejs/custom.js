var BASE_URL = "http://127.0.0.1/payrollmanagementsystem/";

$(function() {
    $("#empprofileformUpdate").on('submit', function(e) {
        e.preventDefault();

        var empprofileFormUpdate = $(this);

        $.ajax({
            url: empprofileFormUpdate.attr('action'),
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