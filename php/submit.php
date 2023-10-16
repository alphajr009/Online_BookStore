<?php
	include_once'config.php';
?>

<?php

	if(isset($_POST['submit'])){
		
		$name = $_POST["field1"];
		$number = $_POST["field2"];
		$email = $_POST["field3"];
		$password = $_POST["field4"];
		$signin_name = $_POST["uname"];
		$signin_pwd = $_POST["pwd"];
		
		$sql = INSERT INTO detail_tab(Signup_name,Signup_phone,Signup_email,Signup_password,Signin_name,Signin_pwd)VALUES('$name','$number','$email','$password','$signin_name','$signin_pwd');
		
		if(mysqli_query($conn,$sql){
			echo"<script>alert('Record Inserted Successfully!!')</script>";
			
		}else{
			echo"<script>alert('Error in Insertion!!')</script>";
		}
	}

	
	//close the connection
	mysqli_close($conn);
?>