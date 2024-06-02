<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Restaurant Table Booking System | Search Result</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Include your CSS links here -->
    <!-- <style>
        .container{
            width: 70%;
            margin: auto;
            /* padding: 30px; */
        }
        </style> -->
        
</head>
<body>
<?php include(APPPATH . 'Views/navbar.php'); ?>
<div class="div">
<div class="card border m-3">
  <div class="card-header">
  <h1 class="card-title">Searched data for '<?= esc($searchData) ?>' Booking Id</h1>
  </div>
  <table class="table table-bordered table-striped" id="users-list">
       <thead>
          <tr>
             <th>Table Id</th>
             <th>boooking Id</th>
             <th>fullName</th>
             <th>emailId</th>
             <th>phoneNumber</th>
             <th>Table bookingDate</th>
             <th>booking<br>Time</th>
             <th>Adults</th>
             <th>Childrens</th>
            
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($tblbookings): ?>
          <?php foreach($tblbookings as $user): ?>
          <tr>
             <td><?php echo $user['id']; ?></td>
             <td><?php echo $user['bookingNo']; ?></td>
             <td><?php echo $user['fullName']; ?></td>
             <td><?php echo $user['emailId']; ?></td>
             <td><?php echo $user['phoneNumber']; ?></td>
             <td><?php echo $user['bookingDate']; ?></td>
             <td><?php echo $user['bookingTime']; ?></td>
             <td><?php echo $user['noAdults']; ?></td>
             <td><?php echo $user['noChildrens']; ?></td>
             
             <td>
             <a href="<?php echo base_url('bookingDetails/'.$user['id']);?>" class="btn btn-primary btn-sm" target="_blank">View Details</a>
              <!-- <a href="<?php echo base_url('edit-view/'.$user['id']);?>" class="btn btn-primary btn-sm">Edit</a>
              <a href="<?php echo base_url('delete/'.$user['id']);?>" class="btn btn-danger btn-sm">Delete</a> -->
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
</div>
</div>
<!-- Add your JavaScript links here (jQuery, Bootstrap, etc.) -->
<script src="https://kit.fontawesome.com/b27d57f29f.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>
</body>
</html>
