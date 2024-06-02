<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Cart detail</title>
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
   
     

    <div class="d-flex justify-content-end">
       
       <a href="<?php echo site_url('/logout') ?>" class="btn btn-danger m-2">logout</a>
 </div>
 <?php
    if(isset($_SESSION['msg'])){
       echo $_SESSION['msg'];
     }
    ?>

<div class="container">
    <table class="table table-bordered" id="customer-list">
      <thead>
      
         <tr class="bg-info">
            <th> Id</th>
            <th>food_image</th>
            <th>food_name</th>
            <th>quantity</th>
            <th>price</th>
            <th>Subtotal</th>
            <th>user Id</th>
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
         <?php if($cart): ?>
         <?php foreach($cart as $Cart): ?>
         <tr>
           
            <td><?php echo $Cart['cart_id']; ?></td>
            <td><img class="card-img-top border rounded" src="<?= base_url("uploads/" . $Cart['food_image']); ?>" alt="img" height="100px" width="50px"></td>
            <td><?php echo $Cart['food_name']; ?></td>
            <td><?php echo $Cart['quantity']; ?></td>
            <td><?php echo $Cart['price']; ?></td>
            <td><?php echo $Cart['quantity']*$Cart['price']; ?> <p>Rs</p></td>
            <td><?php echo $Cart['user_id']; ?></td>
     
            
            <td>
             <div class="row">
              <!-- <div class="col-4 m-1"><a href="<?php echo base_url('edit-emp/'.$Cart['cart_id']);?>" class="btn btn-primary btn-sm">Edit</a></div> -->
              <div class="col-5 m-1"><a href="<?php echo base_url('deletecart/'.$Cart['cart_id']);?>" class="btn btn-danger btn-sm">&#10006;</a></div>
             </div>
             </td>
         </tr>
        <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
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



