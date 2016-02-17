<?php
	require 'core.php';
	require 'connect.php';
	require 'session.php';
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title>NIT Silchar purchase section</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<div class="container">
			<div class="row" id="top">
				<div class="col-md-2" style="background:#262626;height:98%"><img class="img-thumbnail" src="logo.png"/> </div>

				<div class="col-md-8" style="background:#262626 ;height:98%">
					<div style=";color:white;text-align:center;font-family:Arial;">
						<h3>NATIONAL INSTITUTE OF TECHNOLOGY , SILCHAR<h2>
						<h4>PURCHASE SECTION</h1>
					</div>
				</div>
					
				<div class="col-md-2" style="background:#262626;height:98%">SOMETHING ELSE</div>
				
			</div>
			
			<div class="row" id="nav">
				<div class="col-*-*"></div>
			</div>
			
			<br>

			<div class="row" id="edit">
					<div class="col-md-3" style="background:white;height:98%">
						<div class="list-group">
							<a href="add.php" class="list-group-item">Add</a>
							<a href="$" class="list-group-item">Select</a>
							<a href="$" class="list-group-item">Delete</a>
							<a href="$" class="list-group-item">Add user</a>
							<a href="logout.php" class="list-group-item">Logout</a>
						</div>
					</div>
					<div class="col-md-9" style="background:white ;height:98%">
						<table class="table Table-hover">
							<thead>
								<tr>
									<th>Sl No</th>
									<th>Order no and Date</th>
									<th>Date of receipt</th>
									<th>Bill no and Date</th>
									<th>Name of Firm</th>
									<th>Description</th>
									<th>Quantity</th>
									<th>Rate</th>
									<th>Initials of HOD</th>
									<th>Remarks</th>
								</tr>
							</thead>
							<?php
								if ($con->connect_error) 
    								die("Connection failed: " . $conn->connect_error);
								$sql = "SELECT * FROM `items`";
								$result = $con->query($sql);
								if ($result->num_rows > 0) 
								{
    								while($row = $result->fetch_assoc()) 
    								{
        							  echo "<tr>
        							  			<td>".$row["sl no"]."</td>
        							  			<td>".$row["order no and date"]."</td>
        							  			<td>".$row["date of receipt"]."</td>
        							  			<td>".$row["build no and date"]."</td> 
        							  			<td>".$row["name of firm"]."</td>
        							  			<td>".$row["description"]."</td>
        							  			<td>".$row["quantity"]."</td>
        							  			<td>".$row["rate"]."</td>
        							  			<td>".$row["initial of hod"]."</td>
        							  			<td>".$row["remarks"]."</td>
        							  		</tr>";
    								}
								}
								$con->close();
							?>
						</table>
					</div>
			</div>
			
			<div class="row" id="footer">
				<div class="col-*-*"></div>
			</div>
			
			
		</div>
	</body>
	
	
</html>