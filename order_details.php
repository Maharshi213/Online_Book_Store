
<?php
    include("order_details_conn.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="order.css">
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
 
    <br>
    <br>
    <br>
    <div class="card">
      <div class="d-flex">
        <form action="order_details_conn.php" method="post">
          <label>
            <span class="fname">First Name <span class="required">*</span></span>
            <input type="text" name="fname">
          </label>
          <label>
            <span class="lname">Last Name <span class="required">*</span></span>
            <input type="text" name="lname">
          </label>
          <label>
            <span>Country <span class="required">*</span></span>
            <input type="text" name="cn" placeholder="India" required>
          </label>
          <label>
            <span>Street Address <span class="required">*</span></span>
            <input type="text" name="houseadd" placeholder="House number and street name Apartment, suite, unit etc" required>
          </label>
          <!---<label>
            <span>&nbsp;</span>
            <input type="text" name="apartment" placeholder="Apartment, suite, unit etc. (optional)">
          </label>--->
          <label>
            <span>Town / City <span class="required">*</span></span>
            <input type="text" name="city"> 
          </label>
          <label>
            <span>State <span class="required">*</span></span>
            <input type="text" name="state"> 
          </label>
          <label>
            <span>Postalcode<span class="required">*</span></span>
            <input type="text" name="pc"> 
          </label>
          <label>
            <span>Phone <span class="required">*</span></span>
            <input type="tel" name="phone"> 
          </label>
          <label>
            <span>Email Address <span class="required">*</span></span>
            <input type="email" name="email_add"> 
          </label>

         <a href="order_placed.php"><input type="submit" class="button" value="place-order" name="submit"></a>
        </form>
        <div class="Yorder">
          
        
        </table>

        <h3>Payment methods:</h3>
        <h3 class="display-5">We accept only cash on delivery</h3>
        
          <a href="order_placed.php"><button type="button">Place Order</button></a>
          <a href="Featured_Books.php"><button type="button">Go Back</button></a>
        </div><!-- Yorder -->

       </div>
      </div>
    </div>
</section> 
</body>
</html>