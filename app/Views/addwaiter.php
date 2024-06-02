<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 Add User With Validation Demo</title>
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
  <div class="container mt-5">
    <form method="post" id="add_create" name="add_create" 
    action="<?= site_url('/submitwaiter-form') ?>">

    

      <div class="form-group">
        <label  class="badge text-light text-wrap" style="width: 10rem; font-size:15px" class="badge bg-light text-wrap" style="width: 10rem; font-size:15px"> enter waiter Name</label  class="badge bg-light text-wrap" style="width: 10rem; font-size:15px">
        <input type="text" name="name" class="form-control" placeholder="Enter Name">
      </div>
      <div class="form-group">
        <label  class="badge text-light text-wrap" style="width: 10rem; font-size:15px"> Enter address</label  class="badge bg-light text-wrap" style="width: 10rem; font-size:15px">
        <input type="text" name="address" class="form-control" placeholder="Enter address">
      </div>
      <div class="form-group">
        <label  class="badge text-light text-wrap" style="width: 10rem; font-size:15px">Email</label  class="badge bg-light text-wrap" style="width: 10rem; font-size:15px">
        <input type="text" name="email" class="form-control" placeholder="Enter  Email ">
      </div>
      <div class="form-group">
        <label  class="badge text-light text-wrap" style="width: 10rem; font-size:15px">Phone no</label  class="badge bg-light text-wrap" style="width: 10rem; font-size:15px">
        <input type="text" name="phone_no" class="form-control" placeholder="Enter">
      </div>
      <label  class="badge text-light text-wrap" style="width: 10rem; font-size:15px">gender</label  class="badge bg-light text-wrap" style="width: 10rem; font-size:15px">
        <input type="text" name="gender" class="form-control">
      </div>
      <div class="form-group d-flex justify-content-center mt-3">
    
        <button type="submit" class="btn btn-primary "> Add waiter</button>
      </div>
    </form>
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
          address: {
            required: true,
            maxlength: 60,
           
          },
          email: {
            required: true,
            maxlength: 60,
           
          },
          phone_no:{
            required: true,
          }
        },
        messages: {
            customername: {
            required: "Name is required.",
          },
          address: {
            required: "address is required.",
            
            maxlength: "The email should be or equal to 60 chars.",
          },
          phoneno:{
            required: "mobile number is required.",
          }
        },
      })
    }
  </script>
</body>
</html>
