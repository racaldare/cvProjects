<?php
require_once( ROOT . '/views/layots/admin_header.php' );
?>
<br>					
<br>					
        <div class="section">
	    	<div class="container">
				<div class="row">
					<form action="#" method="post" enctype="multipart/form-data">
						<div class="col-sm-12">
								<h2>Delete block №<?php echo $id ?> ?</h2>
								<img style="min-width: 200px; max-width: 200px; min-height: 200px; max-height: 200px; padding: 10px;" src="<?php if(is_file(ROOT . '/template/img/galery/' .$id. '/1.jpg')) echo '/template/img/galery/' .$id. '/1.jpg'; else echo '/template/img/noimage.png'; ?>" alt="Client Name">						
						</div>
						<ul class="pager" style="margin: 0;">
							<li style="float: left; margin: 0 10px;">
								<button type="submit" name="yes" style="color: #fff; background-color: #428bca;">Yes</button><div class="clr"></div>
							</li>
							<li style="float: left; margin: 0 5%;">
								<button type="submit" name="cancel">Cancel</button>
							</li>
						</ul>
					</form>
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
<?php
require_once( ROOT . '/views/layots/admin_footer.php' );
?>