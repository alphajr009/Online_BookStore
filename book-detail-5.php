<?php
//Assign that itemID and userID to variables
$itemID = 6;
$userID = 10;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Online_BookStore/css/style_css.css" />
    <link rel="stylesheet" href="../Online_BookStore/css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />

    <title>Online Book Store | SLIIT </title>



</head>

<body>
    <!------------------ Header ------------------>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html">
                        <img src="images\EbookStore-Logo.png" alt="EbookStore-Logo" /></a>
                </div>

                <!----------  Nav Bar ------------------>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="home.html">Home</a></li>
                        <li><a href="latest_news.html">Latest News</a></li>
                        <li><a href="book_store.html">Book Store</a></li>
                        <li><a href="about_us.html">About Us</a></li>
                        <li><a href="account.html">User Account</a></li>
                    </ul>
                </nav>
                <a href="cart.html">
                    <img src="images/cart.png" alt="Shoping Cart" width="28px" height="28px"
                        style="margin-left: 10px; margin-top: 5px" />
                </a>
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()" />
            </div>


            <!-- ----------single product details------------- -->
            <div class="small-container single-product">
                <div class="row">
                    <div class="col-2">
                        <img src="images/Book 9.jpg" alt="Book9" width="68%" />
                    </div>
                    <div class="col-2">
                        <p>Home / Ebook</p>
                        <h3>THE SWORD AND THE SHIELD</h3>
                        <h4>Rs.2,500.00</h4>
                        <input type="number" value="1" />
                        <button class="btn" style='border:none' onclick="addCart('<?php echo $itemID; ?>')">Add to
                            Cart</button>
                        <h3>Book Details <i class="fa fa-indent"></i></h3>
                        <br>
                        <h3>4.2/5 Goodreads</h3><br>
                        <p>This dual biography of Malcolm X and Martin Luther King upends longstanding preconceptions to
                            transform our understanding of the twentieth century's most iconic African American leaders.
                            <br><br>
                            Originally published: March 31, 2020<br><br>
                            Author: Peniel E. Joseph<br><br>
                            Genre: Biography
                        </p>

                    </div>
                </div>
            </div>

            <!-- -------------title----------------- -->
            <div class="small-container">
                <div class="row row-2">
                    <h2>Related Books</h2>
                    <p>View More</p>
                </div>
            </div>
            <!-- --------------Product-------------- -->
            <div class="small-container">
                <div class="row">

                    <div class="col-4">
                        <a href="book-detail-6.html">
                            <img src="images/Book 10.jpg" alt="Book 10" /></a><br>
                        <a href="book-detail6.html">
                            <h5>HARRY POTTER AND THE PHILOSOPHER'S STONE</h5>
                        </a>
                        <br>
                        <p>Rs.1,800</p>
                    </div>


                    <div class="col-4">
                        <a href="book-detail-7.html">
                            <img src="images/Book 11.jpg" alt="Book 11" /></a><br>
                        <a href="book-detail7.html">
                            <h5>රොබින් ෂර්මා ඒ අපූරු මග – E Apuru Maga</h5>
                        </a>
                        <br>
                        <p>Rs.950</p>
                    </div>


                    <div class="col-4">
                        <a href="book-detail-8.html">
                            <img src="images/Book 12.jpg" alt="Book 12" /></a><br>
                        <a href="book-detail8.html">
                            <h5>Malagiya Aththo</h5>
                        </a>
                        <br>
                        <p>Rs.800</p>
                    </div>


                    <div class="col-4">
                        <a href="book-detail-9.html">
                            <img src="images/Book 13.jpg" alt="Book 13" /></a><br>
                        <a href="book-detail9.html">
                            <h5>WANT : A NOVEL</h5>
                        </a>
                        <br>
                        <p>Rs.1,200</p>
                    </div>

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
                                <li>Coupons</li>
                                <li>Blog Post</li>
                                <li>Return Policy</li>
                                <li>Join Affiliate</li>
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
                    <p class="copyright">Copyright 2020 - EbookStore</p>
                </div>
            </div>
            <!-- ---------Javascript for toggle menu------------- -->
            <script>
            var MenuItems = document.getElementById("MenuItems");
            MenuItems.style.maxHeight = "0px";

            function menutoggle() {
                if (MenuItems.style.maxHeight == "0px") {
                    MenuItems.style.maxHeight = "200px";
                } else {
                    MenuItems.style.maxHeight = "0px";
                }
            }

            function addCart(itemID) {
                window.location.href = 'addCart.php?userid=<?php echo $userID; ?>&itemid=' +
                    itemID;
            }
            </script>
</body>

</html>