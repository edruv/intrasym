<?php
	function conexion($data){
		try {
			$conexion = new PDO('mysql:host='.$data['ht'].';dbname='.$data['db'],$data['user'],$data['pass'],array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
			return $conexion;
		} catch (PDOException $e) {
			echo "Error: ". $e->getMessage();
		}
	}
?>
