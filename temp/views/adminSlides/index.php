<?php  include_once ROOT . '/views/layots/admin_header.php'; ?>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
        <div class="section">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-sm-6 product-details" style="margin-bottom: 1%;">						
						<h3 style="width: 100%;">
							All slides
						</h3>
	    			</div>
	    			<!-- End Product Summary & Options -->
	    			
					<div class="clients-logo-wrapper text-center row" style="width:60%; margin-top: 5%;">
						<?php foreach( $slidesList as $slide): ?>
							<h3 style="margin: 0;"><?php echo $slide['title'] ?> </h3>
							<p><?php echo $slide['description'] ?></p>
								<div style=" float: none;margin: 0 0 10% 0;" class="col-lg-2 col-md-1 col-sm-3 col-xs-6">
								<?php if(is_file( ROOT . '/template/img/slides/' .$slide['id']. '.jpg')): ?>
									<img style=" max-width: 700px; max-height: 500px; margin-bottom: 15%;" src="/template/img/slides/<?php echo $slide['id'] ?>.jpg" alt="Client Name">
								<?php endif; ?>
									<ul class="pager" style="margin: 0; width: 200%;">
									  <li style="float: left; margin: 0 10px;">
										<a href="/admin/slides/edit/<?php echo $slide['id']?>" style="color: #fff; background-color: #428bca;">Edit</a><div class="clr"></div>
									  </li>
									</ul>
								</div>
						<?php endforeach; ?>
					</div>	
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

<?php include_once ROOT . '/views/layots/admin_footer.php'; ?>