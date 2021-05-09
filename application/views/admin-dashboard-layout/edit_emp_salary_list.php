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
                <h4 class="title" style="text-align:center;">Edit Employees Salary</h4>
            </div>
            <?php foreach($this->editSaveDataFields as $row){
                $rowid = $row->id;
                $emp_id = $row->emp_id;
                $fullname = $row->fullname;
                $month = $row->month;
                $year = $row->year;
                $absent_no = $row->absent_no;
                $present_no = $row->present_no;
                $working_days = $row->working_days;
                $travel_allowance = $row->travel_allowance;
                $dearness_allowance = $row->dearness_allowance;
                $hra = $row->hra;
                $total_salary = $row->total_salary;
                $pf = $row->pf;
                $esi = $row->esi;
                $netpay = $row->netpay;
                $basic_salary = $row->basic_salary;
                $increment = $row->increment;
                $advance_money = $row->advance_money;
                $daily_pay = $row->daily_pay;
                $paid_leave = $row->paid_leave;
                $salary_generation_date = $row->salary_generation_date;
            }?>
            <div class="content">
                <form class="form-horizontal" method="POST" action="<?php echo base_url('salarylist/updateformdetails');?>" enctype="multipart/form-data" id="salaryformUpdate" style="padding:25px;">
                    <input type="hidden" class="form-control" id="rowid" name="rowid" value="<?php echo $rowid;?>">
                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Employee Id <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="employeeId" name="employeeId" value="<?php echo $emp_id;?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Fullname <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $fullname;?>" readonly required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Attendence Month <span class="required_astrick">*</span></label>
                                <select class="form-control" id="attendencemonth" name="attendencemonth">
                                    <option value="" <?php if($month=''){echo 'selected';}?>>--Select Month--</option>
                                    <option value="January" <?php if($month='January'){echo 'selected';}?>>January</option>
                                    <option value="February" <?php if($month='February'){echo 'selected';}?>>February</option>
                                    <option value="March" <?php if($month='March'){echo 'selected';}?>>March</option>
                                    <option value="April" <?php if($month='April'){echo 'selected';}?>>April</option>
                                    <option value="May" <?php if($month='May'){echo 'selected';}?>>May</option>
                                    <option value="June" <?php if($month='June'){echo 'selected';}?>>June</option>
                                    <option value="July" <?php if($month='July'){echo 'selected';}?>>July</option>
                                    <option value="August" <?php if($month='August'){echo 'selected';}?>>August</option>
                                    <option value="September" <?php if($month='September'){echo 'selected';}?>>September</option>
                                    <option value="October" <?php if($month='October'){echo 'selected';}?>>October</option>
                                    <option value="November" <?php if($month='November'){echo 'selected';}?>>November</option>
                                    <option value="December" <?php if($month='December'){echo 'selected';}?>>December</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Attendence Year <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="attendence_year" name="attendence_year" value="<?php echo $year;?>" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">Working Days <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" name="working_days" id="working_days" value="<?php echo $working_days;?>" readonly required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">No. of Present <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="presentno" name="presentno" value="<?php echo $present_no;?>" readonly required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">No. of Absent <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="absentno" name="absentno" value="<?php echo $absent_no;?>" readonly required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Basic Salary <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="basic_salary" name="basic_salary" onKeyup=calculateTotalSalary(); value="<?php echo $basic_salary;?>" readonly required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Salary Increment <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="salary_increment" name="salary_increment" onKeyup=calculateTotalSalary(); value="<?php echo $increment;?>" readonly required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Travel Allowance <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="travel_allowance" name="travel_allowance" onKeyup=calculateTotalSalary(); value="<?php echo $travel_allowance;?>" required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Dearness Allowance <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="dearness_allowance" name="dearness_allowance" onKeyup=calculateTotalSalary(); value="<?php echo $dearness_allowance;?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">HRA <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="hra" name="hra" onKeyup=calculateTotalSalary(); value="<?php echo $hra;?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Total Salary <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="total_salary" name="total_salary" onKeyup=calculateTotalSalary(); value="<?php echo $total_salary;?>" required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Advance Money <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="advance_money" name="advance_money" onKeyup=calculateTotalSalary(); value="<?php echo $advance_money;?>" readonly required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">PF <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="pf" name="pf" onKeyup=calculateTotalSalary(); value="<?php echo $pf;?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">ESI <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="esi" name="esi" onKeyup=calculateTotalSalary(); value="<?php echo $esi;?>" required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Paid Leaves <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="paid_leaves" name="paid_leaves" onKeyup=calculateTotalSalary(); value="<?php echo $paid_leave;?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Daily Pay <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="daily_pay" name="daily_pay" onKeyup=calculateTotalSalary(); value="<?php echo $daily_pay;?>" required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Net Pay <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="net_pay" name="net_pay" onKeyup=calculateTotalSalary(); value="<?php echo $netpay;?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Salary Generation Date <span class="required_astrick">*</span></label>
                                <input type="date" class="form-control" id="salary_generation_date" name="salary_generation_date" value="<?php echo $salary_generation_date;?>" required>
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