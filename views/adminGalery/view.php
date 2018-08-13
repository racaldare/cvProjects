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
	    			<div class="col-sm-6 product-details">						
						<h3 style="width: 100%;">
							All photos
							<ul class="pager" style="margin: 0; float:right;">
								<li style="float: right;">
									<a style="padding: 6px; font-size: 18px; font-weight: normal;" href="/admin/galery/">Back</a>
								</li>
								<li style="float: right; margin: 0 10px;">
									<a style="padding: 6px; font-size: 18px; font-weight: normal;" href="/admin/galery/add/<?php echo $id ?>">Add photo</a>
								</li>
								<li style="float: right; margin: 0 10px;">
									<a style="padding: 6px; font-size: 18px; font-weight: normal;" href="/admin/galery/block/delete/<?php echo $id ?>">Delete block</a>
								</li>
								<li style="float: right; margin: 0 10px;">
									<a style="padding: 6px; font-size: 18px; font-weight: normal;" href="/admin/galery/block/edit/<?php echo $id ?>">Edit block</a>
								</li>
							</ul>
						</h3>
	    			</div>
	    			<!-- End Product Summary & Options -->
	    			
					<div class="clients-logo-wrapper text-center row" style="width:60%;">
						<?php for( $i = 1; $i<=$image['count']; $i++): ?>
							<?php if(is_file( ROOT . '/template/img/galery/' . $image['id'] . '/' . $i . '.jpg')): ?>
								<div style="min-width: 200px; max-width: 200px; min-height: 200px; max-height: 200px; margin-bottom: 5%;" class="col-lg-2 col-md-1 col-sm-3 col-xs-6">
										<img style="min-width: 200px; max-width: 200px; min-height: 200px; max-height: 200px; padding: 10px;" src="/template/img/galery/<?php echo $image['id'] ?>/<?php echo $i ?>.jpg" alt="Client Name">
									<ul class="pager" style="margin: 0;">
									  <li style="float: left; margin: 0 10px;">
										<a href="/admin/galery/edit/<?php echo $image['id'] . '/' . $i ?>" style="color: #fff; background-color: #428bca;">Edit</a><div class="clr"></div>
									  </li>
									  <li style="float: right; margin: 0 10px;">
										<a href="/admin/galery/delete/<?php echo $image['id'] . '/' . $i ?>">Delete</a>
									  </li>
									</ul>
								</div>
							<?php endif; ?>
						<?php endfor; ?>
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