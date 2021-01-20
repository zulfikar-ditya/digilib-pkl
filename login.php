<?php
	session_start();
	include("config/MySQL.php");
	include("config/date.php");
	include("config/functions.php");
	if(isset($_GET['p'])) {
		$p = $_GET['p'];
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="icon" type="image/png" href="img/logo.png">
    <title>
        LOGIN - DIGILIB
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="js/redactor/css/redactor.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />
    
    <style>
      
        body {
            /* background: linear-gradient(45deg, #ff005e, #fbff00); */
            background: white;
            height: 100vh;
        }
        .container-fluid .login {
          background: rgba(255, 255, 255, .2);
        }
    </style>
    <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">

</head>

<body>
  <!--MAIN CONTENT-->
  <div class="container-fluid">
  <?php if(empty($_GET['p'])) { ?>
    <div id="login">
    <div class="row" style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center; height: 100vh;">
      <div class="col-md-5" style="background: white; padding: 20px; box-shadow: 0 5px 10px #0dcaf0; border: 1px #0dcaf0;">
        <h2 style="color: black; text-align: center; font-weight: 50; letter-spacing: 5px;">Login</h2>
       <form action="checklogin.php" method="post" style="margin-top: 20px;">
       <div class="form-group">
        <label>
            <span>Username <span style="color: #dc3545;">*</span></span>
        </label>
            <input class="span4" type="text" name="username" class="form-control" required autofocus>
       </div>
       <div class="form-group">
        <label>
          <span>Password <span style="color: #dc3545;">*</span></span>        
        </label>
          <input class="span4" type="password"name="password" class="form-control" required>
       </div>
       <div class="form-group">
        <label>
          <span>Login As <span style="color: #dc3545;">*</span></span>        
        </label>
        <select name="type" class="span4 form-control" required>
          <option value="" selected>-----------</option>
          <option value="1">Petugas</option>
          <option value="2">Dosen</option>
          <option value="3">Mahasiswa</option>
        </select>
       </div>
        <div class="" style="display: flex; justify-content: center;">
          <button type="submit" class="btn" style="background: #0dcaf0; color: white; border: none; letter-spacing: 2px;">
              Login <i class="fas fa-sign-in-alt"></i>
          </button>
        </div>
        <a href="<?=base_url()?>" class="btn btn-success">
            <i class="icon-remove icon-white"></i>
            Close
        </a>
       </form>
      </div>
    </div>
	</div>
  <?php }
  
  else { 
	if(!isset($_SESSION['user'])){
		redirect("admin.php","Anda belum login");
	}
  ?>
	<!--NAVBAR-->
    <div id="admin" class="navbar navbar-fixed-top">
      	<div class="navbar-inner">
	        <div class="container">
	            <ul class="nav">
                  <li>
                    <a class="disabled" href="#"><?=$today;?></a>
                  </li>
                </ul>
            </div><!--/.container -->
      	</div><!--/.nav-inner -->
    </div>
    
	<div id="admin-main">
    	<div class="row-fluid">
			<ul class="nav nav-tabs tabs-left">
            
			  <li class="dropdown <?php if($p=="post") echo "active" ?>">
				<a class="dropdown-toggle" data-toggle="dropdown" href="?p=post">
					Berita
					<b class="caret"></b>
				  </a>
				<ul class="dropdown-menu">
				  <li><a href="?p=post">Semua</a></li>
				  <li class="divider"></li>
				<?php
					$db = new MySQL();
					$db->connect();
					$db->execute("SELECT * FROM category");
					$data = $db->get_dataset();
					for($i=0; $i<count($data); $i++) {
				?>
				  
					<li><a href="?p=post&cat=<?=$data[$i][0]?>"><?=$data[$i][1]?></a></li>
                    
				<?php
					}
				?>
				</ul>
			  </li>
              <li <?php if($p=="photo") echo "class=active" ?>><a href="?p=photo">Galeri Foto</a></li>
			  <li <?php if($p=="category") echo "class=active" ?>><a href="?p=category">Kategori</a></li>
              <li <?php if($p=="comment") echo "class=active" ?>><a href="?p=comment">Komentar</a></li>
              <li <?php if($p=="admin-list") echo "class=active" ?>><a href="?p=admin-list">Admin</a></li>
              <li><a href="logout.php">Logout</a></li>
			</ul>
            <div style="padding: 15px">
            	<?php
					if(isset($p)){
						include("admin/".$_GET['p'].".php");
					}
				?> 
            </div>
        </div>
	</div>

	<!--FOOTER-->
    <div id="footer">
        <p>&copy; Thesis Assistant | PENS | 2012</p>
    </div>
    <!--End of FOOTER--> 

  <?php } ?>
  </div><!--./CONTAINER-->
     
 
    
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/redactor/redactor.min.js"></script>	
    
    
    <!--Redactor WYSIWYG-->
    <script type="text/javascript">
    $(document).ready(
        function()
        {
            $('.redactor').redactor({ 
                imageUpload: 'js/redactor/image_upload.php',
                fileUpload: 'js/redactor/redactor_upload.php'
            });
            $("[rel=tooltip]").tooltip();
        }
    );
    </script>
</body>
</html>