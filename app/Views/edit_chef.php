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
    <form method="post" id="update_user" name="update_user" 
    action="<?= site_url('/updatechef') ?>">
      <input type="hidden" name="chefid" id="chefid" value="<?php echo $user_obj['chefid']; ?>">
      <div class="form-group">
        <label> chef Name</label>
        <input type="text" name="chefname" class="form-control" value="<?php echo $user_obj['chefname']; ?>">
      </div>
      <div class="form-group">
        <label>Chef address</label>
        <input type="text" name="chefaddress" class="form-control" value="<?php echo $user_obj['chefaddress']; ?>">
      </div>
      <div class="form-group">
        <label>Chef Email Id</label>
        <input type="text" name="chefemailid" class="form-control" value="<?php echo $user_obj['chefemailid']; ?>">
      </div>
      <div class="form-group">
        <label>salary</label>
        <input type="text" name="salary" class="form-control" value="<?php echo $user_obj['salary']; ?>">
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
