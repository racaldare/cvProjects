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
								<h2>Add new block</h2>
								<br>
								<label><b>Category name</b></label>
								<br>
								<input type="text" style="width: 800px;" name="name" placeholder="name" required>								
								<br>
								<br>
								<label><b>Status</b></label>
								<select name="status" >
									<option value="1" >Show</option>
									<option value="0" >Don't Show</option>
								</select>
								<br>
								<br>
						</div>
						<ul class="pager" style="margin: 0;">
							<li style="float: left; margin: 0 10px;">
								<button type="submit" name="save" style="color: #fff; background-color: #428bca;">Add</button><div class="clr"></div>
							</li>
							<li style="float: left; margin: 0 5%;">
								<a href="/admin/category">Cancel</button>
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
<br>		
<br>       
<?php
require_once( ROOT . '/views/layots/admin_footer.php' );
?>