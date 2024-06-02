<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Food</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->

  <?php include 'nav.php'; ?>
  <!-- Main Sidebar Container -->

<?php include 'sidebar.php'; ?>
    <!-- Sidebar -->
    <div class="content-wrapper">
    <main>
   
     

   <!-- <div class="d-flex justify-content-end">
       <a href="<?php echo site_url('/user-form') ?>" class="btn btn-success m-2">Add Food Item</a>
       <a href="<?php echo site_url('/logout') ?>" class="btn btn-danger m-2">logout</a>
 </div> -->
   <?php
    if(isset($_SESSION['msg'])){
       echo $_SESSION['msg'];
     }
    ?>
 <div class="mt-3">
    <?php
    if(session()->getFlashdata('status')){
        
        echo "<h3>".session()->getFlashdata('status')."</h3>";
    }
    ?>
    <table class="table table-bordered" id="users-list">
      <thead>
         <tr>
            <th>Food Id</th>
            <th> Food Name</th>
            <th>description</th>
            <th>price</th>
            <th>img</th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
         <?php if($Newfood): ?>
         <?php foreach($Newfood as $user): ?>
         <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['food_name']; ?></td>
            <td><?php echo $user['description']; ?></td>
            <td><?php echo $user['price']; ?></td>
            <td>
              <img src="<?= base_url("uploads/" . $user['image']); ?>" alt="img" height="100px" width="100px">

          

             </td>


            <td>
             <a href="<?php echo base_url('editnewfood/'.$user['id']);?>" class="btn btn-primary btn-sm">Edit</a>
             <a href="<?php echo base_url('deletenewfood/'.$user['id']);?>" class="btn btn-danger btn-sm">&#10006;</a>
             </td>
         </tr>
        <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
 </div>
</div>
   </div>
 </main>
</div>
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
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



