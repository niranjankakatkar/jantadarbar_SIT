<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="जनता दरबार">
        <meta name="author" content="">

        <!-- Favicon and touch Icons -->
        <link href="<?=base_url();?>public/assets/img/favicon.png" rel="shortcut icon" type="image/png">
        <link href="<?=base_url();?>public/assets/img/apple-touch-icon.html" rel="apple-touch-icon">
        <link href="<?=base_url();?>public/assets/img/apple-touch-icon-72x72.html" rel="apple-touch-icon" sizes="72x72">
        <link href="<?=base_url();?>public/assets/img/apple-touch-icon-114x114.html" rel="apple-touch-icon" sizes="114x114">
        <link href="<?=base_url();?>public/assets/img/apple-touch-icon-144x144.html" rel="apple-touch-icon" sizes="144x144">

        <!-- Page Title -->
        <title>जनता दरबार</title>
        
        <!-- Styles Include -->
        <link rel="stylesheet" href="<?=base_url();?>public/assets/css/main.css" id="stylesheet">
        
    </head>

    <body class="bg-primary">
        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader-inner">
                <div class="spinner"></div>
                <div class="logo"><img src="assets/img/logo-icon.svg" alt="img"></div>
            </div>
        </div>
        
        <!-- Login Form -->
        <div class="row align-items-center justify-content-center vh-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6">
                <div class="card rounded-2 border-0 p-5 m-0">

                    <div class="card-header border-0 p-0 text-center">
                        <a href="index.html" class="w-100 d-inline-block mb-5">
                            <img src="assets/img/logo.svg" alt="img">
                        </a>
                        <h3>परत स्वागत आहे!</h3>
                        <p class="fs-14 text-dark my-4">कृपया तुमचे खाते वापरून लॉगिन करा.</p>
                    </div>

                    <div class="card-body p-0">
                        <form class="form-horizontal" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="u_name" value="" placeholder="वापरकर्तानाव किंवा ईमेल" required>
                            </div>
            
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" value="" placeholder=" पासवर्ड" required>
                            </div>
            
                            <a href="index.html" class="btn btn-primary w-100 text-uppercase text-white rounded-2 lh-34 ff-heading fw-bold shadow">लॉगिन करा</a>
                            
                            <p class="d-flex align-items-center justify-content-between mt-4 mb-4">तुमचा पासवर्ड विसरलात?</p>
                            
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>

        

        <!-- Core JS -->
        <script src="<?=base_url();?>public/assets/js/jquery-3.6.0.min.js"></script>
        <script src="<?=base_url();?>public/assets/js/bootstrap.bundle.min.js"></script>

        <!-- jQuery UI Kit -->
        <script src="<?=base_url();?>public/plugins/jquery_ui/jquery-ui.1.12.1.min.js"></script>
        
        <!-- ApexChart -->
        
        
        <!-- Peity  -->
        <script src="<?=base_url();?>public/plugins/peity/jquery.peity.min.js"></script>
        <script src="<?=base_url();?>public/plugins/peity/piety-init.js"></script>

        <!-- Select 2 -->
        <script src="<?=base_url();?>public/plugins/select2/js/select2.min.js"></script>

        <!-- Datatables -->
        <script src="<?=base_url();?>public/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?=base_url();?>public/plugins/datatables/js/datatables.init.js"></script>
        
        

        <!-- Date Picker -->
        <script src="<?=base_url();?>public/plugins/flatpickr/flatpickr.min.js"></script>

        <!-- Dropzone -->
        <script src="<?=base_url();?>public/plugins/dropzone/dropzone.min.js"></script>
        <script src="<?=base_url();?>public/plugins/dropzone/dropzone_custom.js"></script>
        
        <!-- TinyMCE -->
        <script src="<?=base_url();?>public/plugins/tinymce/tinymce.min.js"></script>
        <script src="<?=base_url();?>public/plugins/prism/prism.js"></script>
        <script src="<?=base_url();?>public/plugins/jquery-repeater/jquery.repeater.js"></script>

        

        

        <!-- Sweet Alert -->
        <script src="<?=base_url();?>public/plugins/sweetalert/sweetalert2.min.js"></script>
        <script src="<?=base_url();?>public/plugins/sweetalert/sweetalert2-init.js"></script>
        <script src="<?=base_url();?>public/plugins/nicescroll/jquery.nicescroll.min.js"></script>

        <!-- Snippets JS -->
        <script src="<?=base_url();?>public/assets/js/snippets.js"></script>

        <!-- Theme Custom JS -->
        <script src="<?=base_url();?>public/assets/js/theme.js"></script>
        
    </body>
</html>