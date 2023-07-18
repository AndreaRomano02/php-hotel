<form action="index.php" class="text-start mt-4 ms-5">
  <div class="form-check form-switch form-check-reverse d-inline-block ">
    <label class="form-check-label" for="park">Parcheggio</label>
    <input class="form-check-input mt-2" name="park" type="checkbox" id="park">
  </div>
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