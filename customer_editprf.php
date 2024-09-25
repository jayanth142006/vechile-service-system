<!DOCTYPE html>
<html lang="en" data-bs-theme="">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
        body, html {
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.941);
        }

        .gradient-background {
            flex: 1;
            display: flex;
            flex-direction: column;
            background: linear-gradient(300deg, #00bfff, #ff4c68, #ef8172);
            background-size: 180% 180%;
            animation: gradient-animation 18s ease infinite;
            min-height: 100vh;
            position: relative;
        }

        @keyframes gradient-animation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .bottom-content {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .button-group {
            display: flex;
            justify-content: center;
            margin-top: 7%;
        }

        .button-group button {
            height: 150px;
            width: 250px;
            border-radius: 10%;
            margin-right: 10px;
        }

        .button-group button img {
            margin-bottom: 10px;
        }
        #file-input {
          display:none
        }
    </style>
</head>
<body>
<div class="gradient-background">
  <div class="gradient-ba" style="background-color:rgba(0, 0, 0, 0.941); ">
      <div class="container" style="background-color: rgba(0, 0, 0, 0.941);">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none" style="margin-left: 30px;">
                <img src="img/logo.png" style="height: 40px;"><br><br>
                <span style="color: white; font-size: 20px; margin-left: 10px;">S.L REPAIR & SERVICE CENTER</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <ul class="nav nav-pills" style="margin-right: 30px;">
                <li class="nav-item"><a href="project_home.html" class="nav-link" >Home</a></li>
                <li class="nav-item"><a href="customer_login.html" class="nav-link active" aria-current="page">Customer</a></li>
                <li class="nav-item"><a href="mechanic_login.html" class="nav-link">Mechanic</a></li>
                <li class="nav-item"><a href="admin_login.html" class="nav-link">Admin</a></li>
                <li class="nav-item"><a href="contact_us.html" class="nav-link">Contact Us</a></li>
            </ul>
            
        </div>
    </nav>

                      
      </div>

    </div>
    <center>
    <div style="height:auto;width:35%;border-radius:3%;background-color:rgba(0, 0, 0, 0.484);margin-top:3%;margin-bottom:3%">
      <br><p style="font-size:35px;color:white;">EDIT PROFILE</p>
      <div style="text-align:center;">
          
            <?php
            session_start();
            if (isset($_SESSION['customer_name'])) {
                $customer_name = $_SESSION['customer_name'];}
            if (isset($_SESSION['customer_email'])) {
                $customer_email = $_SESSION['customer_email'];}
            if (isset($_SESSION['customer_mobile'])) {
                $customer_number = $_SESSION['customer_mobile'];}
            if (isset($_SESSION['customer_password'])) {
                $customer_password = $_SESSION['customer_password'];}
            if (isset($_SESSION['customer_address'])) {
                $customer_address = $_SESSION['customer_address'];}
            
            ?>
            <center>
          
                
            
            <form action="customer_update.php" method="post">
              <div style="margin-bottom:7%">
              <input type="file" id="file-input" accept="image/*" onchange="previewImage(event)"  >
              <!-- Clickable image -->
              <img src="img/bike2.png" alt="Click to upload" id="clickable-image" style="height:150px;width:150px;border-radius:50%;cursor:pointer">
              </div>
                       
            <div class="form-floating mb-3" style="margin-top:20px;width:450px;background-color:rgba(244, 240, 240, 0.365);">
                    <input name="name" type="text" class="form-control" id="floatingInput" placeholder="" value="<?php echo $customer_name?>" required>
                    <label for="floatingInput">Name</label>
                </div>
        
                <div class="form-floating mb-3" style="width:450px;">
                    <input name="mobile" type="text" class="form-control" id="floatingInput" placeholder="" value="<?php echo $customer_number?>" required>
                    <label for="floatingInput">Mobile number</label>
                </div>

                <div class="form-floating mb-3" style="width:450px;">
                    <input name="address" type="text" class="form-control" id="floatingInput" placeholder="" value="<?php echo $customer_address?>" required>
                    <label for="floatingInput">Address</label>
                </div>
        
                <div class="form-floating mb-3" style="width:450px;">
                    <input name="email" type="email" class="form-control" id="floatingInput" placeholder="" value="<?php echo $customer_email?>" required>
                    <label for="floatingInput">Email address</label>
                </div>
        
                <div class="form-floating" style="width:450px;">
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="" value="<?php echo $customer_password?>" required>
                    <label for="floatingPassword">Password</label>
                </div>
            </div>
            <button style="width:170px;height:45px;background-color:black;color:white;border-radius:10%;margin-top:5%;margin-bottom:3%">Save Changes</button>
            </center>
            </form>
        </div>
    </div>
    </center>
</div>
<script>
        // Function to simulate a click on the file input when the image is clicked
        document.getElementById('clickable-image').addEventListener('click', function() {
            document.getElementById('file-input').click();
        });

        // Function to preview the selected image
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('clickable-image');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>