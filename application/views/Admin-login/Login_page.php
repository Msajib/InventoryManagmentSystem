
        <div class="wrapper-page">

            <div class="card">
                <div class="card-block">

                    <h3 class="text-center mt-0 m-b-15">
                        <a class="logo logo-admin"><img src="<?php echo base_url()?>assets/images/logo.jpg" height="154px" width="50%" alt="logo"></a>
                    </h3>

                    <h4 class="text-muted text-center font-18"><b>Sign In</b></h4>

                    <div class="p-3">
                        <form class="form-horizontal m-t-20" action="<?php echo base_url();?>welcome/check_login" method="post">

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" name="user_email" required="" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" name="user_password" type="password" required="" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Remember me</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-sm-7 m-t-20">
                                    <a href="<?php echo base_url();?>startup/forget_password" class="text-muted"><i class="mdi mdi-lock    "></i> Forgot your password?</a>
                                </div>
                                <div class="col-sm-5 m-t-20">
                                    <a href="<?php echo base_url();?>startup/new_account_create" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


