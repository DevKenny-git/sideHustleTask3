<?php

	$host= 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'todo';

	try {
		$con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $con->query('SELECT * FROM task');
		echo "<table border='1'><tr><th>Activity</th><th>Status</th><tr>";

		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			echo "<tr><td>" .$row['activity'] . "</td><td>" . $row['status'] . "</td></tr>";
		}
		echo "</table>";
			
	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}

		