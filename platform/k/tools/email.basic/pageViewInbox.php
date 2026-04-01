<?php $config = $blogBasic ?? []; ?>

<div class="blogBasic_container">
<h1><?= $config['listSectTitle'] ?? 'Viewing all listings.'; ?>
</h1>
<p class="blogBasic_content">

    <?= $config['listSectText'] ?? 'Viewing all listings.'; ?>
</p>
<?php 
$posts = array_reverse($posts);

foreach ($filtered as $post) {
  echo "<span class='mail_listRow'>";
  echo "<span class='mail_listFrom'>FROM: " . $post['from_bet.mod'] . "</span>";
  echo "<span class='mail_listSubject'><a href='mail.viewMail.php?oic=" . $post['ch.IMP_OIC'] . "'>" . $post['log.leafTopic'] . "</a></span>";
  echo "<span class='mail_listDate'>" . $post['ch.IMP_LIC'] . $post['ch.IMP_TP'] . "</span>";
  echo "</span>";
}
?>
</div>
