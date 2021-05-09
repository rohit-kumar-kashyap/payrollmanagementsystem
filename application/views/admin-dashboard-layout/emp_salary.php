<style>
    .required_astrick{
        color:red;
    }
</style>
<div class="content">
    <div id="success_message" class="alert alert-success d-none">
        <strong>Success!</strong> Data Added Successfully !
    </div>

    <div id="failed_message" class="alert alert-danger d-none">
        <strong>Failed!</strong>Error !
    </div>
    <div class="container-fluid">
        <div class="card col-md-8">
            <div class="header_title">
                <h4 class="title" style="text-align:center;">Generate Employees Salary</h4>
            </div>
            <div class="content">
                <form class="form-horizontal" method="POST" action="<?php echo base_url('salary/savedata');?>" enctype="multipart/form-data" id="salaryform" style="padding:25px;">

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Employee Id <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="employeeId" name="employeeId" onkeyup="fetchEmployeeData();" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Fullname <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="fullname" name="fullname" readonly required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Attendence Month <span class="required_astrick">*</span></label>
                                <select class="form-control" id="attendencemonth" name="attendencemonth">
                                    <option value="">--Select Month--</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Attendence Year <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="attendence_year" name="attendence_year" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Working Days <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" name="working_days" id="working_days" readonly required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">No. of Present <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="presentno" name="presentno" readonly required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">No. of Absent <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="absentno" name="absentno" readonly required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Basic Salary <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="basic_salary" name="basic_salary" onKeyup=calculateTotalSalary(); readonly required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Salary Increment <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="salary_increment" name="salary_increment" value="0" onKeyup=calculateTotalSalary(); readonly required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Travel Allowance <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="travel_allowance" name="travel_allowance" value="0" onKeyup=calculateTotalSalary(); required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Dearness Allowance <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="dearness_allowance" name="dearness_allowance" value="0" onKeyup=calculateTotalSalary(); required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">HRA <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="hra" name="hra" value="0" onKeyup=calculateTotalSalary(); required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Total Salary <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="total_salary" name="total_salary" value="0" onKeyup=calculateTotalSalary(); required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Advance Money <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="advance_money" name="advance_money" onKeyup=calculateTotalSalary(); readonly required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">PF <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="pf" name="pf" onKeyup=calculateTotalSalary(); required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">ESI <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="esi" name="esi" onKeyup=calculateTotalSalary(); required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Paid Leaves <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="paid_leaves" name="paid_leaves" onKeyup=calculateTotalSalary(); required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Daily Pay <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="daily_pay" name="daily_pay" onKeyup=calculateTotalSalary(); required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Net Pay <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="net_pay" name="net_pay" onKeyup=calculateTotalSalary(); required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Salary Generation Date <span class="required_astrick">*</span></label>
                                <input type="date" class="form-control" id="salary_generation_date" name="salary_generation_date" required>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-flat" name="generate_joinletter"><i class="fa fa-save"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('assets/dashboard-assets/js/empsalaryjs/custom.js');?>"></script>