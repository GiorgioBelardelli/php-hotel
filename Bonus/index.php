<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <form>
        <label for="parking">Parcheggio:</label><br>
        <input type="checkbox" name="parkingY" id="parking" value="1">
        <input type="checkbox" name="parkingN" id="parking" value="2">
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

$filterParking = isset($_GET['parkingY']);


foreach ($hotels as $index => $hotelinfo) {
    // Mostra solo gli hotel con parcheggio se la casella di controllo è selezionata
    if ($filterParking && !$hotelinfo['parkingY']) {
        continue;
    }

    echo "
    <table class='table'>
    <th scope='row'>$index: </td>
    <td>$hotelinfo[name]</td>
    <td>$hotelinfo[description]</td>
    <td>" . ($hotelinfo['parking'] ? 'Con Parcheggio' : 'Senza Parcheggio') . "</td>
    <td>$hotelinfo[vote]</td> 
    <td>$hotelinfo[distance_to_center]</td> 
    </table>";
}

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
