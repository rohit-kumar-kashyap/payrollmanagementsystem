<style>
    .content{

    }
</style>
<div class="content" style="height:1111px;">
    <div class="container-fluid">
        <div class="card col-md-12">
            <div class="header">
                <h4 class="title"style="text-align:center">Employees Salary Payroll Slip List</h4>
            </div>
            <div class="content">
                <table id="example3" class="table table-striped">
                    <thead>
                        <th>Sr.no</th>
                        <th>Emp Id</th>
                        <th>Full Name</th>
                        <th>Department</th>
                        <th>Designation</th>
                        <th>Salary generation date</th>
                        <th>Netpay</th>
                        <th>Payslip</th>
                    </thead>
                    <tbody>

                    <?php
                    $serial=1;
                    foreach ($this->SaveDataResult as $row){
                        $rowid = $row->id;
                        $emp_id = $row->emp_id;
                        $fullname = $row->fullname;
                        $netpay = $row->netpay;
                        $salary_generation_date = $row->salary_generation_date;
                        $department = $row->department;
                        $designation = $row->designation;
                        ?>
                        <tr>
                            <td><?php echo $serial; ?></td>
                            <td><?php echo $emp_id; ?></td>
                            <td><?php echo $fullname; ?></td>
                            <td><?php echo $department;?></td>
                            <td><?php echo $designation;?></td>
                            <td><?php echo $salary_generation_date; ?></td>
                            <td><?php echo $netpay; ?></td>
                            <td>
                                <a href="<?php echo base_url().'payroll/printFormPdf/'.$row->emp_id ?>" target="_blank">
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