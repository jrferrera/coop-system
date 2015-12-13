<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libraries/bootstrap-3.3.6/css/bootstrap.min.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/page.css'); ?>" />

		<script type="text/javascript" src="<?php echo base_url('assets/libraries/jquery/jquery-2.1.4.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/libraries/bootstrap-3.3.6/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/page.js'); ?>"></script>
	</head>
	<body id="<?php echo $class; ?>-container">
		<div id="body-loader"></div>
		<div id="header-container" class="row container">
			<div class="col-md-12"><?php echo $header; ?></div>
		</div>

		<div id="body-container"  class="row container">
			<div class="col-md-12"><?php echo $body; ?></div>
		</div>

		<div id="footer-container" class="row container">
			<div class="col-md-12"><?php echo $footer; ?></div>
		</div>
	</body>
</html>