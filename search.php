<?php
	require_once("config/config.php");
	if(isset($_GET['q'])){
		$conn = mysqli_connect($host,$user,$password);
		mysqli_select_db($conn, $database);
		
		$param = $_GET['q']; 
		$query = mysqli_query($conn, "SELECT nip, nama FROM tb_dosen WHERE nama LIKE '%'.$param.'%'");
		// return $query;
		if(!$query or mysqli_num_rows($query) > 0){
			$data = array();
			while($row = mysqli_fetch_object($query)){
				$data[] = $row;
			}
			die(json_encode($data)); 
		}
	}
?>
