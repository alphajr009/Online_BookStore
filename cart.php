<?php
require 'config.php';

$userID = $_GET["userid"];


// Fetch cart details from the database
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

        <!-- ---------- cart items details------------- -->
        <div class="small-container cart-page">
            <table>
                <tr>
                    <th>Ebook</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <tr>

                    <?php
                    $totalPrice = 0;
                if ($result && mysqli_num_rows($result) > 0) {
                  
                    while ($row = mysqli_fetch_assoc($result)) {
                        $itemID = $row['itemid'];
                        $quantity = $row['quantity'];

                        // Fetch product details from the database
                        $productSql = "SELECT * FROM product WHERE P_ID = '$itemID'";
                        $productResult = mysqli_query($conn, $productSql);

                        if ($productResult && mysqli_num_rows($productResult) > 0) {
                            $productRow = mysqli_fetch_assoc($productResult);
                            $imageURL = $productRow['Image_URL'];
                            $name = $productRow['P_Name'];
                            $price = $productRow['Price'];

                            $subtotal = $price * $quantity;

                            $totalPrice += $subtotal;

                            mysqli_free_result($productResult);
                        } else {
                            $imageURL = "";
                            $name = "";
                            $price = "";
                        }
                ?>

                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="<?php echo $imageURL; ?>" alt="<?php echo $name; ?>" />
                            <div>
                                <p><?php echo $name; ?></p>
                                <small>Price: Rs<?php echo $price; ?></small> <br />
                                <a
                                    href="removeCart.php?userid=<?php echo $userID; ?>&itemid=<?php echo $itemID; ?>">Remove</a>

                            </div>
                        </div>
                    </td>
                    <td><input type="number" min="1" value="<?php echo $quantity; ?>"
                            onchange="updateQuantity('<?php echo $userID; ?>', '<?php echo $itemID; ?>', this.value)" />
                    </td>
                    <td>Rs<?php echo $price * $quantity; ?></td>
                </tr>

                <?php
                    }
                    mysqli_free_result($result);
                } else {
                    echo "<tr><td colspan='3'>No items in the cart.</td></tr>";
                }
                ?>




            </table>
            <div class="total-price">
                <table>

                    <tr>
                        <td>Total</td>
                        <td>Rs<?php echo number_format($totalPrice, 2); ?></td>
                    </tr>



                </table>

            </div>

        </div class='paynow-btn'>
        <div style="text-align: right; margin-right: 110px; margin-top: -70px;">
            <button class='btn' style='border:none' onclick="redirectToCheckout(<?php echo $userID; ?>)">Pay
                Now</button>

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

        function updateQuantity(userID, itemID, quantity) {
            // Make an AJAX request to addQuantity.php to update the quantity
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "addQuantity.php?userid=" + userID + "&itemid=" + itemID + "&quantity=" + quantity, true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Reload the cart page after successful update
                    window.location.href = "cart.php?userid=" + userID;
                } else {
                    console.error("Failed to update quantity in the cart.");
                }
            };
            xhr.send();
        }

        function redirectToCheckout(userID) {
            // Redirect the user to the checkout page with the userID parameter
            window.location.href = "checkout.php?userid=" + userID + "&totalprice=" + <?php echo $totalPrice; ?>
        }
        </script>
</body>

</html>