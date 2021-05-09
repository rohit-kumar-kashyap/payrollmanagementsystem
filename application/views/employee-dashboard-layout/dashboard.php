        <style>
            .main-panel > .content {
                height:460px;
            }
        </style>
      <!-- End Navbar -->
      <div class="content">
          <div class="row">
              <?php foreach($this->empMedia as $row){
                  $rowid = $row->id;
                  $emp_id = $row->emp_id;
                  $emp_resume = $row->emp_resume;
                  $emp_photo = $row->emp_photo;
                  $emp_aadhar = $row->emp_aadhar;
                  $emp_joining_letter = $row->emp_joining_letter;
              }?>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-stats">
                      <div class="card-body ">
                          <div class="row">
                              <div class="col-12 col-md-12">
                                  <p>Uploaded Photo</p>
                                <img src="<?php echo base_url('assets/employeephoto/'.$emp_photo);?>">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-stats">
                      <div class="card-body ">
                          <div class="row">
                              <div class="col-12 col-md-12">
                                  <p>Uploaded Aadhar Card</p>
                                  <img src="<?php echo base_url('assets/employeeaadharcard/'.$emp_aadhar);?>">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-stats">
                      <div class="card-body ">
                          <div class="row">
                              <div class="col-12 col-md-12">
                                  <p>Uploaded Joining Letter</p>
                                  <img src="<?php echo base_url('assets/employeejoiningletter/'.$emp_joining_letter);?>">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <?php foreach($data as $row){?>

                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="card card-stats">
                          <div class="card-body ">
                              <div class="row">
                                  <?php if($row->absent_no ==''){?>
                                      <div class="col-12 col-md-12">
                                          <h3>Attendance not uploaded yet</h3>
                                      </div>
                                  <?php }else{
                                  ?>
                                  <div class="col-12 col-md-12">
                                      <p>Attendance Month : <strong><?php echo $row->month;?></strong></p>
                                      <p>Attendance Year : <strong><?php echo $row->year;?></strong></p>
                                      <p>No. of Present : <strong><?php echo $row->present_no;?></strong></p>
                                      <p>No. of Absent : <strong><?php echo $row->absent_no;?></strong></p>
                                      <p>Month Working Days : <strong><?php echo $row->working_days;?></strong></p>
                                      <p>Paid Leaves : <strong><?php echo $row->paid_leave;?></strong></p>
                                  </div>
                                  <?php } ?>
                              </div>
                          </div>
                      </div>
                  </div>
              <?php } ?>

          </div>
      </div>
