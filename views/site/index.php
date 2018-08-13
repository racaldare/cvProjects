<?php include ROOT . '/views/layots/header.php' ?>


    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
			<?php foreach($slidesList as $slide): ?>
                <li data-target="#main-slider" data-slide-to="<?php echo $slide['id']-1 ?>" <?php if($slide['id'] == 1) echo 'class="active"' ?>></li>
			<?php endforeach; ?>
            </ol>
            <div class="carousel-inner ">
                <?php foreach($slidesList as $slide): ?>
				<div class="item<?php if($slide['id'] == 1) echo ' active'; ?>" style="background-image: url(/template/img/slides/<?php echo $slide['id'] ?>.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content<?php if($slide['id'] == 2) echo ' center '; ?>centered">
                                    <h2 class="animation animated-item-1"><?php echo $slide['title'] ?></h2>
                                    <p class="animation animated-item-2"><?php echo $slide['description']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
				<?php endforeach;?>
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

	
		<!-- Call to Action Bar -->
	    <div class="section section-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="calltoaction-wrapper">
							<h3>Welcome! Take a look to our services and general information about us, make a right choice.</h3> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Call to Action Bar -->


		<!-- Services -->
        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
					<?php foreach( $servicesList as $service): ?>
						<div class="col-md-4 col-sm-6">
							<div class="service-wrapper">
								<i class="<?php echo $service['img'] ?>"></i>
								<h3><?php echo $service['title'] ?></h3>
								<p><?php echo $service['short_description'] ?></p>
								<a href="/services/" class="btn"> Read more </a>
							</div>
						</div>
					<?php endforeach; ?>
	        	</div>
	        </div>
	    </div>
	    <!-- End Services -->


<hr>

		<!-- Our Portfolio -->	

        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
	
				<div class="section-title">
				<h1>Our Recent Works</h1>
				</div>
		
		
			<ul class="grid cs-style-3">
				<?php foreach( $imagesList as $image ): ?>
	        	<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php if(is_file( ROOT . '/template/img/galery/' . $image['id'] . '/1.jpg' )) echo '/template/img/galery/' . $image['id'] . '/1.jpg'; else echo '/template/img/noimage.png'; ?>" alt="img04">
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
	        </div>
	    </div>
		<!-- Our Portfolio -->
		
<?php include ROOT . '/views/layots/footer.php' ?>