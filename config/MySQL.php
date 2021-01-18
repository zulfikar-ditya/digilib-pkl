<?php
include("Database.php");
class MySQL extends Database {
	private $db;
	private $host;
	private $user;
	private $password;
	private $database;
	private $query;
	private $result;
	private $row;
	private $num_rows;
	
	function __construct() {
		$this->host = "localhost";
		$this->user = "root";
		$this->password = "";
		$this->database = "digilib";
	}
	
	function connect() {
		$this->db = mysqli_connect($this->host, $this->user, $this->password);
		mysqli_select_db($this->db, $this->database);
		return $this->db;
	}
	
	function execute($query) {
		$this->query = $query;
		$this->result = mysqli_query($this->db, $this->query);
	}
	
	function get_array() {
		if($this->row = mysqli_fetch_array($this->result, mysql_ASSOC))
			return $this->row;
		else
			return false;
	}
	
	function get_row() {
		if($this->row = mysqli_fetch_array($this->result, mysql_NUM))
			return $this->row;
		else
			return false;
	}
	
	function get_object() {
		if($this->row = mysqli_fetch_object($this->result, mysql_ASSOC))	
			return $this->row;
		else
			return false;
	}
	
	function get_dataset() {
		$dataset = array();
		$i = 0;
		while($r = mysqli_fetch_row($this->result)) {
			$field = 0;
			for($field = 0; $field < mysqli_num_fields($this->result); $field++) {
				$dataset[$i][$field] = $r[$field];
			}
			$i++;
		}
		return $dataset;
	}
	
	function get_num_rows() {
		$this->num_rows = mysqli_num_rows($this->result);
		return $this->num_rows;
	}
	
	function close_connection() {
		mysqli_close($this->db);	
	}
}
?>