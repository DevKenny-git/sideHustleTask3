<?php

	$host= 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'todo';

	try {
		$con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $con->query('SELECT * FROM task');
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			echo $row['activity'] .  ' '. $row['status'] . '<br>';
		}
			
	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}

		