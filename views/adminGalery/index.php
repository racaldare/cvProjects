<?php
require_once( ROOT . '/views/layots/admin_header.php' );
?>
<br>	
<br>	
<br>	
<br>	
        <div class="section">
	    	<div class="container">
				<div class="row">
				<div class="col-sm-12">
						<h3 style="width: 100%;">
							Galery
							<ul class="pager" style="margin: 0; float:right;">
								<li style="float: right;">
									<a style="padding: 6px; font-size: 18px; font-weight: normal;" href="/admin/galery/block/add">Add block</a>
								</li>
							</ul>
						</h3>					
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
								<a href="/admin/galery/view/<?php echo $image['id'] ?>">Take a look</a>
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

<?php
require_once( ROOT . '/views/layots/admin_footer.php' );
?>