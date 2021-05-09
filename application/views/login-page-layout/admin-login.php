    <style>
        .loginfielderror{
            color: red;
            display: none;
        }
        #errorloginmsg{
            color:red;
        }
    </style>
    <body>
        <h1 class="error">Payroll Management System</h1>
	    <div class="w3layouts-two-grids">
	        <div class="mid-class">
                <div class="img-right-side">
                    <img src="<?php echo base_url('assets/login-page-assets/images/b11.png');?>" class="img-fluid" alt="">
                </div>
                <div class="txt-left-side">
                    <h2> Admin Login Here </h2>
                    <form action="<?php echo base_url();?>Adminlogin/login_validation" method="post">
                        <div class="form-left-to-w3l">
                            <span class="fa fa-user-o" aria-hidden="true"></span>
                            <input type="email" name="email" id="email" placeholder="Enter your Email id" required="">

                            <div class="clear"></div>
                        </div>
                        <div class="loginfieldserror" id="emailerror"></div>

                        <div class="form-left-to-w3l">
                            <span class="fa fa-phone" aria-hidden="true"></span>
                            <input type="password" name="password" id="password" placeholder="Enter your Password" required="">

                            <div class="clear"></div>
                        </div>
                        <div class="loginfielderror" id="passworderror"></div>

                        <div class="main-two-w3ls">
                            <div class="right-side-forget" align="center">
                                <a href="#" class="for" style="text-align:center;">Forgot password...?</a>
                            </div>
                        </div>

                        <div class="btnn">
                            <button type="submit" name="submit" onclick="return login_validation();">Login</button>
                        </div>
                        <div id="errorloginmsg"><?php echo $this->session->flashdata("error"); ?></div>

                    </form>

                    <div class="clear"></div>
                </div>
            </div>
        </div>