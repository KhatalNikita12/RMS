<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Food Information</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <style>
   .container{
      background-image: url("https://media.istockphoto.com/id/868408746/photo/assorted-indian-dish.jpg?s=1024x1024&w=is&k=20&c=FJaE4fYBh5aOXfym_JUkUYKBA8s01-ogbGRi_mqrLa0=");
   
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 450px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /
   }
   .table{
      border:2px solid black;
   }
  </style>
</head>

<body class="body" >
<?php include(APPPATH . 'Views/navbar.php'); ?>
<div class="container mt-4">

    <div class="d-flex justify-content-end">
        
        <a href="<?php echo site_url('/logout') ?>" class="btn btn-danger m-2">logout</a>
	</div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table table-striped-columns  " id="users-list">
       <thead>
          <tr class="bg-secondary">
             <th>Food Id</th>
             <th> Food Name</th>
             <th>Category</th>
             <th>price</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($food): ?>
          <?php foreach($food as $user): ?>
          <tr >
             <td><?php echo $user['id']; ?></td>
             <td><?php echo $user['foodname']; ?></td>
             <td><?php echo $user['category']; ?></td>
             <td><?php echo $user['price']; ?></td>
             <td>
              <a href="<?php echo base_url('edit-view/'.$user['id']);?>" class="btn btn-primary btn-sm">Edit</a>
              <a href="<?php echo base_url('delete/'.$user['id']);?>" class="btn btn-danger btn-sm">Delete</a>
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
      $('#users-list').DataTable();
  } );
</script>
</body>
</html>
