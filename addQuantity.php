<?php
require 'config.php';

$userID = $_GET["userid"];
$itemID = $_GET["itemid"];
$newQuantity = $_GET["quantity"];

// Update the quantity in the cart
$updateSql = "UPDATE cart SET quantity = '$newQuantity' WHERE userid = '$userID' AND itemid = '$itemID'";
$updateResult = mysqli_query($conn, $updateSql);

if ($updateResult) {
    echo "Quantity updated successfully in the cart.";
} else {
    echo "Failed to update the quantity in the cart.";
}

mysqli_close($conn);
?>