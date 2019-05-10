<?php
    
    include("database.php");

    $firstname=$_POST['uname'];
    $lastname=$_POST['ulastname'];
	$sex=$_POST['sexo'];
    $email=$_POST['uemail'];
	
	if($sex == "M")
		$user_image = "images/boy.png";
	else
		$user_image = "images/girl.png";
    //$pswd=MD5($_POST['pswd']);
	$pswd=password_hash($_POST['pswd'],PASSWORD_DEFAULT);

    $sql_validation = "SELECT * FROM usuarios WHERE email = '$email' ";
	$result=$conn->query($sql_validation);
	if($result->num_rows == 0){
		$sql="INSERT INTO usuarios (firstname, lastname, sexo, email, password, photo) VALUES('$firstname','$lastname','$sex','$email','$pswd','$user_image')";

		if ($conn->query($sql)===true) {
			echo "<script language='javascript'>alert('Usuario regisrado con exito')</script>";
			header("Refresh:0;url=login.php");    
		}else{
			echo "Error:".$sql."<br>".$conn->error;
		}
	}else{
		echo "<script language='javascript'>alert('Usuario ya existe')</script>";
		header("Refresh:0;url=signup.php"); 
	}

?>