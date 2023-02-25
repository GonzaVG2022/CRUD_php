<?php

include('classes/dataBase.php');
include('classes/Users.php');
include('constants.php');

$base = new Database(SERVIDOR, USUARIO, PASS, BASE);
$user = new Users($base);

?>