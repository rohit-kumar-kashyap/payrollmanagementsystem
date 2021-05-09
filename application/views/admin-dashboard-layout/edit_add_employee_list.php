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
                <h4 class="title" style="text-align:center;">Edit Employees Details</h4>
            </div>
            <?php foreach($this->editSaveDataFields as $row){
                $rowid = $row->id;
                $emp_id = $row->emp_id;
                $fullname = $row->fullname;
                $fathername = $row->fathername;
                $email = $row->email;
                $dob = $row->dob;
                $contact = $row->contact;
                $nationality = $row->nationality;
                $marital_status = $row->marital_status;
                $address = $row->address;
                $city = $row->city;
                $pincode = $row->pincode;
                $state = $row->state;
                $joining_date = $row->joining_date;
                $aadhar_number = $row->aadhar_number;
                $department = $row->department;
                $designation = $row->designation;
                $basic_salary = $row->basic_salary;
                $increment_amount = $row->increment_amount;
                $increment_date = $row->increment_date;
                $employee_aadhar_card = $row->emp_aadhar;
                $employee_photo = $row->emp_photo;
                $employee_resume = $row->emp_resume;
                $employee_joiningletter =$row->emp_joining_letter;
            }?>
            <div class="content">
                <form class="form-horizontal" method="POST" action="<?php echo base_url('employeelist/updateformdetails');?>" enctype="multipart/form-data" id="addemployeeformUpdate" style="padding:25px;">
                    <input type="hidden" class="form-control" id="rowid" name="rowid" value="<?php echo $rowid;?>">
                    <input type="hidden" class="form-control" id="empId" name="empId" value="<?php echo $emp_id;?>">
                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Full Name <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $fullname;?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Father Name <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="fathername" name="fathername" value="<?php echo $fathername;?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Contact <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $contact;?>" required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Email <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="email" name="email" value="<?php echo $email;?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Date of Birth <span class="required_astrick">*</span></label>
                                <input type="date" class="form-control" name="dob" id="dob" value="<?php echo $dob;?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Nationality <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="nationality" name="nationality" value="<?php echo $nationality;?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Address <span class="required_astrick">*</span></label>
                            <input type="text" class="form-control" id="address" name="address" value="<?php echo $address;?>" required>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">State <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="state" name="state" value="<?php echo $state;?>" required>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">City <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="city" name="city" value="<?php echo $city;?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Pincode <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="pincode" name="pincode" value="<?php echo $pincode;?>" required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Marital status <span class="required_astrick">*</span></label>
                                <select class="form-control" id="marital_status" name="marital_status">
                                    <option value="" <?php if($marital_status==''){echo 'selected';}?>>--Select Your Status--</option>
                                    <option value="Married" <?php if($marital_status=='Married'){echo 'selected';}?>>Married</option>
                                    <option value="Unmarried" <?php if($marital_status=='Unmarried'){echo 'selected';}?>>Unmarried</option>
                                    <option value="Divorced" <?php if($marital_status=='Divorced'){echo 'selected';}?>>Divorced</option>
                                    <option value="Seprated" <?php if($marital_status=='Seprated'){echo 'selected';}?>>Seprated</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Department <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="department" name="department" value="<?php echo $department;?>" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Designation <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $designation;?>" required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Basic Salary <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="basic_salary" name="basic_salary" value="<?php echo $basic_salary;?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Joining Date <span class="required_astrick">*</span></label>
                                <input type="date" class="form-control" id="joining_date" name="joining_date" value="<?php echo $joining_date;?>" required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Increment Amount <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="increment_amount" name="increment_amount" value="<?php echo $increment_amount;?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Increment Date <span class="required_astrick">*</span></label>
                                <input type="date" class="form-control" id="increment_date" name="increment_date" value="<?php echo $increment_date;?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">aadhar No. <span class="required_astrick">*</span></label>
                            <input type="text" class="form-control" id="aadhar_no" name="aadhar_no" value="<?php echo $aadhar_number;?>" required>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-6">
                            <div class="" style="padding-bottom: 10px;">
                                <label class="control-label">Upload Employee AadharCard <span class="required_astrick">*</span></label>
                                <input type="file" class="form-control" id="aadhar_upload" name="aadhar_upload">
                                <input type="hidden" id="pre_aadhar_upload" name="pre_aadhar_upload" value="<?php echo $employee_aadhar_card;?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="" style="padding-bottom: 10px;">
                                <label class="control-label">Uploaded Employee AadharCard <span class="required_astrick">*</span></label>
                                <p><img src="<?php echo base_url('assets/employeeaadharcard/').$employee_aadhar_card;?>"></p>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-6">
                            <div class="" style="padding-bottom: 10px;">
                                <label class="control-label">Upload Employee Resume <span class="required_astrick">*</span></label>
                                <input type="file" class="form-control" id="resumeupload" name="resumeupload">
                                <input type="hidden" id="pre_resumeupload" name="pre_resumeupload" value="<?php echo $employee_resume;?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="" style="padding-bottom: 10px;">
                                <label class="control-label">Uploaded Employee Resume <span class="required_astrick">*</span></label>
                                <p><img src="<?php echo base_url('assets/employeeresume/').$employee_resume;?>"></p>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-6">
                            <div class="" style="padding-bottom: 10px;">
                                <label class="control-label">Upload Employee Photo <span class="required_astrick">*</span></label>
                                <input type="file" class="form-control" id="photoupload" name="photoupload">
                                <input type="hidden" id="pre_photoupload" name="pre_photoupload" value="<?php echo $employee_photo;?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="" style="padding-bottom: 10px;">
                                <label class="control-label">Uploaded Employee Photo <span class="required_astrick">*</span></label>
                                <p><img src="<?php echo base_url('assets/employeephoto/').$employee_photo;?>"></p>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-6">
                            <div class="" style="padding-bottom: 10px;">
                                <label class="control-label">Upload Employee Joining Letter <span class="required_astrick">*</span></label>
                                <input type="file" class="form-control" id="joiningletterupload" name="joiningletterupload">
                                <input type="hidden" id="pre_joiningletterupload" name="pre_joiningletterupload" value="<?php echo $employee_joiningletter;?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="" style="padding-bottom: 10px;">
                                <label class="control-label">Uploaded Employee Joining Letter <span class="required_astrick">*</span></label>
                                <p><img src="<?php echo base_url('assets/employeejoiningletter/').$employee_joiningletter;?>"></p>
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
<script src="<?php echo base_url('assets/dashboard-assets/js/addemployeejs/custom.js');?>"></script>