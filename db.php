<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'todo';

try {
	$con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

	// set the PDO error mode to exception
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully";

	$sql = "INSERT INTO task(activity, status) VALUES (:activity, :status)";

	$stmt = $con->prepare($sql);

	$stmt->execute(['activity'=> $activity, 'status' => $status]);

} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}