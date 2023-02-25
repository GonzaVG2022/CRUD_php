<?php 
include('conect.php');


$user->updateUsers($_POST['id'],$_POST['nombre'],$_POST['edad'],$_POST['sexo'],$_POST['rolid'],);

header("Location: index.php?udate#pdo");

?>


