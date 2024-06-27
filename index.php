<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-HOTEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main>
    <?php
    include __DIR__ .'/arrayHotels.php';

   echo "<table class='table'>";
    echo "<thead>";
      echo "<tr>";
      echo "<th scope='col'>Nome</th>";
      echo "<th scope='col'>Descrizione</th>";
      echo "<th scope='col'>Parcheggio</th>";
      echo "<th scope='col'>Voto</th>";
      echo "<th scope='col'>Distanza dal centro (KM)</th>";
    echo "</tr>";
  echo "</thead>";
  echo "<tbody class='table-group-divider'>";
  
  foreach ($hotels as $hotel){
    echo"<tr>";
      echo"<th scope='row'>".($hotel['name'])."</th>";
      echo"<td>".$hotel['description']."</td>";
      echo"<td>".$hotel['parking']."</td>";
      echo"<td>".$hotel['vote']."</td>";
      echo"<td>".$hotel['distance_to_center']."</td>";
    echo"</tr>";
}
  echo"</tbody>";
echo"</table>";
?>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

