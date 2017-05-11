<div class="container" style="margin-top: 5%;">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Login to Your Account</div>
            <div class="panel-body">     
            <!-- Login Form -->
            <form action="<?= base_url('users/loginProcess') ?>" method="post" role="form">    
                <!-- Username Field -->
                <div class="row">
                    <div class="form-group col-xs-12">
                    <label><span class="text-danger" style="margin-right:5px;">*</span>Username:</label>
                        <div class="input-group">
                            <input class="form-control" type="text" name="username" placeholder="Username" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary">
                                    <span class="glyphicon glyphicon-user"></span>
                                </label>
                            </span>
                        </div>
                    </div>
                </div>       
                <!-- Password Field -->
                <div class="row">
                    <div class="form-group col-xs-12">
                        <label><span class="text-danger" style="margin-right:5px;">*</span>Password:</label>
                        <div class="input-group">
                            <input class="form-control" type="password" name="password" placeholder="Password" required/>
                            <span class="input-group-btn">
                                <label class="btn btn-primary">
                                    <span class="glyphicon glyphicon-lock"></span>
                                </label>    
                            </span>
                        </div>
                    </div>
                </div>     
                <!-- Login Button -->
                <div class="row">
                    <div class="form-group col-xs-4">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>       
            </form>
            <!-- End of Login Form -->           
        </div>
    </div>
</div>