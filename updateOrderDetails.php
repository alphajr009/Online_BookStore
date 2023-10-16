<?php
require 'config.php';

$userID = $_GET['userid'];
$orderID = $_GET['orderid'];

// Fetch order details from the database
$sql = "SELECT * FROM orderdetails WHERE id = '$orderID'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Retrieve the required fields
    $name = $row['name'];
    $zipcode = $row['zipcode'];
    $address = $row['address'];

    mysqli_free_result($result);

} else {
    echo "No order found.";
    exit;
}

// Handle the update operation when the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newName = $_POST['C_Name'];
    $newAddress = $_POST['C_Address'];
    $newZipcode = $_POST['C_Zipcode'];

    // Update the order details in the database
    $updateSql = "UPDATE orderdetails SET address = '$newAddress', zipcode = '$newZipcode',name = '$newName' WHERE id = '$orderID'";
    $updateResult = mysqli_query($conn, $updateSql);

    if ($updateResult) {
        echo "<script>window.location.href = 'display.php?userid=$userID&orderid=$orderID';</script>";
    } else {
        echo "Failed to update order details.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Your Address</title>
    <link rel="stylesheet" type="text/css" href="css/display2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Online_BookStore/css/style_css.css" />
    <link rel="stylesheet" href="../Online_BookStore/css/style.css" />
    <link rel="stylesheet" href="./css/display.css" />
    <link rel="stylesheet" href="./css/display1.css" />
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

        <div class='box1'>
            <div class="order-display">

                <!-- Section 1 -->
                <div class="od-details022">
                    <h2>Edit Your Address</h2>
                </div>

                <hr style="width:100%;text-align:left;margin-left:2%;margin-top:2%">

                <!-- Section 3 -->
                <div class='update-field'>
                    <form method="POST" action="">

                        <div class='uf1'>
                            <label for="C_Address">Name</label>
                            <input type="text" value="<?php echo $name; ?>" id="C_Name" name="C_Name">
                        </div>

                        <div class='uf2'>
                            <label for="C_Address">Address</label>
                            <input type="text" value="<?php echo $address; ?>" id="C_Address" name="C_Address">
                        </div>

                        <div class='uf2'>
                            <label for="C_Zipcode">ZIP CODE</label>
                            <input type="text" value="<?php echo $zipcode; ?>" id="C_Zipcode" name="C_Zipcode">
                        </div>

                        <div class="od-buttons2">
                            <button class="od-btn4" onclick="goback('<?php echo $orderID; ?>')">Go Back</button>
                            <button class="od-btn3" type="submit">Update</button>
                        </div>
                    </form>

                    <script>
                    function goback(orderID) {
                        window.location.href = 'display.php?userid=<?php echo $userID; ?>&orderid=' + orderID;
                    }
                    </script>
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