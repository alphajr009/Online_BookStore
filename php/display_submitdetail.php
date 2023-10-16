<?php
	include_once('config.php');
?>

<?php
	$sql = "SELECT * FROM detail_tab";
	$result = mysqli_query($conn,$sql);
	$result = $conn->query($sql);
		if($result->num_of_rows>0){
			while($row = $result->fetchassoc()){
				echo "
						<b>Sign Up Details: </b><br/>
						Signup user name:".$_row['Signup_name']."<br/>
						Signup user phone:".$_row['Signup_phone']."<br/>
						Signup user email:".$_row['Signup_email']."<br/>
						Signup user password:".$_row['Signup_password']."<br/>
						
						<br/><br/>
						
						<b>Sign In Details: </b><br/>
						Signin user name:".$_row['Signin_name']."<br/>
						Signin user password:".$_row['Signin_pwd']."<br/>
				";
			}
		}
		else{
			echo("This is an empty table.");
		}
		
		//close the connection
		mysqli_close($conn);
?>