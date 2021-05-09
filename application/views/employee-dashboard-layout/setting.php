        <style>
            .form-group input[type=file] {
                opacity: inherit;
                position: inherit;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 100;
            }
        </style>
		<!-- End Navbar -->
		<div class="content">
			<div class="row">
                <?php
                $flag = false;
                if($this->profileData->num_rows()>0){
                    $flag = true;
                    $row = $this->profileData->row();
                    $emp_id  = $row->emp_id;
                    $emp_photo =$row->emp_photo;
                    $email = $row->email;
                    $password = $row->password;
                }
                ?>
				<div class="col-md-4">
					<div class="card card-user">
						<div class="image">
							<img src="<?php echo base_url('assets/dashboard-assets/img/adminsetingbgimage.jpg');?>" alt="...">
						</div>
						<div class="card-body">
							<div class="author">
								<a href="#">
									<img class="avatar border-gray" src="<?php echo base_url('assets/employeephoto/').$emp_photo;?>" alt="...">
								</a>
								<p class="description"><?php echo $email; ?></p>
							</div>
							<p class="description text-center"><?php echo $password; ?></p>
						</div>
						
					</div>
				</div>
				<div class="col-md-8">
					<div class="card card-user">
						<div class="card-header">
							<h5 class="card-title">Edit Profile</h5>
						</div>
						<div class="card-body">
                            <?php
                                $status = $this->session->flashdata('msg');
                                if(isset($status) == 'success'){
                            ?>
                            <div id="message" class="alert alert-success">Profile Updated!</div>
                            <?php
                                }else if(isset($status) == 'failed'){
                            ?>
                            <div id="message" class="alert alert-danger">Profile Updation Failed!</div>
                            <?php
                                }
                            ?>
                            <?php //echo uploadsUrl().$profile; ?>

							<form method="POST" action="<?php echo base_url('employeesetting/profile_update');?>" enctype="multipart/form-data" id="adminprofile">
								<div class="row">
                                    <input type="hidden" name="employeeId" id="employeeId" value="<?php if($flag){ echo $emp_id;}?>" class="form-control">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Photo</label>
                                            <input type="file" class="form-control" name="employeephoto" id="employeephoto">
                                            <input type="hidden" id="pre_profile_image" name="pre_profile_image" value="<?php if($flag){ echo $emp_photo;} ?>" class="form-control">
                                        </div>
                                    </div>
									<div class="col-md-4 px-1">
										<div class="form-group">
											<label>Email</label>
											<input type="email" class="form-control" name="employeeemail" id="employeeemail" value="<?php if($flag){ echo $email;} ?>">
										</div>
									</div>
									<div class="col-md-4 pl-1">
										<div class="form-group">
											<label for="exampleInputEmail1">Password</label>
											<input type="password" name="employeepassword" id="employeepassword" class="form-control" value="<?php if($flag){ echo $password;} ?>">
										</div>
									</div>
								</div>
                                <div class="row">
                                    <div class="update ml-auto mr-auto">
                                        <button type="submit" name="submit" id="submit" class="btn btn-primary btn-round">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>