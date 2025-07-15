<!---<!DOCTYPE html>
<html>
  <head>
    <title>Contact us</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      * {
      box-sizing: border-box;
      }

      
      html, body {
      min-height: 100vh;
      padding: 0;
      margin: 0;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px; 
      color: #666;
      }
      input, textarea { 
      outline: none;
      }
      body {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0px;
      background: #5a7233;
      }
      section nav{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;
    box-shadow: 0 0 10px #089da1;
    background: #fff;
    position: fixed;
    left: 0;
    z-index: 100;
}

section nav .logo img{
    width: 100px;
    cursor: pointer;
    margin: 8px 0;
}

section nav ul{
    list-style: none;
}

section nav li{
    display: inline-block;
    padding: 0 10px;
}

section nav li a{
    text-decoration: none;
    color: #000;
}

section nav li a:hover{
    color: #089da1;
}

section nav .social_icon i{
    margin: 0 5px;
    font-size: 18px;
}

section nav .social_icon i:hover{
    color: #089da1;
    cursor: pointer;
}
      h1 {
      margin-top: 0;
      font-weight: 500;
      }
      form {
      position: relative;
      width: 80%;
      border-radius: 30px;
      background: #fff;
      }
      .form-left-decoration,
      .form-right-decoration {
      content: "";
      position: absolute;
      width: 50px;
      height: 20px;
      border-radius: 20px;
      background: #5a7233;
      }
      .form-left-decoration {
      bottom: 60px;
      left: -30px;
      }
      .form-right-decoration {
      top: 60px;
      right: -30px;
      }
      .form-left-decoration:before,
      .form-left-decoration:after,
      .form-right-decoration:before,
      .form-right-decoration:after {
      content: "";
      position: absolute;
      width: 50px;
      height: 20px;
      border-radius: 30px;
      background: #fff;
      }
      .form-left-decoration:before {
      top: -20px;
      }
      .form-left-decoration:after {
      top: 20px;
      left: 10px;
      }
      .form-right-decoration:before {
      top: -20px;
      right: 0;
      }
      .form-right-decoration:after {
      top: 20px;
      right: 10px;
      }
      .circle {
      position: absolute;
      bottom: 80px;
      left: -55px;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: #fff;
      }
      .form-inner {
      padding: 40px;
      }
      .form-inner input,
      .form-inner textarea {
      display: block;
      width: 100%;
      padding: 15px;
      margin-bottom: 10px;
      border: none;
      border-radius: 20px;
      background: #d0dfe8;
      }
      .form-inner textarea {
      resize: none;
      }
      button {
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      border-radius: 20px;
      border: none;
      border-bottom: 4px solid #3e4f24;
      background: #5a7233; 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      button:hover {
      background: #3e4f24;
      } 
      @media (min-width: 568px) {
      form {
      width: 60%;
      }
      }
    </style>
  </head>
  <body>

    <section>
    
            <nav>
    
                <div class="logo">
                    <img src="logo.png">
                </div>
    
                <ul>
                    <li><a href="book1_temp.html">Home</a></li>
                    <li><a href="contact_us.html">Contact Us</a></li>
                    <li><a href="login.html">Login & Sign UP</a></li>
                    <li><a href="Featured_Books.html">Featured Books</a></li>
                    <li><a href="cart.html">View cart</a></li>
                    <li><a href="#Blog"></a></li>
                </ul>
    
                <div class="social_icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <i class="fa-solid fa-heart"></i>
                </div>
    
            </nav>
    <form action="contact.php" method="post" class="decor">
      <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <div class="form-inner">
        <h1>Contact us</h1>
        <input type="text" placeholder="Username" name="name">
        <input type="email" placeholder="Email" name="email">
        <textarea placeholder="Message..." rows="5" name="mess"></textarea>
        <button type="submit" href="#">Submit</button>
      </div>
    </form>
  </section>
  </body>
</html>---->



<?php
    include("contact_conn.php");
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
      <header>Contact US</header>
      <form action="contact_conn.php" method="post">
        <input type="text" id="email" placeholder="Enter your email" name="email">
        <input textarea placeholder="Message..." rows="5" name="mess">
        <input type="submit" class="button" value="Submit" name="submit">
    
    
      </form> 
    </div>      

  </div>

  </section>
</body>
</html>