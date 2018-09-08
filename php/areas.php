<?php
	require_once 'config.php';
	require_once 'functions.php';

	if (isset($_GET['depto'])) {
		// $data = dbhome();
		$data = dbjob();

		$con = conexion($data);

		$stmt = $con->prepare('SELECT * from departamento');
		$stmt->execute();
		$deptos = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($deptos);
	}

	if (isset($_GET['area'])) {
		$id = $_GET['area'];

		// $data = dbhome();
		$data = dbjob();

		$con = conexion($data);

		$stmt = $con->prepare('SELECT * from area where idDepto=:id');
		$stmt->execute(array(':id' => $id));

		$areas = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($areas);
	}

	if (isset($_GET['subarea'])) {
		$id = $_GET['subarea'];

		// $data = dbhome();
		$data = dbjob();

		$con = conexion($data);
		$stmt = $con->prepare('SELECT * from subarea where idArea=:id');
		$stmt->execute(array(':id' => $id));
		$subareas = $stmt->fetchAll(PDO::FETCH_ASSOC);

		echo json_encode($subareas);

	}

?>
