<?php
    include("connection.php");
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="contact_style.css" href="b1style.css">
</head>
<body> 
    <!--------------Navigation Bar----------------------->
    
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
                <li><a href="cart.php">View cart</a></li>
                <li><a href="#Blog"></a></li>
            </ul>

            <div class="social_icon">
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-heart"></i>
            </div>

        </nav>
        <!---------------------------------------Form --------------------------------->
        <div class="container">
          <div class="login form">
            <header>Login</header>
            <form action="connection.php" method="post">
              <input type="text" id="email" placeholder="Enter your email" name="email">
              <input type="password" id="password" placeholder="Enter your password" name="password">
              
              <input type="submit" class="button" value="Login" name="login">
          
            <div class="signup">
              <span class="signup">Don't have an account?
               <a href="signup.php"><label for="check">Signup</label></a>
              </span>
            </form>
            </div>  
          </div>      

        </div>
    
    
    </section>
</body>
</html>

