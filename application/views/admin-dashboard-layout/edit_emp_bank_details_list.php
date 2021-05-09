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
                <h4 class="title" style="text-align:center;">Edit Employees Bank Details</h4>
            </div>
            <?php foreach($this->editSaveDataFields as $row){
                $rowid = $row->id;
                $emp_id = $row->	emp_id;
                $bank_name = $row->bank_name;
                $bank_branch_name = $row->bank_branch_name;
                $account_number = $row->account_number;
                $ifsc_code = $row->ifsc_code;
                $uan_number = $row->uan_number;
            }?>
            <div class="content">
                <form class="form-horizontal" method="POST" action="<?php echo base_url('bankdetaillist/updateformdetails');?>" enctype="multipart/form-data" id="empbankdetailsformUpdate" style="padding:25px;">
                    <input type="hidden" class="form-control" id="rowid" name="rowid" value="<?php echo $rowid;?>">
                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Employee Id <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="employeeid" name="employeeid" value="<?php echo $emp_id;?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Bank Name <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="bankname" name="bankname" value="<?php echo $bank_name;?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Bank Branch Name <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="bankbranchname" name="bankbranchname" value="<?php echo $bank_branch_name;?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Account No. <span class="required_astrick">*</span></label>
                            <input type="text" class="form-control" name="accountno" id="accountno" value="<?php echo $account_number;?>" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">IFSC Code <span class="required_astrick">*</span></label>
                            <input type="text" class="form-control" id="ifsccode" name="ifsccode" value="<?php echo $ifsc_code;?>" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">UAN No. <span class="required_astrick">*</span></label>
                            <input type="text" class="form-control" id="uanno" name="uanno" value="<?php echo $uan_number;?>" required>
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