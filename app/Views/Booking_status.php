
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Restaurent Table Booking System</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content=""
	/>
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!-- Meta tags -->
	<!--stylesheets-->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->
	<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<!-- //Calendar -->
	<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<!-- Time-script-CSS -->

	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
</head>

<body>
	<h1 class="header-w3ls">
		RTBS | Check Status</h1>
	<div class="appointment-w3">
  <form  action="<?= site_url('/search-results') ?>" method="post">
			<div class="personal">
			
				<div class="main">
					<div class="form-left-w3l">

						<input type="text" class="top-up" name="searchdata" placeholder="Search by booking no or contact no" required="">
					</div>
		
				
			</div>

			
			
			<!-- <div class="btnn">
				<input type="submit" value="Search" name="submit">
			</div> -->
            <div class="btnn" >
			<!-- class="btnn" -->
				<!-- <input type="submit" value="Reserve a Table" name="submit"> -->
				<button type="submit" class="btn btn-success btn-block m-2 " >Search</button>
			</div>
		<!-- <div class="copy">
		<p>Admin Panel<a href="admin/" target="_blank"> Login here</a></p>
	</div> -->
		</form>
	</div>



	<!-- js -->
	<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
	<!-- //js -->
	<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<!-- Time -->
	<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker,.timepicker1').wickedpicker({ twentyFour: false });
	</script>
	<!-- //Time -->

</body>

</html>