<style>
    .required_astrick{
        color:red;
    }
</style>
<div class="content">
    <div id="success_message" class="alert alert-success d-none">
        <strong>Success!</strong> Data Updated Successfully !
    </div>

    <div id="failed_message" class="alert alert-danger d-none">
        <strong>Failed!</strong>Error !
    </div>
    <div class="container-fluid">
        <div class="card col-md-8">
            <div class="header_title">
                <h4 class="title" style="text-align:center;">Your Profile</h4>
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
                <form class="form-horizontal" method="POST" action="<?php echo base_url('employeeprofile/updateformdetails');?>" enctype="multipart/form-data" id="empprofileformUpdate" style="padding:25px;">
                    <input type="hidden" class="form-control" id="rowid" name="rowid" value="<?php echo $rowid;?>">

                    <div style="display:inline-flex;">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">EmployeeId <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="employee_id" name="employee_id" value="<?php echo $emp_id;?>" readonly required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Full Name <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $fullname;?>" readonly required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Father Name <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="fathername" name="fathername" value="<?php echo $fathername;?>" required>
                            </div>
                        </div>
                        <div class="col-md-3">
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
                                <input type="text" class="form-control" id="department" name="department" value="<?php echo $department;?>" readonly required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Designation <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $designation;?>" readonly required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Basic Salary <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="basic_salary" name="basic_salary" value="<?php echo $basic_salary;?>" readonly required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Joining Date <span class="required_astrick">*</span></label>
                                <input type="date" class="form-control" id="joining_date" name="joining_date" value="<?php echo $joining_date;?>" readonly required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Increment Amount <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="increment_amount" name="increment_amount" value="<?php echo $increment_amount;?>" readonly required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Increment Date <span class="required_astrick">*</span></label>
                                <input type="date" class="form-control" id="increment_date" name="increment_date" value="<?php echo $increment_date;?>" readonly required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">aadhar No. <span class="required_astrick">*</span></label>
                            <input type="text" class="form-control" id="aadhar_no" name="aadhar_no" value="<?php echo $aadhar_number;?>" readonly required>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="" style="padding-bottom: 10px;">
                            <p><a href="<?php echo base_url('assets/employeeaadharcard/').$employee_aadhar_card;?>" target="_blank">Download AadharCard</a></p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="" style="padding-bottom: 10px;">
                            <p><a href="<?php echo base_url('assets/employeeresume/').$employee_resume;?>" target="_blank">Download Resume</a></p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="" style="padding-bottom: 10px;">
                            <p><a href="<?php echo base_url('assets/employeephoto/').$employee_photo;?>" target="_blank">Download Photo</a></p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="" style="padding-bottom: 10px;">
                            <p><a href="<?php echo base_url('assets/employeejoiningletter/').$employee_joiningletter;?>" target="_blank">Download Joining Letter</a></p>
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
<script src="<?php echo base_url('assets/dashboard-assets/js/employeeprofilejs/custom.js');?>"></script>