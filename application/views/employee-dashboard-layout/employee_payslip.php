<div class="content" style="height:1111px;">
    <div class="container-fluid">
        <div class="card col-md-12">
            <div class="header">
                <h4 class="title"style="text-align:center">Your Payslips</h4>
            </div>
            <div class="content">
                <table id="example3" class="table table-striped">
                    <thead>
                    <th>Sr.no</th>
                    <th>Salary generation date</th>
                    <th>Download Payslip</th>
                    </thead>
                    <tbody>

                    <?php
                    $serial=1;
                    foreach ($this->SaveDataResult as $row){
                        $rowid = $row->id;
                        $emp_id = $row->emp_id;
                        $salary_generation_date = $row->salary_generation_date;
                        ?>
                        <tr>
                            <td><?php echo $serial; ?></td>
                            <td><?php echo $salary_generation_date; ?></td>
                            <td>
                                <a href="<?php echo base_url().'employeepayslip/printPayslipPdf/'.$row->emp_id ?>" target="_blank">
                                    <img src="<?php echo base_url('assets/dashboard-assets/img/pdf.png');?>"  style="width:15%;">
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