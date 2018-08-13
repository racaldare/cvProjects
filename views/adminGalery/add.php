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
								<h2>Add new photo</h2>				
								<input type="file" name="image" value="" required><br><br>
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
        
<?php
require_once( ROOT . '/views/layots/admin_footer.php' );
?>