<?php
	
	$uname="";
	$err_uname="";
	$newpass="";
	$err_newpass="";
	$newcpass="";
	$err_newcpass="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	
	$hasError=false;
	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		
	    elseif(strlen($_POST["username"])<8){
			$err_uname="Username Must Be 8 characters Long";
			$hasError = true;
		}
		
		else{
			$uname=$_POST["username"];
		}
		if(empty($_POST["newpassword"])){
			$err_npass="Password Required";
			$hasError = true;
			
		}
		
		elseif(strlen($_POST["newpassword"])<8){
			$err_npass="password must Be 8 characters Long";
			$hasError = true;
		}
		else{
			$pass = $_POST["newpassword"];
		}
		if(empty($_POST["newconfirm_password"])){
			$err_ncpass="Retype password";
			$hasError = true;
		}
		elseif(strlen($_POST["newpassword"])<8){
			$err_newpass="password must Be 8 characters Long";
		}
		else{
			$cpass = $_POST["newconfirm_password"];
		}
		if ($newpass!= $newcpass) {
            $err_cpass = "You need to have same passwords";
			$hasError = true;
		}
		else{
			$newcpass = $_POST["newconfirm_password"];
		}
		
		if(empty($_POST["email"])){
			$err_email="valid email Required";
			$hasError = true;
		}
		else{
			$email = $_POST["email"];
		}
	   if(strlen($_POST["email"]) <=10){
			$err_email="*___@gmail.com";
			$hasError = true;
		}
		if(empty($_POST["phone"])){
			$err_phone = "Contact number Required";
			$hasError = true;
		}
		elseif (strlen($_POST["phone"]) <11) 
		{
            $err_phone = "Phone Number can not be less than 11";
			$hasError = true;
		}	
		else{
			$phone = $_POST["phone"];
		}
	
		
		
		if(!$hasError){
			echo $_POST["username"]."<br>";
			echo $_POST["newpassword"]."<br>";
			echo $_POST["newconfirm_password"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["phone"]."<br>";
			
		}
	
	}
?>
<html>
<head></head>
<body>
<fieldset>
		  <h1> DeliveryManForgetPassword</h1>
<form action="" method="post">
<table>
					
					<tr>
						<td><b>Username: <b></td>
						<td><input size="20" type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><?php echo $err_uname;?></td>
					</tr>
					<tr>
						<td><b>Password: <b></td>
						<td><input size="20" type="password" name="newpassword" placeholder="Password"></td>
						<td><?php echo $err_newpass;?></td>
					</tr>
					<tr>
						<td><b>Confirm Password: <b></td>
						<td><input size="20" type="password" name="newconfirm_password" placeholder="Retype Password"></td>
						<td><?php echo $err_newcpass;?></td>
					</tr>
					<tr>
						<td><b>Email: <b></td>
						<td><input size="20" type="text" name="email" placeholder="Email"></td>
						<td><?php echo $err_email;?></td>
					</tr>
					<tr>
						<td><b>Contact Number: <b></td>
						<td><input size="20" type="text" name="phone" placeholder="Phone"></td>
						<td><?php echo $err_phone;?></td>
					</tr>
					<tr>
						<td align="center" colspan="3"><br><br><input type="submit" value="Submit"></td>
					</tr>
</table>
				<br></br><a align="right" colspan="3"> <b><i>Go to<i></b><a href ="deliverylogin.php" >Login</a></a>
</form>
</fieldset>
</body>
<html>
