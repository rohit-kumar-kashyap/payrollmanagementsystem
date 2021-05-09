var BASE_URL = "http://127.0.0.1/payrollmanagementsystem/";

$(function() {
    $("form#salaryform").on('submit', function(e) {
        e.preventDefault();

        var salaryForm = $(this);

        $.ajax({
            url: salaryForm.attr('action'),
            type: 'POST',
            data: salaryForm.serialize(),
            success: function(response){
                console.log(response);
                if(response.status == 'success') {
                    $("#success_message").removeClass("d-none");

                }else if(response.status == 'failed'){
                    $("#failed_message").removeClass("d-none");

                }
            },complete: function(){
                $('#salaryform')[0].reset();
            }
        });
    });
});

$(function() {
    $("#salaryformUpdate").on('submit', function(e) {
        e.preventDefault();

        var salaryFormUpdate = $(this);

        $.ajax({
            url: salaryFormUpdate.attr('action'),
            type: 'post',
            data: salaryFormUpdate.serialize(),
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

function fetchEmployeeData() {
    var employeeid = $('#employeeId').val();
    if (employeeid){
        $.ajax({
            url: BASE_URL+"salary/formfilleddata",
            type: 'POST',
            data:{employeeId:employeeid},
            success: function(response) {
                response = JSON.parse(response);
                console.log(response);
                if (response.status == 1){
                    $("#fullname").val(response.fullname);
                    $("#attendencemonth").val(response.month);
                    $("#attendence_year").val(response.year);
                    $("#working_days").val(response.month_working_days);
                    $("#presentno").val(response.present_no);
                    $("#absentno").val(response.absent);
                    $("#basic_salary").val(response.basic_salary);
                    $("#salary_increment").val(response.increment_amount);
                    $("#advance_money").val(response.advance_money);
                }
            }
        });
    }
}

function calculateTotalSalary(){
    var total_salary=0.00;
    var absentno = parseFloat($('#absentno').val());
    var basic_salary = $('#basic_salary').val();
    var salary_increment = parseFloat($('#salary_increment').val());
    var travel_allowance = parseFloat($('#travel_allowance').val());
    var dearness_allowance = parseFloat($('#dearness_allowance').val());
    var hra = parseFloat($('#hra').val());

    total_salary = (parseFloat(basic_salary))+(parseFloat(salary_increment))+(parseFloat(travel_allowance))+(parseFloat(dearness_allowance))+(parseFloat(hra));
    $('#total_salary').val(total_salary);

    var net_pay=0.00;
    var advance_money = parseFloat($('#advance_money').val());
    var pf = parseFloat($('#pf').val());
    var esi = parseFloat($('#esi').val());
    var paid_leaves = parseFloat($('#paid_leaves').val());
    var daily_pay = parseFloat($('#daily_pay').val());

    net_pay = (parseFloat(total_salary))-parseFloat(advance_money)-parseFloat(pf)-parseFloat(esi)-((parseFloat(absentno)-parseFloat(paid_leaves))*parseFloat(daily_pay));
    $('#net_pay').val(net_pay);
}