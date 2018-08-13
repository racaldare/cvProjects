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
								<h2>Edit category №<?php echo $id ?></h2>
								<br>
								<label><b>Category</b></label>
								<br>
								<input type="text" name="name" value="<?php echo $category['name']; ?>" required>								
								<br>
								<br>
								<label><b>Status</b></label>
								<select name="status" >
									<option value="1" <?php if($category['status'] == 1) echo 'selected="selected"'; ?>>Show</option>
									<option value="0" <?php if($category['status'] == 0) echo 'selected="selected"'; ?>>Don't Show</option>
								</select>
								<br>
								<br>
						</div>
						<ul class="pager" style="margin: 0;">
							<li style="float: left; margin: 0 10px;">
								<button type="submit" name="save" style="color: #fff; background-color: #428bca;">Save</button><div class="clr"></div>
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
<br>
<br>
<?php
require_once( ROOT . '/views/layots/admin_footer.php' );
?>