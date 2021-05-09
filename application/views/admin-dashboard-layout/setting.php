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
                    $id = $row->id;
                    $profile  = $row->photo;
                    $adminname =$row->fullname;
                    $adminemail = $row->email;
                    $adminpassword = $row->password;
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
									<img class="avatar border-gray" src="<?php echo base_url('assets/adminprofilephoto/').$profile;?>" alt="...">
									<h5 class="title"><?php echo $adminname; ?></h5>
								</a>
								<p class="description"><?php echo $adminemail; ?></p>
							</div>
							<p class="description text-center"><?php echo $adminpassword; ?></p>
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

							<form method="POST" action="<?php echo base_url('adminsetting/profile_update');?>" enctype="multipart/form-data" id="adminprofile">
								<div class="row">
                                    <input type="hidden" name="updateId" id="updateId" value="<?php if($flag){ echo $id;}?>" class="form-control">
                                    <div class="col-md-3 pr-1">
                                        <div class="form-group">
                                            <label>Admin Photo</label>
                                            <input type="file" class="form-control" name="adminphoto" id="adminphoto">
                                            <input type="hidden" id="pre_profile_image" name="pre_profile_image" value="<?php if($flag){ echo $profile;} ?>" class="form-control">
                                        </div>
                                    </div>
									<div class="col-md-3 pr-1">
										<div class="form-group">
											<label>Admin Fullname</label>
											<input type="text" class="form-control" name="adminname" id="adminname" value="<?php if($flag){ echo $adminname;} ?>">
										</div>
									</div>
									<div class="col-md-3 px-1">
										<div class="form-group">
											<label>Admin Email</label>
											<input type="email" class="form-control" name="adminemail" id="adminemail" value="<?php if($flag){ echo $adminemail;} ?>">
										</div>
									</div>
									<div class="col-md-3 pl-1">
										<div class="form-group">
											<label for="exampleInputEmail1">Admin Password</label>
											<input type="password" name="adminpassword" id="adminpassword" class="form-control" value="<?php if($flag){ echo $adminpassword;} ?>">
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