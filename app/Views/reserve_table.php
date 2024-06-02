<!DOCTYPE html>
<html lang="en">

<head>
	<title> Table Booking System</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content=""/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!-- <script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script> -->
	<!-- Meta tags -->
    <link rel="stylesheet" href="../css/style.css">
	<!--stylesheets-->
	
	<!--//style sheet end here-->
	<!-- Calendar -->
	<link rel="stylesheet" href="../css/jquery-ui.css">
	<!-- //Calendar -->
	<link  rel="stylesheet" href="../css/wickedpicker.css">
	<!-- Time-script-CSS -->

	<!-- <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet"> -->
</head>

<body>
	<h1 class="header-w3ls">
		Table Booking Form</h1>
	<div class="appointment-w3">
		<form  action="<?= site_url('/submit-tbl') ?>" method="post">
			<div class="">
			
				<div class="">
					<div class="form-left-w3l">

						<input type="text" class="top-up" name="name" placeholder="Name" required="">
					</div>
					<div class="form-left-w3l">

						<input type="email" name="email" placeholder="email" required="">
					</div>
					<div class="form-right-w3ls ">

						<input class="buttom" type="text" name="phonenumber" placeholder="Phone Number" required="">
						<div class="clearfix"></div>
					</div>
				</div>
				
			</div>
			<div class="information">
				
				
				<div class="main">

					
					<div class="form-left-w3l">
						<input id="datepicker" name="bookingdate" type="text" placeholder="Booking Date &" required="">
						<input type="text" id="timepicker" name="bookingtime" class="timepicker form-control hasWickedpicker" placeholder="Time" required=""
						 onkeypress="return false;">
						<div class="clear"></div>
					</div>
				</div>
				
				<div class="main">

					<div class="form-left-w3l">
						<select class="form-control" name="noadults" required>
					<option value="">Number of Adults</option>
						<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					</select>
					</div>
					<div class="form-right-w3ls">
						<select class="form-control" name="nochildrens" required>
					<option value="">Number of Children</option>
					<option value="1">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					</select>
					</div>
					<!-- Hidden input for Booking Status, assuming 'Reserved' as a default status -->
<!-- <input type="hidden" name="bookingStatus" value="Reserved"> -->

				</div>
				
			</div>
			
			
			<div >
			<!-- class="btnn" -->
				<!-- <input type="submit" value="Reserve a Table" name="submit"> -->
				<button type="submit" class="btn btn-success btn-block m-2" onclick="disp()"> Reserverd Table</button>
			</div>
					<div class="copy">
					<p>Check Booking <a href="/status" >Status</a></p><br>
					<p>Goes To <a href="/" >Home Page</a></p>
		</div>
		<!-- <div class="copy">
		<p>Admin Panel<a href="admin/" target="_blank"> Login here</a></p>
		</div> -->
	</form>
	</div>
	



	<!-- js -->
	<script type='text/javascript' src='../js/jquery-2.2.3.min.js'></script>
	<!-- //js -->
	<!-- Calendar -->
	<script src="../js//jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
		
	</script>
	<!-- //Calendar -->
	<!-- Time -->
	<script type="text/javascript" src="../js//wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker,.timepicker1').wickedpicker({ twentyFour: false });
	</script>
	<!-- //Time -->

</body>

</html>