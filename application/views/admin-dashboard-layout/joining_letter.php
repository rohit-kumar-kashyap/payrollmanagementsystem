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
                <h4 class="title" style="text-align:center;">Generate Joinletter</h4>
            </div>
            <div class="content">
                <form class="form-horizontal" method="POST" action="<?php echo base_url('joiningletter/savedata');?>" enctype="multipart/form-data" id="joinletterform" style="padding:25px;">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Company Name <span class="required_astrick">*</span></label>
                            <input type="text" class="form-control" id="company_name" name="company_name" required>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Department <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="department" name="department" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Designation <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="designation" name="designation" required>
                            </div>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Month <span class="required_astrick">*</span></label>
                                <select class="form-control dropdown" name="month" required>
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
                                <label class="control-label">Year <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="year" name="year" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Join Letter Date <span class="required_astrick">*</span></label>
                                <input type="date" class="form-control" id="join_letter_date" name="join_letter_date" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Offer Number</label>
                            <input type="text" class="form-control" id="offer_no" name="offer_no">
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Firstname <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="firstname" name="firstname" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Lastname <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="lastname" name="lastname" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Address <span class="required_astrick">*</span></label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Reporting Manager</label>
                            <input type="text" class="form-control" id="reporting_manager" name="reporting_manager">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Annual CTC</label>
                            <input type="text" class="form-control" id="annual_ctc" name="annual_ctc">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Expected Date of Joining <span class="required_astrick">*</span></label>
                            <input type="date" class="form-control" id="expect_join_date" name="expect_join_date" required>
                        </div>
                    </div>

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">city <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Location <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="location" name="location" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Location of Posting <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="posting_location" name="posting_location" required>
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