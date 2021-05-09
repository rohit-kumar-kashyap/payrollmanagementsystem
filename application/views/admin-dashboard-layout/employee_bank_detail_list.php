<style>
    .content{

    }
</style>
<div class="content" style="height:1111px;">
    <div class="container-fluid">
        <div class="card col-md-12">
            <div class="header">
                <h4 class="title"style="text-align:center">Employees Bank Detail List</h4>
            </div>
            <div class="content">
                <table id="example3" class="table table-striped">
                    <thead>
                        <th>Sr.no</th>
                        <th>Emp Id</th>
                        <th>Bank Name</th>
                        <th>Account Number</th>
                        <th>IFSC Code</th>
                        <th>UAN Number</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>

                    <?php
                    $serial=1;
                    foreach ($this->SaveDataResult as $row){
                        $rowid = $row->id;
                        $emp_id = $row->emp_id;
                        $bank_name = $row->bank_name;
                        $account_number = $row->account_number;
                        $ifsc_code = $row->ifsc_code;
                        $uan_number = $row->uan_number;
                        ?>
                        <tr>
                            <td><?php echo $serial; ?></td>
                            <td><?php echo $emp_id; ?></td>
                            <td><?php echo $bank_name; ?></td>
                            <td><?php echo $account_number; ?></td>
                            <td><?php echo $ifsc_code; ?></td>
                            <td><?php echo $uan_number;?></td>
                            <td>
                                <a href="<?php echo base_url().'bankdetaillist/editformdetails/'.$row->id ?>">
                                    <img src="<?php echo base_url('assets/dashboard-assets/img/edit.png');?>" style="width:15%;">
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo base_url().'bankdetaillist/deleteformdata/'.$row->id ?>">
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