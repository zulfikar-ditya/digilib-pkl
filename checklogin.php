<?php	
	session_start();				
	include("config/MySQL.php");
	include("config/functions.php");
				
	if(isset($_POST['username']) && isset($_POST['password'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$type=$_POST['type'];
		
		$data=new MySQL();
		$data->connect();
		if($type == 1) {
			$data->execute("SELECT kodePetugas, nama
				FROM tb_petugas 
				WHERE (
					username = '" . mysqli_real_escape_string($data->connect(), $username) . "'
					) 
				AND (
					password = '" . md5($password) . "'
					)
			");
		}
		else if($type == 2) {
			$data->execute("SELECT kodeDosen, nama FROM tb_dosen WHERE (username = '" . mysqli_real_escape_string($data->connect(), $username) . "') and (password = '" . md5($password) . "')");
		}
		else if($type == 3) {
			$data->execute("SELECT kodeMhs, nama FROM tb_mahasiswa WHERE (username = '" . mysqli_real_escape_string($data->connect(), $username) . "') and (password = '" . md5($password) . "')");
		}
		$user = $data->get_dataset();
			
		if(count($user)>0) {
			$_SESSION["type"]=$type;
			$_SESSION["idUser"]=$user[0][0];
			$_SESSION["name"]=$user[0][1];
			redirect("index.php","");
		}else{
			redirect("index.php","Username atau Password salah!");
		}
	}
?>