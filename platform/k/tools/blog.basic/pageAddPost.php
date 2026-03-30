
<?php $config = $blogBasic ?? []; ?>

<div class="blogBasic_container">
<h1>
    <?= $config['addSectTitle'] ?? 'My Blog'; ?>
</h1>
<p class="blogBasic_content">
    <?= $config['addSectText'] ?? 'Add a new post to my blog!'; ?>
</p>


<form method="POST" action="">
  <span class="blogBasic_formEl">
    <input name="title" 
        placeholder="<?= $config['placeholderTitle'] ?? 'Subject'; ?>" 
        required>
  </span>
    <br>
  <span class="blogBasic_formEl">
    <textarea name="body" 
    placeholder="<?= $config['placeholderBody'] ?? 'Body'; ?>" 
    required></textarea>
  </span>
    <br>
  <input type='hidden' name='sys' value='<?php echo "$sys";?>'/> 
  <input type='hidden' name='dom' value='<?php echo "$dom";?>'/> 
  <input type='hidden' name='mod' value='<?php echo "$mod";?>'/> 

  <button type="submit">Submit</button> 

<span class="blogBasic_postMsg">

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo $config['confirmMsg'] ?? 'Post accepted.';
 } 
 ?>

</span>
</form>
