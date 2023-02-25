<?php
include('conect.php');

$getUsers = $user->getUser();

?>


<table class="table table-striped table-bordered">
    <tr>
        <th>Nombre</th>
        <th>Edad</th>
        <th>Sexo</th>
        <th>Rolid</th>
    </tr>
    <?php
    for($i=0; $i<count($getUsers);$i++) { 
    ?>
     <tr>
        
        <td><?php echo $getUsers[$i]['NOMBRE'];?></td>
        <td><?php echo $getUsers[$i]['EDAD'];?></td>
        <td><?php echo $getUsers[$i]['SEXO'];?></td>
        <td><?php echo $getUsers[$i]['ROLID'];?></td>
        <td><a href="updateUser.php?id=<?php echo $getUsers[$i]['ID'];?>">Modificar</a></td>
        <td><a href="deleteUser.php?id=<?php echo $getUsers[$i]['ID'];?>">Eliminar</a></td>
    </tr>
    <?php 
    } 
    ?> 
</table>
