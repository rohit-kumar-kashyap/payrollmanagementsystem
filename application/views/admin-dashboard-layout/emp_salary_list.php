<style>
    .content{

    }
</style>
<div class="content" style="height:1111px;">
    <div class="container-fluid">
        <div class="card col-md-12">
            <div class="header">
                <h4 class="title"style="text-align:center">Employees Salary List</h4>
            </div>
            <div class="content">
                <table id="example3" class="table table-striped">
                    <thead>
                        <th>Sr.no</th>
                        <th>Emp Id</th>
                        <th>Full Name</th>
                        <th>Salary Generation Date</th>
                        <th>Total Salary</th>
                        <th>Paid Leaves</th>
                        <th>Net Pay</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>

                    <?php
                    $serial=1;
                    foreach ($this->SaveDataResult as $row){
                        $rowid = $row->id;
                        $emp_id = $row->emp_id;
                        $fullname = $row->fullname;
                        $salary_generation_date = $row->salary_generation_date;
                        $total_salary = $row->total_salary;
                        $paid_leave = $row->paid_leave;
                        $netpay = $row->netpay;
                    ?>
                        <tr>
                            <td><?php echo $serial; ?></td>
                            <td><?php echo $emp_id; ?></td>
                            <td><?php echo $fullname; ?></td>
                            <td><?php echo $salary_generation_date; ?></td>
                            <td><?php echo $total_salary; ?></td>
                            <td><?php echo $paid_leave;?></td>
                            <td><?php echo $netpay;?></td>
                            <td>
                                <a href="<?php echo base_url().'salarylist/editformdetails/'.$row->id ?>">
                                    <img src="<?php echo base_url('assets/dashboard-assets/img/edit.png');?>" style="width:15%;">
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo base_url().'salarylist/deleteformdata/'.$row->id ?>">
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