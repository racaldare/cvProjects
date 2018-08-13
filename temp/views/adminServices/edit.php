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
								<h2>Edit service №<?php echo $id ?></h2>
								<br>
								<label><b>Service title</b></label>
								<br>
								<input type="text" name="title" value="<?php echo $service['title']; ?>" required>								
								<br>
								<br>
								<label><b>Description</b></label>
								<br>
								<textarea name="description" value=""><?php echo $service['description']; ?></textarea>							
								<br>
								<br>
								<label><b>Service short description</b></label>
								<br>
								<input type="text" name="short_description" value="<?php echo $service['short_description']; ?>" required>								
								<br>
								<br>
								<label><b>Image</b></label>
								<select name="image" >
								<?php foreach($iconsImageList as $icon): ?>
									<option value="<?php echo $icon['name'] ?>" <?php if($service['img'] == $icon['name']) echo 'selected="selected"'; ?>><?php echo $icon['name'] ?></option>
								<?php endforeach; ?>
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
<?php
require_once( ROOT . '/views/layots/admin_footer.php' );
?>