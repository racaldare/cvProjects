<?php include_once ROOT . '/views/layots/header.php'; ?>

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Product Details</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
	    		<div class="row">
	    			<!-- Product Image & Available Colors -->
	    			<div class="col-sm-6">
	    				<div class="product-image-large">
							<?php if(is_file( ROOT . '/template/img/galery/' . $image['id'] . '/' . $idPhoto . '.jpg')): ?>
								<img src="/template/img/galery/<?php echo $image['id'] . '/' . $idPhoto ?>.jpg" alt="Item Name">
							<?php else: ?>
								<img src="/template/img/noimage.png" alt="Item Name">
							<?php endif; ?>
	    				</div>
	    				<div class="colors">
							<span class="color-white"></span>
							<span class="color-black"></span>
							<span class="color-blue"></span>
							<span class="color-orange"></span>
							<span class="color-green"></span>
						</div>
	    			</div>
	    			<!-- End Product Image & Available Colors -->
	    			<!-- Product Summary & Options -->
	    			<div class="col-sm-6 product-details">
	    				<h2><?php echo $image['title'] ?></h2>
	    				<p>
							<?php echo $image['description'] ?>
						</p>						
						<h3>More photos</h3>
	    			</div>
	    			<!-- End Product Summary & Options -->
	    			
					<div class="clients-logo-wrapper text-center row" style="float: right; width:600px;">
						<?php for( $i = 1; $i<=$image['count']; $i++): ?>
							<?php if(is_file( ROOT . '/template/img/galery/' . $image['id'] . '/' . $i . '.jpg')): ?>
								<div style="min-width: 200px; max-width: 200px; min-height: 200px; max-height: 200px; " class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="<?php echo '/galery/view/' . $image['id'] . '/' . $i ?>"><img style="min-width: 200px; max-width: 200px; min-height: 200px; max-height: 200px; padding: 10px;" src="/template/img/galery/<?php echo $image['id'] ?>/<?php echo $i ?>.jpg" alt="Client Name"></a></div>
							<?php endif; ?>
						<?php endfor; ?>
					</div>	
					
	    		</div>
			</div>
		</div>
		
<hr>
		
        <div class="section">
	    	<div class="container">
				<div class="row">
				
				<div class="section-title">
				<h1>Similar Works</h1>
				</div>				
			
			<ul class="grid cs-style-2">
				<?php foreach($similarWorks as $work): ?>
					<?php if($work['id'] != $id):?>
						<div class="col-md-3 col-sm-6">
							<figure>
								<?php if(is_file( ROOT . '/template/img/galery/' . $work['id'] . '/1.jpg')): ?>
									<img src="/template/img/galery/<?php echo $work['id']?>./1.jpg" alt="Item Name">
								<?php else: ?>
									<img src="/template/img/noimage.png" alt="Item Name">
								<?php endif; ?>
								<figcaption>
									<h3><?php echo $work['short_title'] ?></h3>
									<span><?php echo $work['short_description'] ?></span>
									<a style="margin-top: 28px;" href="/galery/view/<?php echo $work['id'] ?>">Take a look</a>
								</figcaption>
							</figure>
						</div>
					<?php endif;?>
				<?php endforeach; ?>
			</ul>

				
				</div>
			</div>
		</div>

<?php include_once ROOT . '/views/layots/footer.php'; ?>