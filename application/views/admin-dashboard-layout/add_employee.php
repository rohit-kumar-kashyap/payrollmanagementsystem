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
                <h4 class="title" style="text-align:center;">Add Employees</h4>
            </div>
            <div class="content">
                <form class="form-horizontal" method="POST" action="<?php echo base_url('addemployees/savedata');?>" enctype="multipart/form-data" id="addemployeeform" style="padding:25px;">

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Full Name <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="fullname" name="fullname" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Father Name <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="fathername" name="fathername" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Contact <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="contact" name="contact" required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Email <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Date of Birth <span class="required_astrick">*</span></label>
                                <input type="date" class="form-control" name="dob" id="dob" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Nationality <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="nationality" name="nationality" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Address <span class="required_astrick">*</span></label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">State <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="state" name="state" required>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">City <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Pincode <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="pincode" name="pincode" required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Marital status <span class="required_astrick">*</span></label>
                                <select class="form-control" id="marital_status" name="marital_status">
                                    <option value="">--Select Your Status--</option>
                                    <option value="Married">Married</option>
                                    <option value="Unmarried">Unmarried</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Seprated">Seprated</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Department <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="department" name="department" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Designation <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="designation" name="designation" required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Basic Salary <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="basic_salary" name="basic_salary" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Joining Date <span class="required_astrick">*</span></label>
                                <input type="date" class="form-control" id="joining_date" name="joining_date" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">aadhar No. <span class="required_astrick">*</span></label>
                            <input type="text" class="form-control" id="aadhar_no" name="aadhar_no" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="" style="padding-bottom: 10px;">
                            <label class="control-label">Upload Employee AadharCard <span class="required_astrick">*</span></label>
                            <input type="file" class="form-control" id="aadhar_upload" name="aadhar_upload" required>
                            <input type="hidden" id="pre_aadhar_upload" name="pre_aadhar_upload" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="" style="padding-bottom: 10px;">
                            <label class="control-label">Upload Employee Resume <span class="required_astrick">*</span></label>
                            <input type="file" class="form-control" id="resumeupload" name="resumeupload" required>
                            <input type="hidden" id="pre_resumeupload" name="pre_resumeupload" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="" style="padding-bottom: 10px;">
                            <label class="control-label">Upload Employee Photo <span class="required_astrick">*</span></label>
                            <input type="file" class="form-control" id="photoupload" name="photoupload" required>
                            <input type="hidden" id="pre_photoupload" name="pre_photoupload" value="" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="" style="padding-bottom: 10px;">
                            <label class="control-label">Upload Employee Joining Letter <span class="required_astrick">*</span></label>
                            <input type="file" class="form-control" id="joiningletterupload" name="joiningletterupload" required>
                            <input type="hidden" id="pre_joiningletterupload" name="pre_joiningletterupload" value="" class="form-control">
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
<script src="<?php echo base_url('assets/dashboard-assets/js/addemployeejs/custom.js');?>"></script>