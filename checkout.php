<?php
require 'config.php';

$userID = $_GET["userid"];
$totalPrice = $_GET["totalprice"];


// Fetch order details from the database
$sql = "SELECT * FROM cart WHERE userid = '$userID'";
$result = mysqli_query($conn, $sql);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Online_BookStore/css/style_css.css" />
    <link rel="stylesheet" href="../Online_BookStore/css/style.css" />
    <link rel="stylesheet" href="./css/check.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />

    <title>Online Book Store | SLIIT </title>



</head>

<body>
    <!------------------ Header ------------------>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html">
                    <img src="images/EbookStore-Logo.png" alt="EbookStore-Logo" />
                </a>
            </div>
            <!----------  Nav Bar ------------------>
            <nav>
                <ul id="MenuItems">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="latest_news.html">Latest News</a></li>
                    <li><a href="book_store.html">Book Store</a></li>
                    <li><a href="e-books.html">E-Books</a></li>
                    <li><a href="e-books.html">About Us</a></li>
                    <li><a href="account.html">User Account</a></li>
                </ul>
            </nav>
            <a href="cart.php?userid=10">
                <img src="images/cart.png" alt="Shoping Cart" width="28px" height="28px"
                    style="margin-left: 10px; margin-top: 5px" />
            </a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()" />
        </div>

        <div class="small-container cart-page">

            <div class='chekout-box'>
                <h1>Shipping Address</h1>
                <hr style="width:100%;text-align:left;margin-left:2%;margin-bottom:20px">

                <form method="post" action="checkoutFunction.php">
                    <!-- Shipping Address Section -->

                    <input type="hidden" name="userid" value="<?php echo $userID; ?>">
                    <label for="C_Address">Name:</label>
                    <input type="text" id="C_Name" name="C_Name" required><br>

                    <label for="C_Address">Address:</label>
                    <input type="text" id="C_Address" name="C_Address" required><br>

                    <label for="C_Zipcode">Zip Code:</label>
                    <input type="text" id="C_Zipcode" name="C_Zipcode" required><br>



                    <div class="cbflex">
                        <h3>Total</h3>
                        <h3>Rs.<?php echo $totalPrice; ?></h3>
                    </div>

                    <!-- Submit Buttons -->
                    <button type="submit" type="submit" name="submit">Order Now</button>
                </form>

            </div>

        </div>




        <!-- ---------------------footer------------------- -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <p>Download App for Android and ios mobile phone.</p>
                        <div class="app-logo">
                            <img src="images/Playstore.png" />
                            <img src="images/Applestore.png" />
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="images/EbookStore-Logo-footer.png" />
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Reiciendis, Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Terms of Services</li>
                            <li>Branch network</li>
                            <li>Shipping and Returns</li>
                            <li>Payment Policy</li>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Youtube</li>
                            <li>Instagram</li>
                            <li>Twitterr</li>
                        </ul>
                    </div>
                </div>
                <hr />
                <p class="copyright">Copyright 2023 @ Online Book Store</p>
            </div>
        </div>

</body>

</html>