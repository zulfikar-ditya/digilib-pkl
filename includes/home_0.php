  <div class="row-fluid">
	<div class="span12 well" id="main-content">
	  <div class="row-fluid">
		<div class="span12">
		
		  <?php 
			if(!isset($page)) {
		  ?>
			<div class="" style="text-align: center;">
				<h2>Selamat Datang</h2>
				<p>Batas peminjaman buku adalah maks 1 x 2 buku / hari</p>
				<p><a href="login.php" class="btn btn-success" style="text-decoration: none;">Login <i class="fas fa-sign-in-alt"></i></a></p>
			</div>
		  <?php
			} else
				include("includes/p_". $page .".php"); 
		  ?>
		  
		</div><!--/span-->
	  </div><!--/row-->
	</div><!--/span-->
  </div><!--/row-->