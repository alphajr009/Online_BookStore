<?php
//Assign that itemID and userID to variables
$itemID = 2;
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
                        <li><a href="index.html">Home</a></li>
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
                        <img src="images/Book 4.jpg" alt="Book4" width="68%" />
                    </div>
                    <div class="col-2">
                        <p>Home / Ebook</p>
                        <h3>ELON MUSK - ANAGATHAYA WENAS KALA MINISA - එලොන් මස්ක්</h3>
                        <h4>Rs1,500.00</h4>
                        <input type="number" value="1" />
                        <button class="btn" style='border:none' onclick="addCart('<?php echo $itemID; ?>')">Add to
                            Cart</button>
                        <h3>Book Details <i class="fa fa-indent"></i></h3>
                        <br />
                        <p>
                            ලොව වඩාත්ම කතාබහට ලක්වන පුද්ගලයෙකු ලෙස සුප්‍රකට ටයිම් සඟරාවේ කවරයටද ගිය ‘එලොන් මස්ක්‘ ගැන
                            නොදන්නා කෙනෙක් දැන් නොමැති තරම්. ගෙවීගිය 2021 වසරේදී ඔහු ලොව ධනවත්ම පුද්ගලයා ලෙස කිරුළු
                            පැළඳුවේ එතෙක් එම කිරුලේ හිමිකාරත්වය දැරූ ජෙෆ් බෙසෝගෙන් එය ඩැහැ ගනිමිනුයි. ටෙස්ලා,
                            ස්පේස්එක්ස්, නියුරාලින්ක්, සෝලර්සිටි වැනි ජාත්‍යන්තරයේ නම් දැරූ සමාගම් කිහිපයකම සාඩම්බර
                            හිමිකරු වන්නේ මස්ක්ය. ඔහුගේ සමස්ත වටිනාකම ඇ.ඩොලර් බිලියන එකසිය අසූපහා ඉක්මවීම, ඔහුව මෙම
                            ජයග්‍රාහී කඩඉම වෙත ගෙන ආවේය. කවදත් අන් අය නොකරන, රැඩිකල් තාලයේ අලුත්ම වැඩ කරන, ඒ නිසාම ලොවේම
                            අවධානයට ලක්වන මස්ක්ගේ සාර්ථකත්වයට මුල්වූ සැබෑ හේතුව කුමක්ද ? ඒ ගැන විමසමින් සිදුකළ සම්මුඛ
                            සාකච්ඡාවකදී තම සාර්ථකත්වය පිටුපස සැඟවුණු රහස් කිහිපයක්ම හෙළි කර තිබුණේ කාටත් ආදර්ශයක් ගැනීම
                            පිණිසය. මේ මස්ක්ම කියන පරිදි ඔහුගේ සාර්ථකත්වයට මඟ හෙළිකළ ආකල්පමය රහස් කිහිපයකි.
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
                        <a href="book-detail-1.html">
                            <img src="images/Book 5.jpg" alt="Book 5" /></a><br>
                        <a href="book-detail1.html">
                            <h5> THE TOWER OF NERO</h5>
                        </a>
                        <br>
                        <p>Rs.3,500</p>
                    </div>


                    <div class="col-4">
                        <a href="book-detail-2.html">
                            <img src="images/Book 6.jpg" alt="Book 6" /></a><br>
                        <a href="book-detail2.html">
                            <h5> AN ISLANDS ELEVEN HC</h5>
                        </a>
                        <br>
                        <p>Rs.500</p>
                    </div>


                    <div class="col-4">
                        <a href="book-detail-3.html">
                            <img src="images/Book 7.jpg" alt="Book 7" /></a><br>
                        <a href="book-detail3.html">
                            <h5>THE HOBBIT</h5>
                        </a>
                        <br>
                        <p>Rs.1,000</p>
                    </div>


                    <div class="col-4">
                        <a href="book-detail-4.html">
                            <img src="images/Book 8.jpg" alt="Book 8" /></a><br>
                        <a href="book-detail4.html">
                            <h5>A CHILDREN'S BIBLE</h5>
                        </a>
                        <br>
                        <p>Rs.1,500</p>
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
                window.location.href = 'addcart.php?userid=<?php echo $userID; ?>&itemid=' +
                    itemID;
            }
            </script>
</body>

</html>