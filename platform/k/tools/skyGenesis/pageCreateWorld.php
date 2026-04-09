
<?php require __DIR__ . '/../../systems/rehydrateSelf.php'; ?>

<form method="POST" action="">

<input name="GEN__WORLD_NAME" placeholder="NAME" required><br>
<input type="radio" id="asSys" name="ACTING__AS" value="asSys">
  <label for="html">SYS</label><br>
  <input type="radio" id="asDom" name="ACTING__AS" value="asDom">
  <label for="html">DOM</label><br>
<input name="GEN__WORLD_SYS" placeholder="SYS" required><br>
<input name="GEN__WORLD_DOM" placeholder="DOM" required><br>
<input name="GEN__WORLD_MOD" placeholder="MOD" required><br>
<input name="GEN__ROOM" placeholder="FIRST_ROOM" required><br>
<input name="LOVERS_MARK" placeholder="LOVERS_MARK" required><br>

  <input type='hidden' name='POST__SYS' value='<?= $sys ?>'/> 
  <input type='hidden' name='POST__DOM' value='<?= $dom ?>'/> 
  <input type='hidden' name='POST__MOD' value='<?= $mod ?>'/> 
  <input type="hidden" name="POST__TZ" id="tz-input">

  <button type="submit">CREATE WORLD</button> 

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo $config['CONFIRM_MSG'] ?? 'WORLD CREATED.';
 } 
 ?>

</span>
</form>

<script>
  document.getElementById('tz-input').value = Intl.DateTimeFormat().resolvedOptions().timeZone;
</script>