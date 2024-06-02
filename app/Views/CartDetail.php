<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<?php include(APPPATH . 'Views/navbar.php'); ?>
<div class="container mt-1">
    <table class="table table-bordered" id="customer-list">
      <thead>
      
         <tr class="bg-info h5">
            <!-- <th> Id</th> -->
            <th>food_image</th>
            <th>food_name</th>
            <th>quantity</th>
            <th>price</th>
            <th>Subtotal</th>
           
            <!-- <th>employee type</th> -->
            <th>Action</th>
         </tr>
      </thead>
      <tbody>
         <?php if($cart): ?>
         <?php foreach($cart as $Cart): ?>
         <tr>
           
            <!-- <td><?php echo $Cart['cart_id']; ?></td> -->
            <td><img class="card-img-top border rounded" src="<?= base_url("uploads/" . $Cart['food_image']); ?>" alt="img" height="100px" width="50px"></td>
            <td><?php echo $Cart['food_name']; ?></td>
            <td><?php echo $Cart['quantity']; ?></td>
            <td><?php echo $Cart['price']; ?> Rs</td>
            <td><?php echo $Cart['total']; ?> Rs</td>
           
     
            
            <td>
             <div class="row">
              <!-- <div class="col-4 m-1"><a href="<?php echo base_url('edit-cart/'.$Cart['cart_id']);?>" class="btn btn-primary btn-sm">Edit</a></div> -->
              <div class="col-5 m-1 " ><a href="<?php echo base_url('deletecart/'.$Cart['cart_id']);?>" class="btn btn-danger btn-sm ">&#10006;</a></div>
             </div>
             </td>
         </tr>
       
        <?php endforeach; ?>
        <tr >
        <td  colspan=6 ><h4 class="text-end"> Total is:  <?php echo $total ?> Rs</h4>
        <div class="row">
            <div class="col-5 m-1 " ><a href="<?php echo base_url('/');?>" class="btn btn-info btn-sm "><h6 class="text-center">Continue Ordering</h6></a></div>
        <div class="col-5 m-1 h2 " ><input type="submit" class="btn btn-info btn-sm " onclick="pay()" value="Pay"></div>
       
            </div></td>
        </tr>
        <tr >
        <!-- <td colspan=6 > 
            <div class="row">
            <div class="col-5 m-1 " ><a href="<?php echo base_url('/');?>" class="btn btn-info btn-sm ">continue ordering</a></div>
        <div class="col-5 m-1 " ><a href="<?php echo base_url('deletecart/'.$Cart['cart_id']);?>" class="btn btn-info btn-sm ">Checkout</a></div>
       
            </div>
         </td> -->
        </tr>
        <?php endif; ?>
      </tbody>
     
    </table>
   
 </div>
 </main>
</div>
<script>
    function pay(){
        alert("Bill is Generated");
    }
    </script>
</body>

</html>