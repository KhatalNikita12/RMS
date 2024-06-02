<!DOCTYPE html>
<html>

<head>
  <title>Codeigniter 4 Add User With Validation Demo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- <style>
    .container {
      max-width: 500px;
      /* border: 2px solid black; 
  padding: 10px; */
      padding: 20px;
      box-shadow:
        inset 0 -3em 3em rgb(0 200 0 / 30%),
        0 0 0 2px white,
        0.3em 0.3em 1em rgb(200 0 0 / 60%);


      /* background-image: url("https://media.istockphoto.com/id/868408746/photo/assorted-indian-dish.jpg?s=1024x1024&w=is&k=20&c=FJaE4fYBh5aOXfym_JUkUYKBA8s01-ogbGRi_mqrLa0="); */

      background-color: #cccccc;
      /* Used if the image is unavailable */
      height: 450px;
      /* You must set a specified height */
      background-position: center;
      /* Center the image */
      background-repeat: no-repeat;
      /* Do not repeat the image */
      background-size: cover;/
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style> -->
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
    border: 20%;
    margin-top: 5%;
   }
  </style>
</head>

<body>
 <!-- main div start -->
 <div >
  <div class="row" >
    
    <div class="col">
    <div class="container  mt-5">
    <form method="post" id="add_create" name="add_create" action="<?= site_url('/submit-form') ?>">
      <div class="form-group text-light">
        <label> Enter food Name</label>
        <input type="text" name="foodname" class="form-control" placeholder="Enter food Name">
      </div>
      <div class="form-group">
        <label> Enter Food category</label>
        <input type="text" name="category" class="form-control" placeholder="Enter Food category">
      </div>
      <div class="form-group">
        <label>Price</label>
        <input type="text" name="price" class="form-control" placeholder="Price">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Add Food item</button>
      </div>
    </form>
  </div>
    </div class="">
    <div class="col container">
    <table class="table border ">
     <thead >
    <tr >
      
      <th scope="col">food Name</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody >
   
    <tr>
     
      <td>Barger</td>
      <td>RS 50</td>
    </tr>
    <tr>
     
      <td>pizha</td>
      <td>Rs 20</td>
    </tr>
  </tbody>
</table>
    </div>
  </div>
</div>
 <!-- main div end -->
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
          mno: {
            required: true,
          }
        },
        messages: {
          name: {
            required: "Name is required.",
          },
          address: {
            required: "address is required.",

            maxlength: "The email should be or equal to 60 chars.",
          },
          mno: {
            required: "mobile number is required.",
          }
        },
      })
    }
  </script>
</body>

</html>