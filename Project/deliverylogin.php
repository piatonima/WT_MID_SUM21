<?php
    $uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	
    if($_SERVER["REQUEST_METHOD"]=="POST")
	{
	    if(empty($_POST["username"])){
			$err_uname="Username Required";
		}
		elseif(strlen($_POST["username"])<8){
			$err_uname="Username must be of 8 characters";
		}
		else{
			$uname=$_POST["username"];
		}
		if(empty($_POST["password"])){
			$err_pass="Password Required";
		}
		elseif(strlen($_POST["password"])<8){
			$err_pass="Password Must Be at least 8 Charachter Long";
		}
		else{
			$pass=$_POST["password"];
		}
	} 
?>
<html>
<body>
 <fieldset>
		   <h1> Deliveryman Login</h1>
<form action="" method="post">
<table>
					<tr>
						<td><b>Username: <b></td>
						<td><input size="20" type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><small><?php echo $err_uname;?><small></span></td>
					</tr>
					<tr>
						<td><b>Password: <b></td>
						<td><input size="20" type="password" name="password" placeholder="Password"></td>
						<td><span><small><?php echo $err_pass;?><small></span></td>
					</tr>
					<tr>
						<td align="center" colspan="3" ><br><br><input type="submit" value="Login"></td>
					</tr>
					<tr>
					    <td align= "center" colspan="3" rowspan="3"><br><br><a href ="deliveryCreateAccount.php" > No Account?   Register Now.</a></td>
					</tr>
</table>
</form>
</fieldset>
</body>
</html>