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
						<?php
							if(isset($_POST['order'])&&isset($_POST['date'])&&isset($_POST['bill'])&&isset($_POST['firm'])&&isset($_POST['description'])&&isset($_POST['quantity'])&&isset($_POST['rate1'])&&isset($_POST['rate2'])&&isset($_POST['hod'])&&isset($_POST['remarks']))
							{
								$order=$_POST['order'];
								$date=$_POST['date'];
								$bill=$_POST['bill'];
								$firm=$_POST['firm'];
								$description=$_POST['description'];
								$quantity=$_POST['quantity'];
								$rate1=$_POST['rate1'];
								$rate2=$_POST['rate2'];
								$hod=$_POST['hod'];
								$remarks=$_POST['remarks'];
								if(!empty($order)&&!empty($date)&&!empty($bill)&&!empty($firm)&&!empty($description)&&!empty($quantity)&&!empty($rate1)&&!empty($rate2)&&!empty($hod)&&!empty($remarks))
								{
									$rate=$rate1+(0.01*$rate2);
									$query="INSERT INTO `purchase`.`items` (`order no and date`,`date of receipt`,`build no and date`,`name of firm`,`description`,`quantity`,`rate`,`initial of hod`,`remarks`) VALUES ('$order','$date','$bill','$firm','$description','$quantity','$rate','$hod','$remarks')";
									if($query_run=mysqli_query($con,$query))
									{
										echo 'Data Entry Successful';
										}
								
									
									else
											echo 'querry failed';
									
								}
								else
								{
									echo 'please enter values:';
									//header('Location:index.php');
								}
							}
							
						?>
						<form id="add_data" action='add.php' method='POST'>
							<div class='form-group'>
								Order no and date: <input type="text" class="form-control" name="order" class="form-control" > <br>
								Date: <input type="date" class="form-control" name="date"> <br>
								Bill no and date: <input type="text" class="form-control" name="bill" class="form-control"> <br>
								Name of firm: <input type="text" class="form-control" name="firm" class="form-control"> <br>
								Description: <textarea name="description" class="form-control" col='4' row='3' class="form-control"></textarea> <br>
								Quantity: <input type="number" class="form-control" name="quantity" class="form-control"> <br>
								Rate: <strong>Rs</strong> <input type="number"  name="rate1" class="form-inline" style="width:200px;height:35px;">.<input style="width:200px;height:35px;" type="number" name="rate2" class="form-inline"><br><br>
								Initial of HOD: <input type="text" class="form-control" name="hod" class="form-control"> <br>
								Remarks: <input type="text" class="form-control" name="remarks" class="form-control"> <br>
							</div>
							<button type="submit" id="button">Submit</button>
						</form>
					</div>
			</div>
			
			<div class="row" id="footer">
				<div class="col-*-*"></div>
			</div>
			
			
		</div>
	</body>
	
	
</html>