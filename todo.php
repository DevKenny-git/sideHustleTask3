<!doctype html>
	<html>
	<head>
		<title>Todo List</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>
	<body>
		<div class="container">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
				<div class="input">
					<label for="task">Activity:</label>
					<input type="text" name="activity" placeholder="Activity">
				</div>
				<div class="input">
					<label for="status">Status:</label>
					<input type="text" name="status" placeholder="Activity's Status">
				</div>
				<div class="button">
					<button type="submit" name="view">View Activity</button>
					<button type="submit" name="add">Add Activity</button>
					
				</div>
			</form>	
		</div>

		<?php
		    if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['view'])) {
				require_once("viewdb.php");
			}

			if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['add'])) {
				$activity = $_POST['activity'];
				$status = $_POST['status'];



				require_once('db.php'); 
			}
		?>


		
	</body>
	</html>


