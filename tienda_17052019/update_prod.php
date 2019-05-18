<?php	
	include("database.php");
	
	$codigo = $_POST["codigo"];
	$producto = $_POST["producto"];
	$cantidad = $_POST["cantidad"];
	$costo = $_POST["costo"];
	
	//Get file name
	$name = $_FILES['foto']['name'];
	//Get extension type name
	$type = $_FILES['foto']['type'];
	//Get file size
	$size = $_FILES['foto']['size'];
	//Get temp_file folder
	$tmp_folder = $_FILES['foto']['tmp_name'];
	
	//echo $ident."<br>".$name."<br>".$type."<br>".$size."<br>".$tmp_folder;
	
	//Upload file
	move_uploaded_file($_FILES['foto']['tmp_name'],"fotos_productos/".$_FILES['foto']['name']);
	
	$ruta = "fotos_productos/".$name;
	
	$sql="UPDATE productos SET cantprod = '$cantidad', pcosto = '$costo', imagen = '$ruta' WHERE codprod = '$codigo' ";
	$conn->query($sql);
	
	
	echo "<script language='javascript'>alert('Archivo actualizado con exito')</script>";
	header("Refresh:0;url=index.php");
?>