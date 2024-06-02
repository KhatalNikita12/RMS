<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 Add User With Validation Demo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
      /* border: 2px solid black; 
  padding: 10px; */
  padding: 20px;
  box-shadow:
    inset 0 -3em 3em rgb(0 200 0 / 30%),
    0 0 0 2px white,
    0.3em 0.3em 1em rgb(200 0 0 / 60%);
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
  <div class="container  mt-5" >
    <form method="post" id="add_create" name="add_create" 
    action="<?= site_url('/submitchef-form') ?>">
      <div class="form-group">
        <label> Enter chef Name</label>
        <input type="text" name="chefname" class="form-control">
      </div>
      <div class="form-group">
        <label> Enter  Chef address</label>
        <input type="text" name="chefaddress" class="form-control">
      </div>
      <div class="form-group">
        <label> Enter  Chef Email Id</label>
        <input type="email" name="chefemailid" class="form-control">
      </div>
      <div class="form-group">
        <label>salary</label>
        <input type="text" name="salary" class="form-control">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Add chef</button>
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
        //   address: {
        //     required: true,
        //     maxlength: 60,
           
        //   },
        //   mno:{
        //     required: true,
        //   }
        },
        messages: {
          name: {
            required: "Name is required.",
          },
        //   address: {
        //     required: "address is required.",
            
        //     maxlength: "The email should be or equal to 60 chars.",
        //   },
        //   mno:{
        //     required: "mobile number is required.",
        //   }
        },
      })
    }
  </script>
</body>
</html>
