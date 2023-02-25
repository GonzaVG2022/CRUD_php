<?php 
include('conect.php');

$user->createUser( $_POST['nombre'], $_POST['edad'], $_POST['sexo'], $_POST['rolid']);

header("Location: index.php?ok_user#pdo");

?>