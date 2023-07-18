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
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
  <link rel="stylesheet" href="style.css">
  <title>Hotels</title>
</head>

<body>
  <header>
    <h1>HOTELS</h1>
  </header>
  <main>
    <table class="table table-dark table-striped-columns">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Descrizione</th>
          <th>Parcheggio</th>
          <th>Voto</th>
          <th>Distanza</th>
        </tr>
      </thead>
      <tbody>

        <?php foreach ($hotels as $hotel) : ?>
          <tr>
            <td><?= $hotel['name'] ?></td>
            <td><?= $hotel['description'] ?></td>
            <td>
              <?php if ($hotel['parking']) : ?>
                <span>Disponibile</span>
              <?php else : ?>
                <span>Non Disponibile</span>
              <?php endif ?>
            </td>
            <td>Vote: <?= $hotel['vote'] ?></td>
            <td>
              <span><?= $hotel['distance_to_center'] ?></span>
            </td>
          </tr>
        <?php endforeach ?>

      </tbody>
    </table>
  </main>
</body>

</html>