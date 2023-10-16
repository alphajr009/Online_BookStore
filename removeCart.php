<?php
require 'config.php';

$userID = $_GET["userid"];
$itemID = $_GET["itemid"];

// Delete the item from the cart
$deleteSql = "DELETE FROM cart WHERE userid = '$userID' AND itemid = '$itemID'";
$deleteResult = mysqli_query($conn, $deleteSql);

if ($deleteResult) {
    header("Location: cart.php?userid=$userID");
} else {
    echo "Failed to remove the item from the cart.";
}

mysqli_close($conn);
?>