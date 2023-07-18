<?php if ($park == 'on' && !$hotel['parking']) : ?>
  <?php continue; ?>
<?php endif ?>
<?php if ($vote > $hotel['vote']) : ?>
  <?php continue; ?>
<?php endif ?>