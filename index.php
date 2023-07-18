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
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotels</title>
</head>

<body>
  <?php foreach ($hotels as $hotel) : ?>
    <h2><?= $hotel['name'] ?></h2>
    <p><?= $hotel['description'] ?></p>
    <span><strong>Parcheggio: </strong></span>
    <?php if ($hotel['parking']) : ?>
      <span>Disponibile.</span>
    <?php else : ?>
      <span>Non Disponibile.</span>
    <?php endif ?>
    <p>Vote: <?= $hotel['vote'] ?></p>
    <p>
      <span>Distanza dal centro: <strong><?= $hotel['distance_to_center'] ?></strong></span>
    </p>

  <?php endforeach ?>

</body>

</html>