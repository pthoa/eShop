<!DOCTYPE html>
<html>
<head>
	<title>Check out</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../web/css/checkout-page.css" rel="stylesheet" type="text/css" >
	<link href="../web/css/font/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="../web/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="../web/bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
	<link href="../web/bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
	<link href="../web/css/styles-m.css" rel="stylesheet" type="text/css" />
	<link href="../web/css/styles.css" rel="stylesheet" type="text/css" />
	<link href="../web/css/styles-l.css" rel="stylesheet" type="text/css" />
	<link href="../web/css/magicmenu.css" rel="stylesheet" type="text/css" />
	<link href="../web/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../web/css/custom.css" rel="stylesheet" type="text/css" />
	<link href="../web/css/home.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="https://bootsnipp.com/css/fullscreen.css">
	<script src="../web/js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="../web/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<?php  include('checkout_page/check_step.php') ?> 	
			<div class="col-md-8">		
				<?php  include('checkout_page/content.php') ?>

				<?php  include('checkout_page/bottom.php') ?>
			</div>	

			<div class="col-md-4">
				<?php include('checkout_page/right.php') ?>
			</div>	
		</div>
	</div>
</body>
</html>