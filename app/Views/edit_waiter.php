<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 CRUD - Edit User Demo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
      padding: 20px;
  box-shadow:
    inset 0 -3em 3em rgb(0 200 0 / 30%),
    0 0 0 2px white,
    0.3em 0.3em 1em rgb(200 0 0 / 60%);
    
      background-image: url("https://media.istockphoto.com/id/868408746/photo/assorted-indian-dish.jpg?s=1024x1024&w=is&k=20&c=FJaE4fYBh5aOXfym_JUkUYKBA8s01-ogbGRi_mqrLa0=");
   
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 450px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /
   


    
    }
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
<?= $this->include('navbar') ?>
  <div class="container mt-5">
    <form method="post" id="update_user" name="update_user" 
    action="<?= site_url('/updatewaiter') ?>">
      <input type="hidden" name="id" id="id" value="<?php echo $cust_obj['id']; ?>">
      <div class="form-group">
        <label> waiter Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $cust_obj['name']; ?>">
      </div>
      <div class="form-group">
        <label>waiter Address</label>
        <input type="text" name="address" class="form-control" value="<?php echo $cust_obj['address']; ?>">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo $cust_obj['email']; ?>">
      </div>

      <div class="form-group">
        <label>waiter Phone_no</label>
        <input type="text" name="phone_no" class="form-control" value="<?php echo $cust_obj['phone_no']; ?>">
      </div>

      <label>gender</label>
        <input type="text" name="gender" class="form-control" value="<?php echo $cust_obj['gender']; ?>">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Save Data</button>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_user").length > 0) {
      $("#update_user").validate({
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
</body>
</html>
