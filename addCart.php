<?php
    include_once 'config.php';

    // Retrieve the feedback ID from the URL parameter
    $userID = $_GET["userid"];
    $itemID = $_GET['itemid'];

    // Check if the item already exists in the cart for the given user
    $checkQuery = "SELECT * FROM `cart` WHERE `userid` = '$userID' AND `itemid` = '$itemID'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // Item already exists in the cart, no need to add it again
        mysqli_close($conn); 

        // Redirect to the cart page
        header("Location: cart.php?userid=$userID");
        exit;
    } else {
        // Item does not exist in the cart, insert it into the database
        $quantity = 1;
        $sql = "INSERT INTO `cart`(`userid`, `itemid`,`quantity`) VALUES ('$userID', '$itemID','$quantity')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            mysqli_close($conn); 

            // Redirect to the cart page
            header("Location: cart.php?userid=$userID");
            exit;
        } else {
            die(mysqli_error($conn));
        }
    }
?>