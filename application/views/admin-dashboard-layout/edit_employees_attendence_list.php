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
                <h4 class="title" style="text-align:center;">Edit Employees Attendence</h4>
            </div>
            <?php foreach($this->editSaveDataFields as $row){
                $rowid = $row->id;
                $emp_id = $row->emp_id;
                $month = $row->month;
                $year = $row->year;
                $absent = $row->absent;
                $present_no = $row->present_no;
                $month_working_days = $row->month_working_days;
            }?>
            <div class="content">
                <form class="form-horizontal" method="POST" action="<?php echo base_url('attendencedetails/updateformdetails');?>" enctype="multipart/form-data" id="attendenceformUpdate" style="padding:25px;">
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
                                <label class="control-label">Attendence Month <span class="required_astrick">*</span></label>
                                <select class="form-control" id="attendencemonth" name="attendencemonth">
                                    <option value="" <?php if($month==''){echo 'selected';}?>>--Select Month--</option>
                                    <option value="January" <?php if($month=='January'){echo 'selected';}?>>January</option>
                                    <option value="February" <?php if($month=='February'){echo 'selected';}?>>February</option>
                                    <option value="March" <?php if($month=='March'){echo 'selected';}?>>March</option>
                                    <option value="April" <?php if($month=='April'){echo 'selected';}?>>April</option>
                                    <option value="May" <?php if($month=='May'){echo 'selected';}?>>May</option>
                                    <option value="June" <?php if($month=='June'){echo 'selected';}?>>June</option>
                                    <option value="July" <?php if($month=='July'){echo 'selected';}?>>July</option>
                                    <option value="August" <?php if($month=='August'){echo 'selected';}?>>August</option>
                                    <option value="September" <?php if($month=='September'){echo 'selected';}?>>September</option>
                                    <option value="October" <?php if($month=='October'){echo 'selected';}?>>October</option>
                                    <option value="November" <?php if($month=='November'){echo 'selected';}?>>November</option>
                                    <option value="December" <?php if($month=='December'){echo 'selected';}?>>December</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Attendence Year <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="attendence_year" name="attendence_year" value="<?php echo $year;?>" required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Attendence Month Working Days <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" name="working_days" id="working_days" value="<?php echo $month_working_days;?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Number of Present <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="presentno" name="presentno" value="<?php echo $present_no;?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Number of Absent <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="absentno" name="absentno" value="<?php echo $absent;?>" required>
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