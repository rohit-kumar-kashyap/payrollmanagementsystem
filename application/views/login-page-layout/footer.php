        <footer class="copyrigh-wthree">
            <p>
                © <?php echo date("Y"); ?> Payroll Management System. All Rights Reserved | Design & Developed by
                <a href="https://rohit-kumar-kashyap.github.io/" target="_blank">Rohit Kumar Kashyap </a>
            </p>
        </footer>
    </body>
        <script src="<?php echo base_url('assets/login-page-assets/js/jquery/jquery.min.js');?>"></script>
        <script>
            function login_validation(){
                var login_email = $("#email").val();
                var login_password = $("#password").val();
                if(login_email=='')
                {
                    $("#emailerror").show();
                    $("#emailerror").html("Please enter valid email");
                    $("#emailerror").fadeOut(4000);
                    $("#email").focus();
                    return false;
                }
                else if(login_password=='')
                {
                    $("#passworderror").show();
                    $("#passworderror").html("Please enter valid password");
                    $("#passworderror").fadeOut(4000);
                    $("#password").focus();
                    return false;
                }
                else{
                    return true;
                }
            }
        </script>
</html>