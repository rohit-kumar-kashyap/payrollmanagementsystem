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
                <h4 class="title" style="text-align:center;">Edit Joinletter</h4>
            </div>
            <?php foreach($this->editSaveDataFields as $row){
                $rowid = $row->id;
                $emp_id = $row->emp_id;
                $company_name = $row->company_name;
                $department = $row->department;
                $posting_location = $row->posting_location;
                $month = $row->month;
                $year = $row->year;
                $offer_number = $row->offer_number;
                $join_letter_date = $row->join_letter_date;
                $firstname = $row->firstname;
                $lastname = $row->lastname;
                $address = $row->address;
                $designation = $row->designation;
                $reporting_manager = $row->reporting_manager;
                $annual_ctc = $row->annual_ctc;
                $expect_join_date = $row->expect_join_date;
                $city = $row->city;
                $location = $row->location;
            }?>
            <div class="content">
                <form class="form-horizontal" method="POST" action="<?php echo base_url('joiningletterlist/updateformdetails');?>" enctype="multipart/form-data" id="joinletterformUpdate" style="padding:25px;">
                    <input type="hidden" class="form-control" id="rowid" name="rowid" value="<?php echo $rowid;?>">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Company Name <span class="required_astrick">*</span></label>
                            <input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo $company_name;?>" required>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Department <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="department" name="department" value="<?php echo $department;?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Designation <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $designation;?>" required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Month <span class="required_astrick">*</span></label>
                                <select class="form-control dropdown" name="month" required>
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
                                <label class="control-label">Year <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="year" name="year" value="<?php echo $year;?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Join Letter Date <span class="required_astrick">*</span></label>
                                <input type="date" class="form-control" id="join_letter_date" name="join_letter_date" value="<?php echo $join_letter_date;?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Offer Number</label>
                            <input type="text" class="form-control" id="offer_no" name="offer_no" value="<?php echo $offer_number;?>">
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Firstname <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $firstname;?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Lastname <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $lastname;?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Address <span class="required_astrick">*</span></label>
                            <input type="text" class="form-control" id="address" name="address" value="<?php echo $address;?>" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Reporting Manager</label>
                            <input type="text" class="form-control" id="reporting_manager" name="reporting_manager" value="<?php echo $reporting_manager;?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Annual CTC</label>
                            <input type="text" class="form-control" id="annual_ctc" name="annual_ctc" value="<?php echo $annual_ctc;?>">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Expected Date of Joining <span class="required_astrick">*</span></label>
                            <input type="date" class="form-control" id="expect_join_date" name="expect_join_date" value="<?php echo $expect_join_date;?>" required>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">city <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="city" name="city" value="<?php echo $city;?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Location <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="location" name="location" value="<?php echo $location;?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Location of Posting <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="posting_location" name="posting_location" value="<?php echo $posting_location;?>" required>
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
<script src="<?php echo base_url('assets/dashboard-assets/js/joiningletterjs/custom.js');?>"></script>