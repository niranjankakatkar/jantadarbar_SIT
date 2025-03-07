<!DOCTYPE html>
<html lang="en">

        <meta charset="utf-8" />
        <title>File Tracking System  | Log In</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?=base_url();?>public/assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?=base_url();?>public/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons -->
        <link href="<?=base_url();?>public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-primary-subtle">
        <!-- Begin page -->
        <div class="account-page">
            <div class="container-fluid p-0">
                <div class="row align-items-center g-0">
                    <div class="col-xl-3"></div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                <div class="card p-3 mb-0">
                                    <div class="card-body" style="padding-top: 0px;">

                                        <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                                            <div class="auth-title-section text-center"> 
                                                <img src="<?=base_url();?>public/assets/images/logo.png" class="mx-auto img-fluid"  alt="FTS">
                                                 
                                            </div>
                                            <h3 class="text-center"><b>File Tracking System</b></h3>
                                            <div style="color:#ff0000;font-size: 18px;" class="text-center"><?php error_reporting(0); echo $_SESSION['invalidLoginD'];?></div>
                                             <div class="pt-0">
                                                 <?php echo form_open('/signIn', array('autocomplete' => 'off','class' => 'form-horizontal m-t-20')); ?>
                                                 <div class="form-group mb-3">
                                                        <label for="emailaddress" class="form-label">Username</label>
                                                        <input class="form-control" type="username" id="username" name="username" placeholder="Enter your username" value="<?php echo set_value('username') ?>">
                                                        <?php  if(isset($validation)) {?>
                                                         <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                         <?= $error = $validation->getError('username'); ?>
                                                         </div>
                                                        <?php }?>
                                                    </div>
                        
                                                    <div class="form-group mb-3">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password" value="<?php echo set_value('password') ?>">
                                                        <?php  if(isset($validation)) {?>
                                                         <div class="text-danger" style="text-align: left;margin-left: 5px;color: #ec536c!important;">
                                                         <?= $error = $validation->getError('password'); ?>
                                                         </div>
                                                
                                                         <?php }?>   
                                                    </div>
                        
                                                    <div class="form-group d-flex mb-3">
                                                        <div class="col-sm-6">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                                                <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 text-end">
                                                            <a class='text-muted fs-14' href='#'>Forgot password?</a>                             
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group mb-0 row">
                                                        <div class="col-12">
                                                            <div class="d-grid">
                                                                <button class="btn btn-primary" type="submit"> Log In </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
            
                                                
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3">
                        
                    </div>
                     

                </div>
            </div>
        </div>
        
        <!-- END wrapper -->

        <!-- Vendor -->
        <script src="<?=base_url();?>public/assets/libs/jquery/jquery.min.js"></script>
        <script src="<?=base_url();?>public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?=base_url();?>public/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?=base_url();?>public/assets/libs/node-waves/waves.min.js"></script>
        <script src="<?=base_url();?>public/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="<?=base_url();?>public/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="<?=base_url();?>public/assets/libs/feather-icons/feather.min.js"></script>

        <!-- App js-->
        <script src="<?=base_url();?>public/assets/js/app.js"></script>
        
    </body>
</html>