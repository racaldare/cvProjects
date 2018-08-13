<?php require_once(ROOT . '/views/layots/header.php'); ?>

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Our Services </h1>
					</div>
				</div>
			</div>
		</div>		
        
        <div class="section">
	        <div class="container">
	        	<div class="row">
					<?php foreach( $servicesList as $service): ?>
						<div class="col-md-4 col-sm-6">
							<div class="service-wrapper">
								<i class="<?php echo $service['img'] ?>"></i>
								<h3><?php echo $service['title'] ?></h3>
								<p><?php echo $service['description'] ?></p>
							</div>
						</div>
					<?php endforeach; ?>
	        	</div>
	        </div>
	    </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
		
<?php require_once (ROOT . '/views/layots/footer.php'); ?>