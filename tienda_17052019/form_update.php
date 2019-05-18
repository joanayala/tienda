<?php
	include "database.php";
    $id =$_GET['id'];
    $sql="SELECT * FROM productos WHERE item = $id Limit 1";
	$result=$conn->query($sql);

	if($result->num_rows > 0){
		while ($row = $result->fetch_assoc()) {
			$codprod = $row['codprod'];
			$nomprod = $row['nomprod'];
			$cantprod = $row['cantprod'];
			$pcosto = $row['pcosto'];
		}
	}  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>Formulario de Actualización</title>
  </head>

  <body>

      <br>
      <div class="container">
  <form action="update_prod.php" method="POST" enctype="multipart/form-data">
  <h2>Actualización de productos</h2>
  <div class="form-group">
    <label for="codigo"></label>
    <input type="hidden" class="form-control" enable="ok" id="cod" maxlenght="8" name="idprod" required>
  </div>
  <div class="form-group">
    <label for="codigo">Código del Producto:</label>
    <input type="text" class="form-control" id="cod" maxlenght="8" name="codigo" value=<?php echo $codprod;?> readonly="yes">
  </div>
  <div class="form-group">
    <label for="prod">Descripción producto:</label>
    <input type="text" class="form-control" id="prod" name="producto" maxlenght="60" value=<?php echo $nomprod;?> readonly="yes">
  </div>
  <div class="form-group">
    <label for="cant" class="mr-sm-2">Cantidad:</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="cant" name="cantidad" value=<?php echo $cantprod;?> required>
    
    <label for="pcosto" class="mr-sm-2">Costo producto:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="pcosto" name="costo" autocomplete="off" value=<?php echo $pcosto;?> required>
  </div>
  <div class="form-group">
  </div>
  <div class="form-group">
    <label for="foto">Imagen de producto:</label>
    <input type="file" class="form-control" id="foto" name="foto" value="Examinar" >
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
  <button type="reset" class="btn btn-secundary">Cancelar</button>
</form>
</div>
<br>
<hr>
</body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

