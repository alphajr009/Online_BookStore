<?php
require 'config.php';

$userID = $_GET["userid"];
$orderID = $_GET["orderid"];


// Fetch order details from the database
$sql = "SELECT * FROM orderdetails WHERE id = '$orderID'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    
    // Retrieve the required fields
    $name = $row['name'];
    $address = $row['address'];
    $zipcode = $row['zipcode'];

    // Fetch order details from the database
$sql = "SELECT * FROM cart WHERE userid = '$userID'";
$result = mysqli_query($conn, $sql);


} else {
echo "No order found.";
exit;
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Online_BookStore/css/style_css.css" />
    <link rel="stylesheet" href="../Online_BookStore/css/style.css" />
    <link rel="stylesheet" href="./css/display.css" />
    <link rel="stylesheet" href="./css/display1.css" />
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

                <div class="order-display">
                    <div class="od-image-up">
                        <img src="Images/ShopZilla Logo.png" alt="">
                    </div>
                    <!-- Section 1 -->
                    <div class="od-details0">
                        <h5>Hello <?php echo $name; ?>,</h5>
                        <h4>Your order has been confirmed and will be shipping soon.</h4>
                    </div>
                    <hr style="width:100%;text-align:left;margin-left:2%">

                    <div class='od-detailsall'>
                        <div class="od-details1">
                            <h3>Order Id</h3>
                            <h2><?php echo $orderID; ?></h2>
                        </div>
                        <div class="od-details2">
                            <h3>Zip Code</h3>
                            <h2><?php echo $zipcode; ?></h2>
                        </div>
                        <div class="od-details3">
                            <h3>Address</h3>
                            <h2><?php echo $address ; ?></h2>
                        </div>
                    </div>
                    <hr style="width:100%;text-align:left;margin-left:2%">

                    <div class="small-container cart-page1">
                        <table>

                            <tr>
                                <th>Ebook</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>


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
                                        <div style="margin-top:20px">
                                            <p><?php echo $name; ?></p>
                                            <small>Price: Rs<?php echo $price; ?></small> <br />

                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <p><?php echo $quantity; ?></p>
                                </td>
                                <td>Rs<?php echo $price * $quantity; ?></td>
                            </tr>

                            <?php
                    }
                    mysqli_free_result($result);
                } else {
                    echo "<tr><td colspan='3'>No items in the Order.</td></tr>";
                }
                ?>

                        </table>
                        <div class="total-price">
                            <table>

                                <tr>
                                    <td>Total</td>
                                    <td><b>Rs<?php echo number_format($totalPrice, 2); ?></b></td>
                                </tr>

                            </table>

                        </div>

                        <div class="od-buttons">
                            <button class="od-btn1" onclick="editShippingDetails('<?php echo $orderID; ?>')">Edit
                                Shipping Details</button>
                            <button class="od-btn2" onClick="deleteme('<?php echo $orderID; ?>')">Cancel Order</button>

                        </div>

                        <script>
                        function editShippingDetails(orderID) {
                            window.location.href = 'updateOrderDetails.php?userid=<?php echo $userID; ?>&orderid=' +
                                orderID;
                        }

                        function deleteme(orderID) {
                            if (confirm('Are you sure you want to cancel this Order?')) {
                                window.location.href = 'deleteCheckout.php?userid=<?php echo $userID; ?>&orderid=' +
                                    orderID;
                            }
                        }
                        </script>
                    </div>
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