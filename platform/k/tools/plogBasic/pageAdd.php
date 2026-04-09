
<?php 
require __DIR__ . '/../../systems/rehydrateSelf.php';

$config = $GLOBALS['plogBasicAdd'] ?? []; 
?>
<form method="POST" action="">

    <input 
        name="plog_leafTopic" 
        class="plogBasic_AddTopic" 
        placeholder="<?= $config['Leaf_Topic_placeholder'] ?? 'Leaf Topic'; ?>" 
        required>
    <br>
    <textarea 
    rows="10" 
    class="plogBasic_AddTopic" 
    name="plog_leafText" 
    placeholder="<?= $config['Leaf_Text_placeholder'] ?? 'Leaf Text'; ?>" 
    required>
    </textarea>
    <br>

  <input type='hidden' name='betSys' value='<?= $sys; ?>''/> 
  <input type='hidden' name='betDom' value='<?= $dom; ?>''/> 
  <input type="hidden" name="betTZone" id="tz-input">
  <input type='hidden' name='betMod' value='<?= $mod; ?>'/> 

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

    </span></div>
    </form>

<script>
  document.getElementById('tz-input').value = Intl.DateTimeFormat().resolvedOptions().timeZone;
</script>
