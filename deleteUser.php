<?php 
include('conect.php');
$user->deleteUsers($_GET['id']);

header("Location:index.php?delete#pdo");

?>