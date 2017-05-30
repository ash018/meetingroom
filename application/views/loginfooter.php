        </div> <!-- /.account-body -->

        <div class="account-footer">
            <p>
                &copy; <?php echo date('Y');?>. MIS. All Rights Reserved.
            </p>
        </div> <!-- /.account-footer -->

    </div> <!-- /.account-wrapper -->
    <script src="<?php echo base_url();?>assets/js/libs/jquery-1.10.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/libs/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/libs/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="./js/libs/excanvas.compiled.js"></script>
    <![endif]-->
    <!-- App JS -->
    <script src="<?php echo base_url();?>assets/js/target-admin.js"></script>
    <!-- Plugin JS -->
    <script src="<?php echo base_url();?>assets/js/target-account.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#frmlogin').submit(function(){
                var u = $('#empcode').val();
                var p = $('#password').val();
                if(u == '' && p == '') {
                    $('.login-alert').fadeIn();
                    return false;
                }
            });
        });
    </script>
</body>
</html>