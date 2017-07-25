<main id="maincontent">
	<div class="content-home">

			<div class="container">
				<div class="row">

					<div class="col-md-12 col-sm-12 col-xs-12">
						<?php include('home/breadcrumb.php'); ?>
					</div>
				</div>

				<div class="row" style="">
					<div class="col-xs-12">
						<!-- <div class="btn btn-info col-xs-12"><span> clickme</span></div> -->
						<button type="button" id="btn-collapse" class="btn btn-info btn-md col-xs-12" data-toggle="collapse"  data-target="#my-collapse" >
							
							<span id="servicesButton" data-toggle="tooltip " data-original-title="Click Me!">
							      <span class="servicedrop glyphicon glyphicon-arrow-right"></span> Filter 
							</span>
							
						</button>
					</div>
					
				</div>

				<div class="row" style="">
					<div class="col-md-3 col-sm-3 col-xs-12">
						<?php include('home/sideMenu.php'); ?>
					</div>

					<div class="col-md-9 col-sm-9 col-xs-12" >
						<?php include('home/popular-products.php'); ?>
						<?php include('home/toolbar.php'); ?>
						<?php include('home/list-products.php'); ?>
					</div>
				</div>

				<div class="row" style="text-align: right; ">
					<?php include('home/pagination.php'); ?>
				</div>
			</div>
		
	</div>
</main>