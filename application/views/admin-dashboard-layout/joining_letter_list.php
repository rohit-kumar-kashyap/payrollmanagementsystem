<style>
    .content{

    }
</style>
    <div class="content" style="height:1111px;">
        <div class="container-fluid">
            <div class="card col-md-12">
                <div class="header">
                    <h4 class="title"style="text-align:center">Print Your Employees Joinletter</h4>
                </div>
                <div class="content">
                    <table id="example3" class="table table-striped">
                        <thead>
                            <th>Sr.no</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Generate Join Letter</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                    <tbody>

                    <?php
                        $serial=1;
                        foreach ($this->SaveDataResult as $row){
                            $rowid = $row->id;
                            $firstname = $row->firstname;
                            $lastname = $row->lastname;
                            $department = $row->department;
                            $designation = $row->designation;
                    ?>
                        <tr>
                            <td><?php echo $serial; ?></td>
                            <td><?php echo $firstname; ?></td>
                            <td><?php echo $lastname; ?></td>
                            <td><?php echo $department; ?></td>
                            <td><?php echo $designation; ?></td>
                            <td>
                                <a href="<?php echo base_url().'joiningletterlist/printFormPdf/'.$row->id ?>" target="_blank">
                                    <img src="<?php echo base_url('assets/dashboard-assets/img/pdf.png');?>" style="width:15%;">
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo base_url().'joiningletterlist/editformdetails/'.$row->id ?>">
                                    <img src="<?php echo base_url('assets/dashboard-assets/img/edit.png');?>" style="width:15%;">
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo base_url().'joiningletterlist/deleteformdata/'.$row->id ?>">
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