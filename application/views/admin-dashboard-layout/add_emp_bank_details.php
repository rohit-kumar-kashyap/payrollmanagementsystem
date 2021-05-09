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
                <h4 class="title" style="text-align:center;">Add Employees Bank Details</h4>
            </div>
            <div class="content">
                <form class="form-horizontal" method="POST" action="<?php echo base_url('employeebankdetails/savedata');?>" enctype="multipart/form-data" id="empbankdetailsform" style="padding:25px;">

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Employee Id <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="employeeid" name="employeeid" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Bank Name <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="bankname" name="bankname" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Bank Branch Name <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="bankbranchname" name="bankbranchname" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Account No. <span class="required_astrick">*</span></label>
                            <input type="text" class="form-control" name="accountno" id="accountno" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">IFSC Code <span class="required_astrick">*</span></label>
                            <input type="text" class="form-control" id="ifsccode" name="ifsccode" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">UAN No. <span class="required_astrick">*</span></label>
                            <input type="text" class="form-control" id="uanno" name="uanno" required>
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
<script src="<?php echo base_url('assets/dashboard-assets/js/empbankdetailsjs/custom.js');?>"></script>