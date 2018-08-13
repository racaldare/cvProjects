<?php include_once ROOT . '/views/layots/header.php'; ?>

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Our galery</h1>
					</div>
				</div>
			</div>
		</div>
		
		
        <div class="section">
	    	<div class="container">
				<div class="row">
				<div class="col-sm-12">
						<h2>There are all our finished works</h2>					
					</div>
				</div>
			</div>
		</div>		
        
        <div class="section">
	    	<div class="container">
				<div class="row">
			
			<ul class="grid cs-style-2">
				<?php foreach( $imagesList as $image): ?>
					<div class="col-md-4 col-sm-6">
						<figure>
							<img src="<?php  if(is_file( ROOT . '/template/img/galery/' . $image['id'] . '/1.jpg')) echo '/template/img/galery/' . $image['id'] . '/1.jpg'; else echo '/template/img/noimage.png'; ?>" alt="img04">
							<figcaption>
								<h3><?php echo $image['short_title'] ?></h3>
								<span><?php echo $image['short_description'] ?></span>
								<a href="/galery/view/<?php echo $image['id'] ?>">Take a look</a>
							</figcaption>
						</figure>
					</div>	
				<?php endforeach; ?>	
			</ul>

				
				</div>
				
			<?php
				echo $pagination->get();
			?>
				
			</div>
		</div>
		
		<br>
		<br>
		<br>
		<br>
		<br>

<?php include_once ROOT . '/views/layots/footer.php'; ?>