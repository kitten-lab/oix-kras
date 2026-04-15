
<?php 
require __DIR__ . '/../../systems/rehydrateSelf.php';

$config = $GLOBALS[$site]['FIGS']['postBASIC'] ?? []; 
?>
<form method="POST" action="">

    <input 
        name="POST__TIMBER_TOPIC" 
        placeholder="Topic of Posting" 
        required>
    <br>
    <textarea 
    rows="10" 
    name="POST__TIMBER_LEAF" 
    placeholder="Posting Body" 
    required></textarea>
    <br>
    <input 
        name="POST__TAGS" 
        placeholder="Tags">
    <br>
    <input 
        name="POST__EVENT_UNIX" 
        placeholder="Unix timestamp"
        type="number">
    <br>

  <input type='hidden' name='POST__SYS' value='<?= $sys; ?>''/> 
  <input type="hidden" name="POST__TZ" id="tz-input">

  <button 
    type="submit"
    class="plogBasic_AddButton">
    <?= $config['Submit_Button'] ?? 'Submit'; ?>
  </button> 

  <span class="plogBasic_postMsg">

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo $config['Confirmation_Msg'] ?? 'Post accepted.';
    } 
    ?>

    </span>
    </form>

<script>
  document.getElementById('tz-input').value = Intl.DateTimeFormat().resolvedOptions().timeZone;
</script>
