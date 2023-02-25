
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
include('conect.php');
$updeteUsers = $user->getIdUser($_GET['id']);

?>
<form action="upUsers.php" method="POST">
  <div class="col col-lg-2">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $updeteUsers[0]['NOMBRE'];?>">
  </div>
  <div class="col col-lg-2">
    <label for="edad" class="form-label">Edad</label>
    <input type="number" class="form-control" placeholder="Edad" name="edad" value="<?php echo $updeteUsers[0]['EDAD'];?>">
  </div>
  <div class="col col-lg-2">
  <label for="sexo" class="form-label">Sexo</label>
    <select name="sexo" class='select' value="<?php echo $updeteUsers[0]['SEXO'];?>">
        <option value="H">H</option>
        <option value="M">M</option>
    </select>
  </div>
  <div class=" col col-lg-2">
    <label for="rolid" class="form-label">Rolid</label>
    <input type="number" class="form-control" placeholder="Rolid" name="rolid" value="<?php echo $updeteUsers[0]['ROLID'];?>">
  </div>   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

