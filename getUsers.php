<?php
// Include the database connection file
include('conect.php');

// Fetch data from the database
$getUsers = $user->getUser();

// Calculate the average age
$totalAge = 0;
foreach ($getUsers as $user) {
    $totalAge += $user['EDAD'];
}
$averageAge = $totalAge / count($getUsers);

// Convert the fetched data into JSON format
$data = json_encode($getUsers);
?>

<table class="table table-striped table-bordered table-hover d-flex justify-content-center">
    <tr class="table-dark">
        <th>Nombre</th>
        <th>Edad</th>
        <th>Sexo</th>
        <th>Rolid</th>
        <th>Modificar</th>
        <th>Eliminar</th>

    </tr>
    <?php
    for($i=0; $i<count($getUsers);$i++) { 
    ?>
     <tr>
        
        <td ><?php echo $getUsers[$i]['NOMBRE'];?></td>
        <td ><?php echo $getUsers[$i]['EDAD'];?></td>
        <td ><?php echo $getUsers[$i]['SEXO'];?></td>
        <td ><?php echo $getUsers[$i]['ROLID'];?></td>
        <td ><a href="updateUser.php?id=<?php echo $getUsers[$i]['ID'];?>">Modificar</a></td>
        <td ><a href="deleteUser.php?id=<?php echo $getUsers[$i]['ID'];?>">Eliminar</a></td>
    </tr>
    <?php
    }
    ?>
</table>


<!-- <script>
    // Parse the JSON data
    let data = JSON.parse('<?php echo $data; ?>');

    // Extract the required values from the data
    let seriesData = data.map((item) => item.EDAD);

    let options = {
      series: seriesData,
      chart: {
      width: 380,
      type: 'pie',
    },
    labels: ['Nombre', 'Edad', 'Sexo', 'Rolid'],
    responsive: [{
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        },
        legend: {
          position: 'bottom'
        }
      }
    }]
    };
 
    let chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script> -->