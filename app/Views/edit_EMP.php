


<!DOCTYPE html>
<html>
<head>
  <title>Edit Employee</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    
  </style>
 <?php include(APPPATH . 'Views/cdn.php'); ?>
</head>
<body>
  
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->

  <?php include 'nav.php'; ?>
  <!-- Main Sidebar Container -->

<?php include 'sidebar.php'; ?>
    <!-- Sidebar -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="card container">
  <h5 class="card-header bg-primary text-white">Edit Employee Details</h5>
  <div class="card-body">
  <div class="" >
  <div class="container mt-5">
    <form method="post" id="update_user" name="update_user" 
    action="<?= site_url('/updateemp') ?>">
      <input type="hidden" name="emp_id" id="emp_id" value="<?php echo $emp_obj['emp_id']; ?>">
      <div class="form-group">
        <label> Employee Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $emp_obj['name']; ?>">
      </div>
      <div class="form-group">
        <label>Employee address</label>
        <input type="text" name="address" class="form-control" value="<?php echo $emp_obj['address']; ?>">
      </div>
      <div class="form-group">
        <label>Employee Email Id</label>
        <input type="text" name="email" class="form-control" value="<?php echo $emp_obj['email']; ?>">
      </div>
      <div class="form-group">
        <label>phone number</label>
        <input type="text" name="phone_no" class="form-control" value="<?php echo $emp_obj['phone_no']; ?>">
      </div>
      <label  class="badge text-dark text-wrap" style=" font-size:15px">gender</label  class="badge bg-light text-wrap" style=" font-size:15px">
      <div class="form-check">
    <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
    <label class="form-check-label" for="option1">Male</label>
</div>

<div class="form-check">
    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
    <label class="form-check-label" for="option2">Female</label>
</div>
        <div class="m-4"><select class="form-select" aria-label="Default select example" name="emp_type">
  <option >Edit Employee Type</option>
  <option value="Manager">Manager</option>
  <option value="Chef">Chef</option>
  <option value="Waiter">Waiter</option>
</select></div>
      </div>
      <div class="form-group text-center">
        <button type="submit" class="btn btn-info ">Save Data</button>
      </div>
    </form>
  </div>
 </div>
  </div>

  </div>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          name: {
            required: true,
          },
          
        },
        messages: {
          name: {
            required: "Name is required.",
          },
          
        },
      })
    }
  </script>
  <script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
</body>
</html>


