<?php
class Model
{
	private $host 	= "localhost";
	private $user	= "root";
	private $pass 	= "";
	private $db	= "simplecrud";
	private $mysqli;
	
	protected function execute($q)
	{
		$this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
		return $this->mysqli->query($q);
		$this->mysqli->close();
	}
}
?>
