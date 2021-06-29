<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$confirmPass="";
	$err_confirmPass="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	
	$hasError=false;

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$err_name="*Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["name"]) <=2){
			$err_name="*Name Must be greater than 2";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_uname="*Username Required";
			$hasError = true;
		}
		
		else{
			$uname=$_POST["username"];
		}
		if(empty($_POST["pass"])){
			$err_pass="*Pass Required";
			$hasError = true;
		}
		else if(strlen($_POST["pass"]) <=8){
			$err_pass="*Pass Must be greater than 8";
			$hasError = true;
		}
		else{
			$pass=$_POST["pass"];
		}
		if(empty($_POST["confirmPass"])){
			$err_confirmPassword="Pass Required";
			$hasError = true;
		}
		else if(strlen($_POST["confirmPass"]) <=8){
			$err_confirmPass="Pass must be greater than 8";
			$hasError = true;
		}
	    
		else{
			$confirmPass=$_POST["confirmPass"];
		}
	    if ($pass != $confirmPass) {
            $err_confirmPass = "*Passwords are different";
            $hasError = true;
        }
		else{
			$confirmPass=$_POST["confirmPass"];
		}
	
		if(empty($_POST["email"])){
			$err_email="*Email must be given";
			$hasError = true;
		}
		else{
			$email=$_POST["email"];
		}
		if(strlen($_POST["email"]) <=10){
			$err_email="*___@gmail.com";
			$hasError = true;
		}
		if(empty($_POST["phone"])){
			$err_phone="Phone number Required";
			$hasError = true;
		}
		else if(strlen($_POST["phone"]) <=10){
			$err_phone="Must be a valid phone number";
			$hasError = true;
		}
		else{
			$phone = $_POST["phone"];
		}
		
 if(!$hasError){
	         
			 echo "DeliveryMan Name:  ";
			 echo $name."<br>";
			 echo $_POST["username"]."<br>";
			 echo $_POST["pass"]."<br>";
			 echo $_POST["confirmPassword"]."<br>";
			 echo "Email:  ";
			 echo $_POST["email"]."<br>";
			 echo "Contact Number:  ";
			 echo $_POST["phone"]."<br>";
		}
	}
	
	?>

<html>
<body>
	<h1>DeliveryMan Registration</h1>
<fieldset>
<form action="" method="POST">
<table >
					<tr>
						<td>Name: </td>
						<td><input type="text" size="20" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td>Username: </td>
						<td><input type="text" size="20" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td>password: </td>
						<td><input type="password" size="20" name="pass" value="<?php echo $pass;?>" placeholder="Password"></td>
						<td><span><?php echo $err_pass;?></span></td>
					</tr>
					<tr>
						<td>Confirm password: </td>
						<td><input type="password" size="20" name="confirmPass" value="<?php echo $confirmPass;?>" placeholder="Confirm password"></td>
						<td><span><?php echo $err_confirmPass;?></span></td>
					</tr>
					
					<tr>
						<td>Email: </td>
						<td><input type="text" size="20" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
						<td><span><?php echo $err_email;?></span></td>
					</tr>
					<tr>
						<td>Phone: </td>
						<td><input type="text" size="20" name="phone" value="<?php echo $phone;?>" placeholder="Phone"></td>
						<td><span><?php echo $err_phone;?></span></td>
					</tr>
					
					
</table>
                    <a align="center"><input type="submit" value="Register"></a><br>
					<b>Now, you can</b> <a href ="deliverylogin.php" ><i>Login<i></a>
</form>
</fieldset>
</body>
</html>