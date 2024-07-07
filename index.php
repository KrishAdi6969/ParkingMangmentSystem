<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Car Park Management System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
			include('inc/css1.php');
	?>
	<style>
    .btn {
      display: inline-block;
      padding: 10px 20px;
      margin: 10px;
      border-radius: 5px;
      text-decoration: none;
      color: #fff;
      background-color: #ff5733;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #e64a2b;
    }
  </style>
  <style>
    .happy {
        display: flex;
    }

    .text-column {
        flex: 1;
        padding: 20px;
    }

    .image-column {
        flex: 1;
        padding: 20px;
    }

    img {
        max-width: 60%;
        height: auto;
        max-height: 50px;
    }
</style>
</head>

<body>
	<section id="container">
	<?php
			include('inc/header.php');
						
	?>
	</section>
	<div class="boxbhai">
		
	
</br>
<style>
  body {
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
  }

  .welcome {
    text-align: center;
    font-weight: bold;
    font-size: 28px;
    margin-top: 50px;
  }

  .welcome p {
    line-height: 1.5;
    margin-bottom: 50px;
	text-align: left;
	margin-left: 120px;
  }

  #buttons {
    text-align: center;
    margin-top: 100px;
  }

  #buttons a {
    color: red;
    text-decoration: none;
    font-size: 18px;
    margin-right: 10px;
  }

  .btn {
    background-color: #ff9900;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 18px;
    cursor: pointer;
    border-radius: 5px;
    text-decoration: none;
  }

  .btn:hover {
    background-color: #ffa07a;
  }
</style>
<div class="happy">
    <div class="text-column"></br></br></br></br></br></br></br></br></br>
        <h2>Welcome To Car Parking System </h2>
        <p>We offer cashless car parking services.</br>Book Now</p>
        
    </div>
    <div class="image-column">
    <img src="car.jpg" alt="Car Image" style="max-width: 80%; height: auto;">
        <!-- Replace the src attribute with the URL of your desired image -->
    </div>
</div>
</br></br>
<div id="buttons">
  <a style="color: red;">Want To Reset Password Click Below</a><br>
  <a href="reset_password.php" class="btn">Reset Password</a>
</div>


</div>

	</div>
	</section></div>
	<?php
			include('inc/footer.php');
	?>
	
	
</body>
</html>