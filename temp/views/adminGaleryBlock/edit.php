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
								<h2>Edit block №<?php echo $id ?></h2>
								<br>
								<label><b>Block title</b></label>
								<br>
								<input type="text" style="width: 800px;" name="title" value="<?php echo $image['title']; ?>" required>								
								<br>
								<br>
								<label><b>Block short title</b></label>
								<br>
								<input type="text" style="width: 800px;" name="short_title" value="<?php echo $image['short_title']; ?>" required>								
								<br>
								<br>
								<label><b>Description</b></label>
								<br>
								<textarea name="description" style="width: 800px;" value=""><?php echo $image['description']; ?></textarea>							
								<br>
								<br>
								<label><b>Block short description</b></label>
								<br>
								<input type="text" style="width: 800px;" name="short_description" value="<?php echo $image['short_description']; ?>" required>								
								<br>
								<br>
								<label><b>Recent</b></label>
								<select name="recent" >
									<option value="1" <?php if($image['recent'] == 1) echo 'selected="selected"'; ?>>Yes</option>
									<option value="0" <?php if($image['recent'] == 0) echo 'selected="selected"'; ?>>No</option>
								</select>
								<br>
								<br>
								<label><b>Category</b></label>
								<select name="category" >
								<?php foreach( $categories as $category ): ?>
									<option value=" <?php echo $category['id'] ?> " <?php if($image['category_id'] == $category['id']) echo 'selected="selected"'; ?>><?php echo $category['name']?></option>
								<?php endforeach; ?>
								</select>
								<br>
								<br>
									<label><b>Status</b></label>
								<select name="status" >
									<option value="1" <?php if($image['status'] == 1) echo 'selected="selected"'; ?>>Show</option>
									<option value="0" <?php if($image['status'] == 0) echo 'selected="selected"'; ?>>Don't Show</option>
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
        
<?php
require_once( ROOT . '/views/layots/admin_footer.php' );
?>