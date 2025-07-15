
<?php
    include("signup_conn.php");
?>


<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="contact_style.css" href="b1style.css">
</head>
<body>
  <section>
    
    <nav>

        <div class="logo">
            <img src="logo.png">
        </div>

        <ul>
            <li><a href="book1_temp.php">Home</a></li>
            <li><a href="contact_us.php">Contact Us</a></li>
            <li><a href="login.php">Login & Sign UP</a></li>
            <li><a href="Featured_Books.php">Featured Books</a></li>
            <li><a href="order_details.php">View cart</a></li>
            <li><a href="#Blog"></a></li>
        </ul>

        <div class="social_icon">
            <i class="fa-solid fa-magnifying-glass"></i>
            <i class="fa-solid fa-heart"></i>
        </div>

      </nav>


  <div class="container">
    <div class="Sign form">
      <header>Sign-Up</header>
      <form action="signup_conn.php" method="post">
        <input type="text" id="email" placeholder="Enter your email" name="email">
        <input type="password" id="password" placeholder="Enter your password" name="password">
        <input type="password" id="cpassword"placeholder="Confirm your password" name="cpassword">
        <input type="submit" class="button" value="Sign-Up" name="submit">
    
        <div class="signup">
          <span class="signup">Already have an account?
           <a href="login.php"><label for="check">Login</label></a>
          </span> 
        </div>
      </form> 
    </div>      

  </div>

  </section>
</body>
</html>