<?php
require_once( ROOT . '/views/layots/admin_header.php' );
?>
<br>		
<br>		
<br>		
<br>		
<br>		
<br>		
        <div class="section">
	    	<div class="container">
				<div class="row">
					<form action="#" method="post" enctype="multipart/form-data">
						<div class="col-sm-12">
								<h2>Edit image №<?php echo $img ?> from <?php echo $imgBlock ?> image block?</h2>
								<img style="min-width: 200px; max-width: 200px; min-height: 200px; max-height: 200px; padding: 10px;" src="/template/img/galery/<?php echo $imgBlock ?>/<?php echo $img ?>.jpg" alt="Client Name">						
								<input type="file" name="image" value="" required><br><br>
						</div>
						<ul class="pager" style="margin: 0;">
							<li style="float: left; margin: 0 10px;">
								<button type="submit" name="yes" style="color: #fff; background-color: #428bca;">Yes</button><div class="clr"></div>
							</li>
							<li style="float: left; margin: 0 5%;">
								<a href="/admin/galery/view/<?php echo $imgBlock ?>">Cancel</button>
							</li>
						</ul>
					</form>
				</div>
			</div>
		</div>		
        
<?php
require_once( ROOT . '/views/layots/admin_footer.php' );
?>