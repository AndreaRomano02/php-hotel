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