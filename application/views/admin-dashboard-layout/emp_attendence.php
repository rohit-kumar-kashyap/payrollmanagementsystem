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
                <h4 class="title" style="text-align:center;">Add Employees Attendence</h4>
            </div>
            <div class="content">
                <form class="form-horizontal" method="POST" action="<?php echo base_url('attendence/savedata');?>" enctype="multipart/form-data" id="attendenceform" style="padding:25px;">

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Employee Id <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="employeeId" name="employeeId" required>
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Attendence Year <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="attendence_year" name="attendence_year" required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Attendence Month Working Days <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" name="working_days" id="working_days" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Number of Present <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="presentno" name="presentno" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Number of Absent <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="absentno" name="absentno" required>
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
<script src="<?php echo base_url('assets/dashboard-assets/js/empattendencejs/custom.js');?>"></script>