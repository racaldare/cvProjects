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
								<label><b>Block title</b></label>
								<br>
								<input type="text" style="width: 800px;" name="title" placeholder="title" required>								
								<br>
								<br>
								<label><b>Block short title</b></label>
								<br>
								<input type="text" style="width: 800px;" name="short_title" placeholder="short title" required>								
								<br>
								<br>
								<label><b>Description</b></label>
								<br>
								<textarea name="description" style="width: 800px;" placeholder="description"></textarea>							
								<br>
								<br>
								<label><b>Block short description</b></label>
								<br>
								<input type="text" style="width: 800px;" name="short_description" placeholder="short description" required>								
								<br>
								<br>
								<label><b>Recent</b></label>
								<select name="recent" >
									<option value="1" >Yes</option>
									<option value="0" >No</option>
								</select>
								<br>
								<br>
								<label><b>Category</b></label>
								<select name="category" >
								<?php foreach( $categories as $category ): ?>
									<option value=" <?php echo $category['id'] ?> "><?php echo $category['name']?></option>
								<?php endforeach; ?>
								</select>
								<br>
								<br>
								<label><b>Status</b></label>
								<select name="status" >
									<option value="1" >Show</option>
									<option value="0" >Don't Show</option>
								</select>
								<br>
								<br>
								<label><b>Images</b></label>
								<input type="file" name="image">	
								<br>
								<br>
						</div>
						<ul class="pager" style="margin: 0;">
							<li style="float: left; margin: 0 10px;">
								<button type="submit" name="save" style="color: #fff; background-color: #428bca;">Save</button><div class="clr"></div>
							</li>
							<li style="float: left; margin: 0 5%;">
								<a href="/admin/galery/">Cancel</button>
							</li>
						</ul>
					</form>
				</div>
			</div>
		</div>		
        
<?php
require_once( ROOT . '/views/layots/admin_footer.php' );
?>