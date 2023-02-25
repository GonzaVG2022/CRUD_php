<?php
 
class Database {
	private $conexion;
	public $error;

	function __construct($servidor, $usuario, $password, $base) {
		if (!$this->__connect ($servidor, $usuario, $password, $base)) {
			$this->error = $this->conexion->connect_error;
		}
	}

	private function __connect ($servidor, $usuario, $password, $base) {
		$this->conexion = new mysqli ($servidor, $usuario, $password, $base);
	}

	public function runQuery ($query) {
		$types = strtoupper(substr($query, 0,6));
		switch ($types) {
			case 'INSERT':
				$result = $this->conexion->query($query);
				if (!$result) {
					$this->error = $this->conexion->error;
					return false;
				} else {
					return $this->conexion->insert_id;
				}
				break;
			case 'SELECT':
				$result = $this->conexion->query($query);
				if (!$result) {
					$this->error = $this->conexion->error;
					return false;
				} else {
					while($fila = $result->fetch_assoc()){
						$array_result[]=$fila;
					}
					return $array_result;
				}
				break;	
			case 'UPDATE':
			case 'DELETE':
				$result = $this->conexion->query($query);
				if (!$result) {
					$this->error = $this->conexion->error;
					return false;
				} else {
					return $this->conexion->affected_rows;
				}
				break;		
			default:
				$this->error = 'Invalid Query';
				break;
		}
	}
}
?>