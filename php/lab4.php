<html>
<head>
<title>FormValidation</title> 
</head>
<body>

<?php
    $name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$password="";
	$err_password="";
	$ConfirmPassword="";
	$err_ConfirmPassword="";
	$Email="";
	$err_Email="";
	$Phone[]=array();
	$code="";
	$number="";
	$err_Phone="";
	$address="";
	$err_address="";
	$city="";
	$state="";
	$zipcode="";
	$err_Address="";
	$gender="";
	$err_gender="";
	$sources[]=array();
	$err_sources="";
	$Bio="";
	$err_Bio="";
	      if($_SERVER['REQUEST_METHOD']== "POST"){
				if(empty($_POST["name"])){
					$err_uname="*Name is  Required";
				}
				
				else{
					$name=$_POST["name"];
				}
				if(empty($_POST["uname"])){
					$err_uname="*Username is Required";
				}
				else{
					$uname=$_POST["uname"];
				}
				if(empty($_POST["password"])){
					$err_password="*Password is Required";
				}
				else{
					$password=$_POST["password"];
				}
				if(empty($_POST["ConfirmPassword"])){
					$err_ConfirmPassword="*Confirm password";
				}
				else{
					$confirmPassword=$_POST["confirmPassword"];
				}
				if(empty($_POST["Email"])){
					$err_Email="*Email is Required";
				}
				else if(strlen($_POST["Email"])<10){
					$err_Email="___@gmail.com ";
				}
				else{
					$email=$_POST["Email"];
				}
				
				if(empty($_POST["Number"])){
					$err_Phone="*Number is Required";
				}
				else{
					$number=$_POST["Number"];
				}
				if(!isset($_POST["gender"])){
			   	$err_gender="*[Select Gender]";	
		        }
		        else{
			   $gender = $_POST["gender"];
		       }
				
				if(!empty($_POST["sources"])){
                    foreach($_POST["sources"] as $checked){
                       
                    }
                }
				else {
                    $err_sources="*[Select Source]";
                }
				if(empty($_POST["Bio"])){
					$err_Bio="*Fill the Comment Box ";
				}

				else{
					$bio=$_POST["Bio"];
				}

			}

		?>

	    <fieldset>
			 <h1>Club Member Registration</h1>
			<form action="" method="post">
				<table>
				    <tr>
						<td>Name: </td>
						<td><input type="text" value="<?php echo $name;?>" name="name">
						<span><?php echo $err_uname;?></span></td>

					</tr>
					<tr>
						<td>User Name:</td>
						<td><input type="text" value="<?php echo $uname;?>" name="uname">
						<span><?php echo $err_uname;?></span></td>

					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" value="<?php echo $password;?>" name="pass">
						<span><?php echo $err_password;?></span></td>
					</tr>
					<tr>
						<td>Confirm Password:</td>
						<td><input type="password" value="<?php echo $ConfirmPassword;?>" name="cpass">
						<span><?php echo $err_ConfirmPassword;?></span></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" value="<?php echo $Email;?>" name="Email">
						<span><?php echo $err_Email;?></span></td>

					</tr>
					<tr>
						<td>Phone: </td>
						<td><input size="12" type="text" placeholder="code" value="<?php echo $code;?>" name="code"> - 
						<input  type="text" placeholder="Number" value="<?php echo $number;?>" name="number">
						<span><?php echo $err_Phone;?></span></td>

					</tr>
					<br>
					<tr>
				    <td rowspan="3">Address:</td>
					<td><br><input type="text" name="address" value="<?php echo $address;?>"placeholder="Street Adress"><br>
                </tr>
					<tr>

						<td ><input  size="8" type="text" placeholder="City" value="<?php echo $city;?>" name="city"> - 
						<input size="14" type="text" placeholder="State" value="<?php echo $state;?>" name="state">
						</td>
				    </tr>
				    <tr>

						<td> <input size="14" type="text" placeholder="Postal/Zip Code" value="<?php echo $zipcode;?>" name="zipcode">
						<span><?php echo $err_Address;?></span></td>
				    </tr>

					<tr>
						<td>Birth Date:</td>
						<td>
							<select>
								<option>DAY</option>

								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
							<select>
								<option>MONTH</option>

								<?php
								    $month = array("January","February","March","April","May","June","July","August","September","October","November","December",);
									foreach($month as $m){
										echo "<option>$m</option>";

									}
								?>
							</select>
							<select>
								<option>YEAR</option>

								<?php
									for($y=2021;$y>=1990;$y--){
										echo "<option>$y</option>";
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td><input type="radio" value="<?php echo $gender;?>" name="gender">Male
						<input type="radio" value="<?php echo $gender;?>" name="gender">Female 
						<span><?php echo $err_gender;?></span></td>
					</tr>
					<tr>
						<td rowspan="4">Where did you hear about us?</td>
						  <td> <input type="checkbox" value="<?php echo $sources;?>
						" name="sources[]">A Friend or Colleage </td>
					</tr>
					<tr>
						<td><input type="checkbox" value="<?php echo $sources;?>" name="sources[]">Google </td>
				    </tr>
				    <tr>
						<td><input type="checkbox" value="<?php echo $sources;?>" name="sources[]">Blog Post </td>
				    </tr>
				    <tr>
						<td><input type="checkbox" value="<?php echo $sources;?>" name="sources[]">News Article
						<span><?php echo $err_sources;?></span></td>
				    </tr>

					</tr>
					<tr>
						<td>Bio:</td>
						<td><textarea value="<?php echo $bio;?>" name="bio"></textarea>
						<span><?php echo $err_Bio;?></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><br><input type="submit" value="Register"></td>
					</tr>

</table>
</form>
</fieldset>	
</body>
</html>