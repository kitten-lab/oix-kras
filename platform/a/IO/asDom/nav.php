<?php $config = $nav['navSec'] ?? []; ?>

<h1 class="pageTitle flicker">[HELLO]</h1>
<h1 style="padding-bottom:0px;"><?= $mod ?> [<a href="<?= $location . 'index.php?mod=' . $mod; ?>">Home</a>]</h1>
<aside class="nav"><nav>
<ul>
<?php foreach ($nav as $section): ?>
<p style="padding:.3vh 0; margin:0; letter-spacing: 1vh; border-bottom: .15vh solid var(--my-fav-colorInvis)"><?php echo $section['name']; ?></p>
<?php foreach ($section['items'] as $item): ?>
<li>
<a href="<?= $location . $item['path'] . '?mod=' . $mod; ?>"><?= $item['label']; ?></a>
</li>
<?php foreach ($item['subSec'] as $subItem): ?>
<li> 
<a href="<?= $location . $subItem['path'] . '?mod=' . $mod; ?>" class="navSubSec"><?= $subItem['label']; ?></a>
</li>

<?php endforeach; ?>
<?php endforeach; ?>
<?php endforeach; ?>
</ul>
</nav></aside>
<span class="ioooooooooooooooooo45u8222"></span>
<script>
btn.addEventListener('click', () => {
  if (div.style.display === 'none') {
    div.style.display = 'block';
  } else {
    div.style.display = 'none';
  }
});
</script>