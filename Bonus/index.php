<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<h1>HOTELS</h1>
    
    <form>
        <label for="parking">Parcheggio:</label>
        <input type="checkbox" name="parking" id="parking" value="1">
        <input type="submit" value="Cerca">
    </form>


<?php
    $hotels = [

[
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
],
[
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
],
[
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
],
[
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
],
[
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
],

];

$filterParking = isset($_GET['parking']);


echo"
<table class='table'>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Descrizione</th>
            <th>Parcheggio</th>
            <th>Voto</th>
            <th>Distanza dal centro</th>
        </tr>
    </thead>
  <tbody>"; 

foreach ($hotels as $index => $hotelinfo) {
    // Mostra solo gli hotel con parcheggio se la casella di controllo è selezionata
    if ($filterParking && !$hotelinfo['parking']) {
        continue;
    }

    echo "
    <tr>
    <th scope='row'>$index: </th>
    <td>$hotelinfo[name]</td>
    <td>$hotelinfo[description]</td>
    <td>$hotelinfo[parking]</td>
    <td>$hotelinfo[vote]</td> 
    <td>$hotelinfo[distance_to_center]</td>
    </tr>";
}

echo"
</tbody>
</table>";

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
