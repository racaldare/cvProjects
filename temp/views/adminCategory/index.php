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
							Categories
							<ul class="pager" style="margin: 0; float:right;">
								<li style="float: right;">
									<a style="padding: 6px; font-size: 18px; font-weight: normal;" href="/admin/category/add">Add category</a>
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
					<table>
					  <tr>
						<th>ID</th>
						<th>Name</th>
						<th>Status</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
						<?php if(isset($categoriesList)) 
							foreach ($categoriesList as $category): ?>
							  <tr>
								<td><?php echo $category['id']; ?></td>
								<td><?php echo $category['name'] ?></a></td>
								<td><?php echo $category['status']; ?></td>
								<td><a href="/admin/category/edit/<?php echo $category['id']; ?>"><i class="fa fa-edit" style="font-size:18px"></i></a></td>
								<td><a href="/admin/category/delete/<?php echo $category['id']; ?>"><i class="fa fa-minus" style="font-size:18px"></i></a></td>
							  </tr>
						  <?php endforeach; ?>
					</table>
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
<br>
<br>
<br>
<br>
<br>
<?php
require_once( ROOT . '/views/layots/admin_footer.php' );
?>