<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Your head content remains unchanged -->
  <style>
.card-container:hover .card-img-top {
  opacity: 0.3;
}

.card-container:hover .middle {
  opacity: 1;
}

.card-container {
  position: relative;
  width: 18rem;
}

.card-img-top {
  height: 180px; /* Adjust based on your needs */
  object-fit: cover; 
  opacity: 1;
  display: block;
  /* width: 100%;
  height: auto; */
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 20%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.text {
  background-color: #04AA6D;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

    </style>
</head>

<body>
  <div class="container my-3" id="cartbody" data-aos="fade-up">
    <div class="text-center mb-4">
      <h2>Popular Dishes of the Restaurant</h2>
      <p class="lead">Easiest way to order your favorite food</p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php if($fooditem): ?>
        <?php foreach($fooditem as $user): ?>
          <div class="col-md-4">
            <div class="card-container mb-6">
              <div class="card h-100">
                <img class="card-img-top border rounded" src="<?= base_url("uploads/" . $user['image']); ?>" alt="img">
                <div class="card-body">
                  <h5 class="card-title text-success"><?php echo $user['food_name']; ?>  <span class="badge badge-success rounded "><?php echo $user['price']; ?> RS</span></h5>
                  <p class="card-text"><?php echo $user['description']; ?></p>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
              
                <form method="post" id="add_create" name="add_create" 
    action="<?php echo base_url('add-to-cart/'.$user['id']);?>" enctype="multipart/form-data">
                  <a href="<?php echo base_url('add-to-cart/'.$user['id']);?>" class="btn btn-primary btn-sm">Add To Cart</a>
        </form>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
  <script>
$(document).on('click', '.btn-add-to-cart', function(e) {
    e.preventDefault();
    var foodId = $(this).attr('data-food-id'); // Assuming you add 'data-food-id' attribute to your anchor tags
    $.ajax({
        url: '<?= base_url('add-to-cart'); ?>/' + foodId,
        type: 'GET',
        success: function(response) {
            // Handle success - Update cart count, show a message, etc.
            alert("Item added to cart successfully!");
        },
        error: function(xhr, status, error) {
            // Handle error
            alert("An error occurred. Please try again.");
        }
    });
});

</script>
</body>

</html>
