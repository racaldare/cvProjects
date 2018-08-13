<?php require_once(ROOT . '/views/layots/admin_header.php'); ?>		
        
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
        <div class="section">
	        <div class="container">
				<a href="/admin/services/add/" class="btn" style="color: #2a6496; background-color: #fff; margin-right: 5%;"> Add service </a>
	        	<div class="row">
					<?php foreach( $servicesList as $service): ?>
						<div class="col-md-4 col-sm-6">
							<div class="service-wrapper">
								<i class="<?php echo $service['img'] ?>"></i>
								<h3><?php echo $service['title'] ?></h3>
								<p><?php echo $service['description'] ?></p>
								<a href="/admin/services/edit/<?php echo $service['id'] ?>" class="btn" style="background-color: #2a6496; margin-right: 5%;"> Edit </a>
								<a href="/admin/services/delete/<?php echo $service['id'] ?>" class="btn" style="background-color: #A52A2A;"> Delete </a>
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
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
<?php require_once (ROOT . '/views/layots/admin_footer.php'); ?>