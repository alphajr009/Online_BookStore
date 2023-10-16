<?php
//Assign that itemID and userID to variables
$itemID = 13;
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
                        <img src="images/Book 16.jpg" alt="Book16" width="68%" />
                    </div>
                    <div class="col-2">
                        <p>Home / Ebook</p>
                        <h3>A YEAR OF SLOWING DOWN</h3>
                        <h4>Rs.2,000.00</h4>
                        <input type="number" value="1" />
                        <button class="btn" style='border:none' onclick="addCart('<?php echo $itemID; ?>')">Add to
                            Cart</button>
                        <h3>Book Details <i class="fa fa-indent"></i></h3>
                        <h3>A Year of Slowing Down</h3><br>
                        Daily Devotions for Unhurried Living<br>
                        by Alan Fadling<br>
                        Published: December 06, 2022<br><br>
                        <p>With the overwhelming pace of life, many of us struggle to stop long enough to be present.
                            Our long to-do lists and full calendars leave little breathing room to hear from God. We
                            know we need to slow down but we don't even know how to begin.
                            <br>Alan Fadling has spent years coaching leaders and communities on how to live an
                            unhurried life, teaching that productivity and success are not our chief end, but rather
                            living at the pace that our true self longs to live. Designed to help you center your day
                            around God's loving presence, A Year of Slowing Down offers six devotionals for each week of
                            the year. Each day begins with a Scripture passage followed by a short reading and a
                            reflection question.
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
                        <a href="book-detail-13.html">
                            <img src="images/Book 17.jpg" alt="Book 17" /></a><br>
                        <a href="book-detail13.html">
                            <h5>TRUE COMPANIONS</h5>
                        </a>
                        <br>
                        <p>Rs.1,100</p>
                    </div>


                    <div class="col-4">
                        <a href="book-detail-14.html">
                            <img src="images/Book 18.jpg" alt="Book 18" /></a><br>
                        <a href="book-detail14.html">
                            <h5>Parents in Pain</h5>
                        </a>
                        <br>
                        <p>Rs.1,450</p>
                    </div>


                    <div class="col-4">
                        <a href="book-detail.html">
                            <img src="images/Book 4.jpg" alt="Book 4" /></a><br>
                        <a href="book-detail.html">
                            <h5> ELON MUSK - ANAGATHAYA WENAS KALA MINISA - එලොන් මස්ක්</h5>
                        </a>
                        <br>
                        <p>Rs.1,500</p>
                    </div>


                    <div class="col-4">
                        <a href="book-detail-1.html">
                            <img src="images/Book 5.jpg" alt="Book 5" /></a><br>
                        <a href="book-detail1.html">
                            <h5> THE TOWER OF NERO</h5>
                        </a>
                        <br>
                        <p>Rs.3,500</p>
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