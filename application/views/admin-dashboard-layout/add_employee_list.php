<style>
    .content{

    }
</style>
<div class="content" style="height:1111px;">
    <div class="container-fluid">
        <div class="card col-md-12">
            <div class="header">
                <h4 class="title"style="text-align:center">Your Employees List</h4>
            </div>
            <div class="content">
                <table id="example3" class="table table-striped">
                    <thead>
                    <th>Sr.no</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Contact</th>
                    <th>Joining Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </thead>
                    <tbody>

                    <?php
                    $serial=1;
                    foreach ($this->SaveDataResult as $row){
                        $rowid = $row->id;
                        $fullname = $row->fullname;
                        $email = $row->email;
                        $dob = $row->dob;
                        $contact = $row->contact;
                        $joining_date = $row->joining_date;
                        ?>
                        <tr>
                            <td><?php echo $serial; ?></td>
                            <td><?php echo $fullname; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $dob; ?></td>
                            <td><?php echo $contact; ?></td>
                            <td><?php echo $joining_date;?></td>
                            <td>
                                <a href="<?php echo base_url().'employeelist/editformdetails/'.$row->id ?>">
                                    <img src="<?php echo base_url('assets/dashboard-assets/img/edit.png');?>" style="width:15%;">
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo base_url().'employeelist/deleteformdata/'.$row->id ?>">
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