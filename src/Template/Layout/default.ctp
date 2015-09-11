<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.1
Version: 3.5.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8">
<title>Metronic | Metronic | Admin Dashboard Template</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="<?php echo $this->request->webroot;?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->request->webroot;?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->request->webroot;?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->request->webroot;?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="<?php echo $this->request->webroot;?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->request->webroot;?>assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="<?php echo $this->request->webroot;?>assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<link href="<?php echo $this->request->webroot;?>css/new-custom.css" rel="stylesheet" type="text/css"/>
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="<?php echo $this->request->webroot;?>assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css">
<link href="<?php echo $this->request->webroot;?>assets/global/css/plugins.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->request->webroot;?>assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->request->webroot;?>assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="<?php echo $this->request->webroot;?>assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>js/ajaxupload.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo $this->request->webroot;?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/admin/pages/scripts/index3.js" type="text/javascript"></script>
<script src="<?php echo $this->request->webroot;?>assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->


	<?php
		include_once('subpages/api.php');
		JSinclude($this, "assets/admin/pages/scripts/form-validate-roy.js");
	?>


	<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo(theme settings page)
   //Index.init(); // init index page
   Tasks.initDashboardWidget(); // init tash dashboard widget
});
</script>
<!-- END JAVASCRIPTS -->

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body>
<!-- BEGIN HEADER -->
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<div class="page-header-top">
		<div class="container">
			<!-- BEGIN LOGO -->
			<div class="page-logo col-md-3 col-sm-3 col-xs-12">
            <?php $logo = $this->requestAction('Logos/getlogo/0', ['return']); ?>
				<a href="<?php echo $this->request->webroot;?>"><img src="<?php echo $this->request->webroot;?>img/logos/<?php echo $logo;?>" alt="logo" class="logo-default" style="width: 180px;" /></a>
                
			</div>
			<!-- END LOGO -->
            <!-- BEGIN LOGO_TEXT -->
            <div class="logo-text col-md-6 col-sm-6 col-xs-12">
				<div class="logo-mid">
                <a href="<?php echo $this->request->webroot;?>"><img src="<?php echo $this->request->webroot;?>img/intact_logo.png" alt="logo" class="logo" /></a>
                </div>
                <div class="mid-text">
                Trunking Limited
                </div>
			</div>
            <!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler"></a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
            <div class="col-md-3 col-sm-12 col-xs-12">
			<?php include('subpages/top-menu.php');?>
            </div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- END HEADER TOP -->
	<!-- BEGIN HEADER MENU -->
	<?php include('subpages/header-menu.php')?>


	<!-- END HEADER MENU -->
</div>
<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
	
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<!-- BEGIN PRE-FOOTER -->
<div class="page-prefooter">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12 footer-block">
				<h2>About</h2>
				<p>
					 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore.
				</p>
			</div>
			<div class="col-md-3 col-sm-6 col-xs12 footer-block">
				<h2>Subscribe Email</h2>
				<div class="subscribe-form">
					<form action="javascript:;">
						<div class="input-group">
							<input type="text" placeholder="mail@email.com" class="form-control">
							<span class="input-group-btn">
							<button class="btn" type="submit">Submit</button>
							</span>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 footer-block">
				<h2>Follow Us On</h2>
				<ul class="social-icons">
					<li>
						<a href="javascript:;" data-original-title="rss" class="rss"></a>
					</li>
					<li>
						<a href="javascript:;" data-original-title="facebook" class="facebook"></a>
					</li>
					<li>
						<a href="javascript:;" data-original-title="twitter" class="twitter"></a>
					</li>
					<li>
						<a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
					</li>
					<li>
						<a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
					</li>
					<li>
						<a href="javascript:;" data-original-title="youtube" class="youtube"></a>
					</li>
					<li>
						<a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
					</li>
				</ul>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 footer-block">
				<h2>Contacts</h2>
				<address class="margin-bottom-40">
				Phone: 800 123 3456<br>
				 Email: <a href="mailto:info@metronic.com">info@metronic.com</a>
				</address>
			</div>
		</div>
	</div>
</div>
<!-- END PRE-FOOTER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
            <div class="container">
            <div class="row">
            <div class="page-footer-inner col-md-7">
            2015 &copy; Powered by MEE  <!--a style="color:white;" href="https://isbc.ca">ISB Canada</a-->
        </div>

        <div style="float:right;text-align: right;" class="page-footer-inner col-md-5">

            <a href="<?php echo $this->request->webroot;?>pages/view/help" style="color:#a2abb7;">Help</a> / <a href="<?php echo $this->request->webroot;?>pages/view/faq" style="color:#a2abb7;">FAQ</a> / <a href="<?php echo $this->request->webroot;?>pages/view/privacy_code" style="color:#a2abb7;">Privacy Code</a> / <a href="<?php echo $this->request->webroot;?>pages/view/terms" style="color:#a2abb7;">Terms</a> / <a href="<?php echo $this->request->webroot;?>pages/view/version_log" style="color:#a2abb7;">Version Log</a> / <a href="<?php echo $this->request->webroot;?>profiles/settings?toggledebug" style="color:#a2abb7;">Debug Mode (Off)</a> / <a href="<?php echo $this->request->webroot;?>profiles/settings" style="color:#a2abb7;">Settings</a>        </div>
</div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
        </div>
        </div>
<div class="scroll-to-top">
	<i class="icon-arrow-up"></i>
</div>

</body>
<!-- END BODY -->
</html>