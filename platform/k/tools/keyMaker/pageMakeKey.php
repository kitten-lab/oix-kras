
<?php 
require __DIR__ . '/../../systems/rehydrateSelf.php';

$config = $GLOBALS['keyMaker_MakeKey'] ?? []; 
?>
<form method="POST" action="">

    <input 
        name="openSky" 
        class="makeKey_openSky" 
        placeholder="<?= $config['openSky_Title'] ?? 'Title bar title to open sky'; ?>" 
        required>
    <br>

    <input 
    class="house" 
    name="house" 
    placeholder="<?= $config['houseName'] ?? 'houseName'; ?>" 
        required>
    <br>

    <input 
    class="room" 
    name="room" 
    placeholder="<?= $config['roomName'] ?? 'roomName'; ?>" 
        required>
    <br>


    <input 
    class="key" 
    name="key" 
    placeholder="<?= $config['keyName'] ?? 'keyName'; ?>" 
        required>
    <br>

    <textarea 
    rows="10" 
        name="skytext" 
        class="skytext" 
        placeholder="<?= $config['skyWrite_leafText'] ?? 'write in sky'; ?>" 
    required>
    </textarea>
    <br>

  <button 
    type="submit"
    class="plogBasic_AddButton">
    <?= $config['Submit_Button'] ?? 'Submit'; ?>
  </button> 

  <input type='hidden' name='betSys' value='<?= $sys; ?>''/> 
  <input type='hidden' name='betDom' value='<?= $dom; ?>''/> 
  <input type="hidden" name="betTZone" id="tz-input">
  <input type='hidden' name='betMod' value='<?= $mod; ?>'/> 

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
