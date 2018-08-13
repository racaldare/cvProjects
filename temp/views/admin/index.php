<?php
require_once( ROOT . '/views/layots/admin_header.php' );
?>
<br>
<br>
<br>
<br>
<br>
		
<?php if(!	isset($_SESSION['lvl'])): ?>		
        <div class="section">
	    	<div class="container">
				<div class="row">
				<div class="col-sm-12">
					  <h2>Log In</h2>
					  <form class="form-horizontal" action="/admin/login" method="post">
						<div class="form-group">
						  <label class="control-label col-sm-2" for="login">Login:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="login" placeholder="Enter login" name="login" required>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="pwd">Password:</label>
						  <div class="col-sm-10">          
							<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
						  </div>
						</div>
						<div class="form-group">        
						  <div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Submit</button>
						  </div>
						</div>
					  </form>				
					</div>
				</div>
			</div>
		</div>		
 <?php else:  ?>
        <div class="section">
	    	<div class="container">
				<div class="row">
				<div class="col-sm-12">
					  <h2>Hello, <?php echo $_SESSION['login']; ?></h2>			
					</div>
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
<?php endif; ?>
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