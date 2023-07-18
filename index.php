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

$park = $_GET['park'] ?? false;
$vote = $_GET['vote'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous' />
  <link rel="stylesheet" href="style.css">
  <title>Hotels</title>
</head>

<body>
  <header>
    <h1>HOTELS</h1>
    <form action="index.php" class="text-start mt-4 ms-5">
      <label for="park">Parcheggio</label>
      <input type="checkbox" name="park" id="park" class="form-check-input mt-2">
      <label class="ms-3" for="vote">Filtra per voto</label>
      <select name="vote" id="vote">
        <option value="">--</option>
        <?php for ($n = 1; $n <= 5; $n++) : ?>
          <option value="<?= $n ?>"><?= $n ?></option>
        <?php endfor ?>
      </select>
      <button class="btn btn-light ms-3">Filtra</button>
      <a class="btn btn-danger " href="index.php">Rimuovi Filtri</a>
    </form>
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
          <?php if ($park == 'on' && !$hotel['parking']) : ?>
            <?php continue; ?>
          <?php endif ?>
          <?php if ($vote > $hotel['vote']) : ?>
            <?php continue; ?>
          <?php endif ?>
          <tr>
            <td><?= $hotel['name'] ?></td>
            <td><?= $hotel['description'] ?></td>
            <td>
              <?php if ($hotel['parking']) : ?>
                <span><i class="text-success fa-solid fa-check-to-slot"></i></span>
              <?php else : ?>
                <span><i class="text-danger fa-solid fa-square-xmark"></i></span>
              <?php endif ?>
            </td>
            <td>Vote: <?= $hotel['vote'] ?><i class="ms-3 fa-solid fa-star"></i></td>
            <td>
              <span><?= $hotel['distance_to_center'] ?>Km</span>
            </td>
          </tr>
        <?php endforeach ?>

      </tbody>
    </table>
  </main>
</body>

</html>