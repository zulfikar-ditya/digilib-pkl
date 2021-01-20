<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>REGISTER - DIGILIB</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="js/redactor/css/redactor.css" type="text/css" />
		<link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
		
		<style>
			body {
				/* background: linear-gradient(45deg, #ff005e, #fbff00); */
				background: white;
			}

			.row {
				display: flex;
				flex-wrap: wrap;
				justify-content: center;
				align-items: center;
				height: 100vh;
			}

			.col-md-5 {
				align-self: center;
				background: white;
				box-shadow: 0 10px 10px #6f42c1;
				padding: 20px;
				border: 1px #6f42c1;
			}

			.text-center {
				text-align: center;
			}

			.title-register {
				font-weight: 50;
				letter-spacing: 5px;
				margin-bottom: 20px;
			}
		</style>
		<script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
	</head>

	<body>
		<?php
		// return $_GET;
			if ($_GET['mode'] == "register") {
		?>
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h2 class="text-center title-register">REGISTER</h2>
					<form action="checkreg.php" method="post">
						<input name="register1" type="hidden">
						<div id="register">
							<div class="content">
								<div class="control-group">
									<label class="control-label" for="nrp"></label>
									<div class="controls">
											<div class="input-prepend">
												<span class="add-on">NRP</span>
												<input class="span3" type="text" name="nrp" autofocus>
											</div>
									</div>
								</div>
							
								<div class="control-group">
									<label class="control-label" for="username"></label>
									<div class="controls">
											<div class="input-prepend">
												<span class="add-on"><i class="icon-user"></i></span>
												<input class="span3" type="text" placeholder="Username" name="username">
											</div>
									</div>
								</div>
				
								<div class="control-group">
									<label class="control-label" for="password"></label>
									<div class="controls">
											<div class="input-prepend">
												<span class="add-on"><i class="icon-lock"></i></span>
												<input class="span3" type="password" placeholder="Password" name="password">
											</div>
									</div>
								</div>
				
								<div class="control-group">
									<label class="control-label" for="password2"></label>
									<div class="controls">
											<div class="input-prepend">
												<span class="add-on"><i class="icon-lock"></i></span>
												<input class="span3" type="password" placeholder="Ulangi Password" name="password2">
											</div>
									</div>
								</div>
				
								<label>
									Tipe Account: 
									<select name="type" class="span2" disabled id="type">
										<option value=3>Mahasiswa</option>
									</select>
								</label>
				
								<div class="control-group">
									<label class="control-label" for="email"></label>
									<div class="controls">
										<div class="input-prepend">
											<span class="add-on"><i class="icon-envelope"></i></span>
											<input class="span3" type="text" placeholder="Email" name="email">
										</div>
									</div>
								</div>
							</div>
						</div>   
						<div class="footer control-group">
							<div class="controls">
								<a href="javascript:history.back()" class="btn btn-danger btn-medium">
									<i class="icon-arrow-left icon-white"></i>
									Back
								</a>
								<button type="submit" class="btn btn-success btn-medium pull-right">
									Next
									<i class="icon-arrow-right icon-white"></i>
								</button>
							</div>
						</div>           
					</form>
			
					<?php	
						} else if ($_GET['mode'] == "register2") {
					?>
						
					<form action="checkreg.php" method="post">
							<input name="register2" type="hidden">
							<div id="register">
								<div class="content">
									<div class="well">
												Masukkan kode verifikasi yang telah dikirim ke alamat Email anda.
									</div>
									<div class="control-group">
										<label class="control-label" for="username"></label>
										<div class="controls">
											<div class="input-prepend">
												<span class="add-on"><i class="icon-lock"></i></span>
												<input class="span3" type="text" placeholder="Kode verifikasi" name="username" autofocus>
											</div>
										</div>
									</div>          
								</div>
							</div>
							<div class="footer control-group">
								<div class="controls">
									<a href="javascript:history.back()" class="btn btn-danger btn-medium">
										<i class="icon-arrow-left icon-white"></i>
										Back
									</a>
									<button type="submit" class="btn btn-success btn-medium pull-right">
										Next
										<i class="icon-arrow-right icon-white"></i>
									</button>
								</div>
							</div>  
					</form>
			
					<?php	
						} else if ($_GET['mode'] == "register3") {
					?>
					<form action="checkreg.php" method="post">
						<input name="register3" type="hidden">
						<div id="register">
							<div class="header">
								<div id="logo">
									<img src="img/logoTA.png" width="70px" class="img-float"> 
									<h3 class="title">Register User Thesis Assistant</h3><br>
								</div>
							</div>
							
							<div class="content">
								<div class="control-group">
									<label class="control-label" for="name"></label>
									<div class="controls">
										<input class="span3" type="text" placeholder="Nama lengkap" name="name" autofocus>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label" for="address"></label>
									<div class="controls">
										<textarea name="address" rows="3" class="span3" placeholder="Alamat lengkap"></textarea>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label" for="phone"></label>
									<div class="controls">
										<input class="span3" type="text" placeholder="No. telepon" name="phone">
									</div>
								</div>          
							</div>
						</div>
						<div class="footer control-group">
							<div class="controls">
								<a href="javascript:history.back()" class="btn btn-danger btn-medium">
									<i class="icon-arrow-left icon-white"></i>
									Back
								</a>
								<button type="submit" class="btn btn-success btn-medium pull-right">
									Next
									<i class="icon-arrow-right icon-white"></i>
								</button>
							</div>
						</div> 
					</form>
			
					<?php
						}
					?>
				</div>
			</div>
		</div>
	</body>

</html>
