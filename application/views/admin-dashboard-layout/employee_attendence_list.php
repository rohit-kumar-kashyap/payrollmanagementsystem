<style>
    .content{

    }
</style>
<div class="content" style="height:1111px;">
    <div class="container-fluid">
        <div class="card col-md-12">
            <div class="header">
                <h4 class="title"style="text-align:center">Employees Attendence List</h4>
            </div>
            <div class="content">
                <table id="example3" class="table table-striped">
                    <thead>
                        <th>Sr.no</th>
                        <th>Emp Id</th>
                        <th>Attendence Month</th>
                        <th>Attendence Year</th>
                        <th>Working Days</th>
                        <th>Absent Number</th>
                        <th>Present Number</th>
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
                        $month_working_days = $row->month_working_days;
                        $absent = $row->absent;
                        $present_no = $row->present_no;
                        ?>
                        <tr>
                            <td><?php echo $serial; ?></td>
                            <td><?php echo $emp_id; ?></td>
                            <td><?php echo $month; ?></td>
                            <td><?php echo $year; ?></td>
                            <td><?php echo $month_working_days; ?></td>
                            <td><?php echo $absent;?></td>
                            <td><?php echo $present_no;?></td>
                            <td>
                                <a href="<?php echo base_url().'attendencedetails/editformdetails/'.$row->id ?>">
                                    <img src="<?php echo base_url('assets/dashboard-assets/img/edit.png');?>" style="width:15%;">
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo base_url().'attendencedetails/deleteformdata/'.$row->id ?>">
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