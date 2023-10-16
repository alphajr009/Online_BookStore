<?php
require 'config.php';

if (isset($_POST['submit'])) {
    $C_Name = $_POST['C_Name'];
    $C_Address = $_POST['C_Address'];
    $C_Zipcode = $_POST['C_Zipcode'];
    $C_Userid = $_POST['userid'];
    

    $sql = "INSERT INTO `orderdetails`(`name`, `address`, `zipcode`, `userid`) VALUES ('$C_Name','$C_Address','$C_Zipcode','$C_Userid')";
    $result = mysqli_query($conn, $sql);
   
    if ($result) {
        $orderID = mysqli_insert_id($conn); // Get the ID of the inserted row
        mysqli_close($conn); 

        // Redirect with the necessary itemid as orderid
        header("Location: display.php?userid=$C_Userid&orderid=$orderID");
        exit;
    } else {
        die(mysqli_error($conn));
    }
}
?>