<?php
// Data
include 'include/data/hotels.php';

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

<body class="bg-dark">

  <!--# Header -->
  <header>
    <h1>HOTELS</h1>
    <?php include 'include/form.php' ?>
  </header>

  <!--# Main -->
  <main>
    <?php include 'include/table.php' ?>
  </main>
</body>

</html>