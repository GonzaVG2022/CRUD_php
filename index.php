<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>CRUD</title>
</head>
<body>
<form action="upUsers.php" method="POST">
  <div class="col col-lg-2">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" placeholder="Nombre" name="nombre">
  </div>
  <div class="col col-lg-2">
    <label for="edad" class="form-label">Edad</label>
    <input type="number" class="form-control" placeholder="Edad" name="edad">
  </div>
  <div class="col col-lg-2">
  <label for="sexo" class="form-label">Sexo</label>
    <select name="sexo" class='select'>
        <option value="H">H</option>
        <option value="M">M</option>
    </select>
  </div>
  <div class=" col col-lg-2">
    <label for="rolid" class="form-label">Rolid</label>
    <input type="number" class="form-control" placeholder="Rolid" name="rolid">
  </div>
   
  <button type="submit" class="btn btn-primary">Submit</button>
<?php 
if(isset($_GET['ok_user'])) {
    echo "<h4>El Ususario se cargo con exito</h4>";
}

?>


</form>
<?php include('getUsers.php'); ?>


</body>
</html>