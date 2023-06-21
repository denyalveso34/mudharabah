<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="http://localhost/mudharabah/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if( isset($title) && $title !== NULL ) { echo ucwords(str_replace('-',' ',$title)); } ?></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?=$this->config->item('img').'/favicon/favicon.ico';?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="<?=$this->config->item('vendor-fonts').'boxicons.css';?>" />
    <link rel="stylesheet" href="<?=$this->config->item('vendor-fonts').'fontawesome.css';?>" />
    <link rel="stylesheet" href="<?=$this->config->item('vendor-fonts').'flag-icons.css';?>" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?=$this->config->item('vendor-css').'rtl/core.css';?>" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?=$this->config->item('vendor-css').'rtl/theme-default.css';?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?=$this->config->item('css').'demo.css';?>" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?=$this->config->item('vendor-libs').'perfect-scrollbar/perfect-scrollbar.css';?>" />
    <link rel="stylesheet" href="<?=$this->config->item('vendor-libs').'typeahead-js/typeahead.css';?>" />
    <?php if (isset($chart)) { ?>
    <link rel="stylesheet" href="<?=$this->config->item('vendor-libs').'apex-charts/apex-charts.css';?>" />
    <?php } ?>

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src="<?=$this->config->item('vendor-js').'helpers.js';?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <!-- <script src="<?=$this->config->item('vendor-js').'template-customizer.js';?>"></script> -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?=$this->config->item('js').'config.js';?>"></script>
    <!-- additional CSS -->
    <?php $this->load->view("sneat-templates/script-css.php"); ?>
</head>

<body>
	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar  ">
		<div class="layout-container">
            <!-- Sidebar -->
            <?php
                if ($title != "login"){
                    $this->load->view("sneat-templates/sidebar.php");
                }
            ?>
            <!--./Sidebar -->
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Header -->
                <?php
                    if ($title != "login"){
                        $this->load->view("sneat-templates/header.php");
                    }
                ?>
                <!--./Header -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- Main -->
                        <?php $this->load->view($content); ?>
                        <!--./Main -->
                    </div>
                </div>
            </div>
            <!--./Layout container -->
        </div>
    </div>
    
    <!-- Bootstrap Toasts Styles -->
    <?php 
    if($this->session->flashdata('message')) { 
        $message = $this->session->flashdata('message');
        $alert   = $this->session->flashdata('alert');  
    ?>
    
    <div class="toast-container">
    	<div class="bs-toast toast toast-ex show fade bg-<?=$alert?>" role="alert" aria-live="assertive" aria-atomic="true">
    		<div class="toast-header">
    			<!--<i class='bx bx-bell me-2'></i>-->
    			<div class="me-auto fw-semibold"></div>
    			<small></small>
    			<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    		</div>
    		<div class="toast-body">
                <?=$message?>
    		</div>
    	</div>
    </div>

    <?php } ?>
    <!--/ Bootstrap Toasts Styles -->

    <?php $this->load->view("sneat-templates/script-js.php"); ?>
    
</body>

</html>