<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
   
  <button type="submit" class="btn btn-primary">Cargar Ususario</button>
 



</form>
<div id="mensaje"></div>
<script src=js.js></script> 
<?php include('getUsers.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>