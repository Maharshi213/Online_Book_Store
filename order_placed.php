<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap 5 Thank You Example</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>

section{

    
    width: 100%;
    height: 100vh;
    background-image: url(bg.png);
    background-size: cover;
    background-position: center;
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


/*Footer*/

footer{
    width: 100%;
    background: #eaeaea;
}

footer .footer_main{
    width: 100%;
    display: flex;
    justify-content: space-around;
    
}

footer .footer_main .tag{
    margin: 10px 0;
}

footer .footer_main .tag img{
    width: 100px;
    margin-bottom: 10px;
}

footer .footer_main .tag p{
    width: 250px;
    line-height: 22px;
    text-align: justify;
}

footer .footer_main .tag h1{
    font-size: 25px;
    margin: 25px 0;
    color: #000;
}

footer .footer_main .tag a{
    display: block;
    color: black;
    text-decoration: none;
    margin: 10px 0;
}

footer .footer_main .tag i{
    margin-right: 10px;
}

footer .footer_main .tag .social_link i{
    margin: 0 5px;
}

footer .footer_main .tag .search_bar{
    width: 230px;
    height: 30px;
    background: rgba(202,202,202);
    border-radius: 25px;
}

footer .footer_main .tag .search_bar input{
    width: 200px;
    padding: 2px 0;
    position: relative;
    top: 17%;
    left: 6%;
    border: none;
    outline: none;
    font-size: 13px;
    background: none;
}

footer .footer_main .tag .search_bar button{
    padding: 7px 15px;
    background: #089da1;
    border: none;
    margin-top: 15px;
    border-radius: 25px;
    color: #fff;
    cursor: pointer;
}

footer .end{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
    color: #000;
}

footer .end span{
    color: #089da1;
    margin-left: 10px;
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
        
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="card col-md-4 bg-white shadow-md p-5">
                <div class="mb-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                        fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                    </svg>
                </div>
                <div class="text-center">
                    <h1>Your Order Placed Successfully</h1>
                    <p>We will see you at your doorstep with your order </p>
                    <h3>Thank you For purchasing </h3>
                    <a href="book1_temp.php"><button class="btn btn-outline-success">Back Home</button></a>
                </div>
            </div>
        </section>
            <footer>
            <div class="footer_main">
    
                <div class="tag">
                    <img src="logo.png">
                    <p>
                        SecondReads Online Book Store
                    </p>
    
                </div>
    
                <div class="tag">
                    <h1>Quick Link</h1>
                    <a href="book1_temp.php">Home</a>
                    <a href="contact_us.php">Contact Us</a>
                    <a href="login.php">Login & Sign UP</a>
                    <a href="Featured_Books.php">Featured Books</a>
                    <a href="order_details.php">View cart</a>
                    <a href="#Blog"></a>
                    
                </div>
    
                <div class="tag">
                    <h1>Contact Info</h1>
                    <a href="#"><i class="fa-solid fa-phone"></i>+91 12 345 6789</a>
                    <a href="#"><i class="fa-solid fa-phone"></i>+91 32 444 699</a>
                    <a href="book1_temp.html"><i class="fa-solid fa-envelope"></i>Our Online bookstore</a>
                    
                </div>
    
               <!-- <div class="tag">
                    <h1>Follow Us</h1>
                    <div class="social_link">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>
                    
                </div>---->
    
                <!--<div class="tag">
                    <h1>Newsletter</h1>
                    <div class="search_bar">
                        <input type="text" placeholder="You email id here">
                        <button type="submit">Subscribe</button>
                    </div>                
                </div>  -->          
                
            </div>
    
            
    
        </footer>
        
      
    </body>
    
</html> 