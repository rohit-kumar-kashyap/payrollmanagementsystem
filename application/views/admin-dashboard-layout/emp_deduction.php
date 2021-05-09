<style>
    .required_astrick{
        color:red;
    }
</style>
<div class="content" style="height:1111px;">
    <div id="success_message" class="alert alert-success d-none">
        <strong>Success!</strong> Data Added Successfully !
    </div>

    <div id="failed_message" class="alert alert-danger d-none">
        <strong>Failed!</strong>Error !
    </div>
    <div class="container-fluid row">
        <div class="card col-md-7">
            <div class="header_title">
                <h4 class="title" style="text-align:center;">Add Deduction</h4>
            </div>
            <div class="content">
                <form class="form-horizontal" method="POST" action="<?php echo base_url('deductions/savedata');?>" enctype="multipart/form-data" id="deductionsform" style="padding:25px;">

                    <div style="display:inline-flex;">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Employee Id <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="employeeId" name="employeeId" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Deduction Month <span class="required_astrick">*</span></label>
                                <select class="form-control" id="deductionmonth" name="deductionmonth">
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
                                <label class="control-label">Deduction Year <span class="required_astrick">*</span></label>
                                <input type="text" class="form-control" id="deduction_year" name="deduction_year" required>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Advance Money Taken <span class="required_astrick">*</span></label>
                            <input type="text" class="form-control" id="advance_money" name="advance_money" required>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-flat" name="generate_joinletter"><i class="fa fa-save"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card col-md-5">
            <div class="header">
                <h4 class="title"style="text-align:center">Deduction List</h4>
            </div>
            <div class="content">
                <table id="example3" class="table table-striped">
                    <thead>
                        <th>Emp Id</th>
                        <th>Month</th>
                        <th>Advance Money</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>

                    <?php
                    $serial=1;
                    foreach ($this->SaveDataResult as $row){
                        $rowid = $row->id;
                        $emp_id = $row->emp_id;
                        $month = $row->month;
                        $year = $row->year;
                        $advance_money = $row->advance_money;
                        ?>
                        <tr>
                            <td><?php echo $emp_id; ?></td>
                            <td><?php echo $month; ?></td>
                            <td><?php echo $advance_money;?></td>
                            <td>
                                <a href="<?php echo base_url().'deductions/editformdetails/'.$row->id ?>">
                                    <img src="<?php echo base_url('assets/dashboard-assets/img/edit.png');?>" style="width:15%;">
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo base_url().'deductions/deleteformdata/'.$row->id ?>">
                                    <img src="<?php echo base_url('assets/dashboard-assets/img/delete.png');?>" style="width:15%;">
                                </a>
                            </td>
                        </tr>
                        <?php
                        $serial++;
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
<script src="<?php echo base_url('assets/dashboard-assets/js/empdeductionjs/custom.js');?>"></script>