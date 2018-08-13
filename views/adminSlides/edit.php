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
								<h2>Edit slide №<?php echo $id ?></h2>
								<br>
								<label><b>Slide title</b></label>
								<br>
								<input type="text" style="width: 800px;" name="title" value="<?php echo $slide['title']; ?>" required>								
								<br>
								<br>
								<label><b>Description</b></label>
								<br>
								<textarea name="description" style="width: 800px;" value=""><?php echo $slide['description']; ?></textarea>							
								<br>
								<br>
								<img style=" max-width: 700px; max-height: 500px; margin-bottom: 1%;" src="/template/img/slides/<?php echo $slide['id'] ?>.jpg" alt="Client Name">					
								<input type="file" name="image" value="" required>
								<br>
								<br>
								<label><b>Slide title</b></label>
								<select name="status" >
									<option value="1" <?php if($slide['status'] == 1) echo 'selected="selected"'; ?>>Show</option>
									<option value="0" <?php if($slide['status'] == 0) echo 'selected="selected"'; ?>>Don't Show</option>
								</select>
						</div>
						<ul class="pager" style="margin: 0;">
							<li style="float: left; margin: 0 10px;">
								<button type="submit" name="save" style="color: #fff; background-color: #428bca;">Save</button><div class="clr"></div>
							</li>
							<li style="float: left; margin: 0 5%;">
								<a href="/admin/slides/">Cancel</button>
							</li>
						</ul>
					</form>
				</div>
			</div>
		</div>		
        
<?php
require_once( ROOT . '/views/layots/admin_footer.php' );
?>