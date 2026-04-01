
<?php $config = $emailBasic ?? []; ?>

<div class="blogBasic_container">
<h1>
    <?= $config['addSectTitle'] ?? 'Echo-Traceback'; ?>
</h1>
<p class="blogBasic_content">
    <?= $config['addSectText'] ?? 'Send an Echo'; ?>
</p>


<form method="POST" action="">
<div class="emailBasic_flexRow">
  <span class="emailBasic_formEl">

    <input name="to_betMod"
        class="emailBasic" to_
        placeholder="<?= $config['toModLine'] ?? 'MOD'; ?>" 
        required>
  </span>
  <span class="emailBasic_formEl">

    <input name="to_betDom" 
        class="emailBasic" 
        placeholder="<?= $config['toDomLine'] ?? 'DOM'; ?>" 
        required>
  </span>
  </div>
  <span class="blogBasic_formEl">

    <input name="log_leafTopic" 
        placeholder="<?= $config['subjectLine'] ?? 'Subject'; ?>" 
        required>
  </span>
    <br>
  <span class="blogBasic_formEl">
    <textarea name="log_leafText" 
    placeholder="<?= $config['placeholderBody'] ?? 'Body'; ?>" 
    required></textarea>
  </span>
    <br>

  <input type='hidden' name='chIMP_EPC' value='EPO7 GAIA'/> 
  <input type='hidden' name='betSys' value='<?php echo "$sys";?>'/> 
  <input type='hidden' name='betDom' value='<?php echo "$dom";?>'/> 
  <input type='hidden' name='betMod' value='<?php echo "$mod";?>'/> 
  <input type='hidden' name='to_betDom' value='<?php echo "$dom";?>'/> 
  <input type='hidden' name='to_betMod' value='<?php echo "$mod";?>'/> 

  <button type="submit">Submit</button> 

<span class="blogBasic_postMsg">

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo $config['confirmMsg'] ?? 'Post accepted.';
 } 
 ?>

</span>
</form>
