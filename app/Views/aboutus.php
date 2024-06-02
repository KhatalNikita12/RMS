<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Restaurant Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        #moreInfo {
            display: none;
            margin-top: 20px;
        }
        .profile-img {
            max-width: 200px; /* Increase the maximum width to 200px */
    border-radius: 50%;
    margin: 0 auto;
    display: block;
        }
        .toggle-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s;
        }
        .toggle-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    
<?php include(APPPATH . 'Views/navbar.php'); ?>
    <header>
        <h1> NP Restaurant </h1>
    </header>
    <div class="container">
        <h2>Welcome to Our Restaurant </h2>
        <p>
            Our Restaurant Management System is designed to streamline and simplify the operations of your restaurant. 
            Whether you run a small café or a large fine-dining establishment, our system provides tools to manage 
            reservations, track orders, handle payments, and more.
        </p>
        <h3>Key Features:</h3>
        <ul>
            <li>Table reservation management</li>
            <li>Menu management and customization</li>
            <li>Order tracking and status updates</li>
            <li>Inventory management</li>
            <li>Employee scheduling and payroll</li>
            <li>Customer feedback and reviews</li>
        </ul>

        <div class="container" id="moreInfo">
        
            <h3>Our Team</h3>
  <div class="row">
    <div class="col-sm">
    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Manager" class="profile-img">
                <p><strong>John Doe</strong><br> Manager</p>
    </div>
    <div class="col-sm">
    <img src="https://images.unsplash.com/photo-1594583388647-364ea6532257?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Employee" class="profile-img">
                <p><strong>Jane Smith</strong><br> Employee</p>
    </div>
    <div class="col-sm">
    <img src="https://images.unsplash.com/photo-1559192823-e1d8e87def54?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Manager" class="profile-img">
                <p><strong>John Doe</strong><br> Manager</p>
    </div>
  </div>
</div>






        <!-- <div id="moreInfo">
            <h3>Our Team</h3>
            <div>
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Manager" class="profile-img">
                <p><strong>John Doe</strong><br> Manager</p>
            </div>
            <div>
                <img src="https://picsum.photos/seed/picsum/200/300" alt="Employee" class="profile-img">
                <p><strong>Jane Smith</strong><br> Employee</p>
            </div>
        </div> -->
        <button class="toggle-btn" onclick="toggleInfo()">Show More</button>
        <h3>Contact Us</h3>
        <p>
            For inquiries or assistance, please don't hesitate to contact our support team:
        </p>
        <ul>
            <li>Email: support@restaurantmanagementsystem.com</li>
            <li>Phone: 1-800-123-4567</li>
        </ul>
    </div>

    <script>
        function toggleInfo() {
            var moreInfo = document.getElementById("moreInfo");
            var button = document.querySelector(".toggle-btn");
            if (moreInfo.style.display === "none") {
                moreInfo.style.display = "block";
                button.textContent = "Hide";
            } else {
                moreInfo.style.display = "none";
                button.textContent = "Show More";
            }
        }
    </script>
    <?php include(APPPATH . 'Views/footer.php'); ?>
</body>
</html>