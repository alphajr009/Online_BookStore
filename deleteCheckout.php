<?php
      require 'config.php';
      
    

      if (isset($_GET['orderid'])) {
        $id=$_GET['orderid'];
        $userID = $_GET["userid"];
        
        
        // Delete the order from the orderdetails table using the provided ID
        $sql = "DELETE FROM `orderdetails` WHERE `id` ='$id'";
      
        if ($conn->query($sql) === TRUE) {
          // Order Details deleted successfully
          header("LOCATION:book_store.html?userid=$userID");
} else {
echo "Error deleting user: " . $conn->error;
}

}

?>