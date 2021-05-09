var BASE_URL = "http://127.0.0.1/payrollmanagementsystem/";

$(function() {
    $("#empbankformUpdate").on('submit', function(e) {
        e.preventDefault();

        var employeebankFormUpdate = $(this);

        $.ajax({
            url: employeebankFormUpdate.attr('action'),
            type: 'post',
            data: employeebankFormUpdate.serialize(),
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