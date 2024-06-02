<!-- File: app/Views/booking_details.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Restaurant Table Booking System | Booking Details</title>
  <!-- Include necessary CSS and JS files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include(APPPATH . 'Views/navbar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Booking Details</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card border">
              <div class="card-header">
                <h3 class="card-title">Booking Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
    <table id="example1" class="table table-bordered ">
        <tbody>
            <?php if($tblbookings): ?>
                <tr>
                    <th>Booking Number</th>
                    <td colspan="3"><?php echo $tblbookings['bookingNo']; ?></td>
                </tr>
                <tr>
                  <th> Name</th>
                    <td><?php echo $tblbookings['fullName']?></td>
                    <th>Email Id</th>
                   <td> <?php echo $tblbookings['emailId']?></td>
                  </tr>
                  <tr>
                  <th> Booking Date and Time</th>
                    <td><?php echo $tblbookings['bookingDate']?>/<?php echo $tblbookings['bookingTime']?></td>
                    <th>Phone Number</th>
                   <td> <?php echo $tblbookings['phoneNumber']?></td>
                  </tr>
                  <tr>
                  <th> Number of Adult</th>
                    <td><?php echo $tblbookings['noAdults']?></td>
                    <th>Number of Children</th>
                   <td> <?php echo $tblbookings['noChildrens']?></td>
                  
                  </tr>
                  <th>Booking status</th>
                   <td> <?php echo $tblbookings['boookingStatus']?></td>
                <!-- Add other rows for booking details -->
            <?php endif; ?>
        </tbody>
    </table>
</div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
<!-- Include necessary JS files -->
</body>
</html>
