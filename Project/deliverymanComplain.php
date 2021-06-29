<?php
	$name="";
	$err_name="";
	$email="";
	$err_email="";
	$types=[];
	$err_types="";
	$sub="";
	$err_sub="";
	$txt="";
	$err_txt="";
	
	$hasError=false;
	
	$types = array("ReportOfFood","Complain");
	

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["name"]) <=2){
			$err_name="Name Must be greater than 2";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["email"])){
			$err_email="Valid email Required";
			$hasError = true;
		}
		
		else{
			$email=$_POST["email"];
		}
		 if(strlen($_POST["email"]) <=10){
			$err_email="*___@gmail.com";
			$hasError = true;
		}
		if(empty($_POST["types"])){
			$err_types="Select types";
			$hasError = true;
		}
		else{
			$types = $_POST["types"];
		}
		if(empty($_POST["subject"])){
			$err_sub = "Subject Required";
			$hasError = true;
		}
		else if(strlen($_POST["subject"]) <=8){
			$err_sub="Subject Must be contain at least 8 letters";
			$hasError = true;
		}
		else{
			$sub = $_POST["subject"];
		}
		if(empty($_POST["message"])){
			$err_txt="Text Required";
			$hasError = true;
		}
		else if(strlen($_POST["message"]) <=20 || strlen($_POST["message"]) <= 300){
			$err_txt="You must finish between 20 letters to 300 letters";
			$hasError = true;
		}
		else{
			$txt = $_POST["message"];
		}
		
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["types"]."<br>";
			echo $_POST["subject"]."<br>";
			echo $_POST["message"]."<br>";
			
			
		}
		
		
	}
?>
<html>
<head></head>
<body>
<fieldset>
		  <h1> DeliveryMan Complain Section:</h1>
<form action="" method="post">
<table>
		<tr>
			<td><b>Name: <b></td>
			<td><input size="20" type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
			<td><span><small><?php echo $err_name;?><small></span></td>
			</tr>
					
		<tr>
			<td><b>Email: <b></td>
			<td><input size="20" type="text" name="email" placeholder="Email"></td>
			<td><span><small><?php echo $err_email;?><small></span></td>
		</tr>
				
		<tr>
			<td><b>Types:  <b></td>
			<td>
			<select name="types">
			<option selected disabled>Select</option>			
            <?php
	        foreach($types as $t){
	        if($types == $t)
	        echo "<option selected>$t</option>";
	        else
	        echo "<option>$t</option>";
									}
            ?>
            </select> 
            </td>
			<td><span><small><?php echo $err_types;?></small></span></td>
		</tr>
		
			<td><b>Subject: <b></td>
			<td><input size="20" type="text" name="subject" value="<?php echo $sub;?>" placeholder="subject"></td>
			<td><?php echo $err_sub;?></td>
		<tr>
			<td><b>Message: <b></td>
			<td><textarea name="message"><?php echo $txt;?></textarea>
			<td><?php echo $err_txt;?></td>
		</tr>
		
		<tr>
		    <br><td align="center" colspan="3"><br><br><input type="submit" value="Send"></td>
		</tr>
				
</table>
</form>
</fieldset>
</body>
</html>