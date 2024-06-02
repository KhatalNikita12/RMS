<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 CRUD App Example - positronx.io</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body >
<?= $this->include('navbar') ?>
<div class="container mt-4">
<div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/waiter-form') ?>" class="btn btn-success m-2">Add waiter</a>
        <a href="<?php echo site_url('/logout') ?>" class="btn btn-danger m-2">logout</a>
	</div>
  <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>

<div class="mt-3">
     <table class="table table-bordered" id="customer-list">
       <thead>
          <tr>
             <th>waiter Id</th>
             <th> waiter Name</th>
             <th>address</th>
             <th>email</th>
             <th>Phone no</th>
             <th>gender</th>
          </tr>
       </thead>
       <tbody>
          <?php if($waiter): ?>
          <?php foreach($waiter as $waiter1): ?>
          <tr>
             <td><?php echo $waiter1['id']; ?></td>
             <td><?php echo $waiter1['name']; ?></td>
             <td><?php echo $waiter1['address']; ?></td>
             <td><?php echo $waiter1['email']; ?></td>
             <td><?php echo $waiter1['phone_no']; ?></td>
             <td><?php echo $waiter1['gender']; ?></td>
             <td>
              <a href="<?php echo base_url('edit-waiter/'.$waiter1['id']);?>" class="btn btn-primary btn-sm">Edit</a>
              <a href="<?php echo base_url('deletewaiter/'.$waiter1['id']);?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#customer-list').DataTable();
  } );
</script>
</body>
</html>