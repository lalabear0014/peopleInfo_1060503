<div class="container" style="margin-top: 5%;">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Reset Password</div>
            <div class="panel-body">     
            <!-- Login Form -->
            <form action="<?= base_url('users/updatePwd') ?>" method="post" role="form">
                <?php $logined = $this->session->userdata('user'); ?>			
				<input type="hidden" name="txt_hidden" value="<?= $logined; ?>">
				<!-- OldPassword Field -->
                <div class="row">
                    <div class="form-group col-xs-12">
                    <label><span class="text-danger" style="margin-right:5px;">*</span>Old Password :</label>
                        <div class="input-group">
                            <input class="form-control" type="password" name="OldPassword" placeholder="OldPassword" required/>
                        </div>
                    </div>
                </div>  
            	<!-- NewPassword Field -->
                <div class="row">
                    <div class="form-group col-xs-12">
                    <label><span class="text-danger" style="margin-right:5px;">*</span>New Password :</label>
                        <div class="input-group">
                            <input class="form-control" type="password" name="NewPassword" placeholder="NewPassword" required/>
                        </div>
                    </div>
                </div>       
                <!-- ConfirmPassword Field -->
                <div class="row">
                    <div class="form-group col-xs-12">
                        <label><span class="text-danger" style="margin-right:5px;">*</span>Confirm Password :</label>
                        <div class="input-group">
                            <input class="form-control" type="password" name="ConfirmPassword" placeholder="ConfirmPassword" required/>
                        </div>
                    </div>
                </div>     
                <!-- Login Button -->
                <div class="row">
                    <div class="form-group col-xs-4">
                        <button type="submit" class="btn btn-primary">ChangePassword</button>
                    </div>
                </div>       
            </form>
            <!-- End of Login Form -->           
        </div>
    </div>
</div>