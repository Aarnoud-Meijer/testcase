<?php

// create template
// remove index.php from link results
?>
<h3>Testcase project</h3>
<?php foreach (glob("*.php") as $link): ?>
<a href="<?=$link?>"><?=$link?></a>
<?php endforeach; ?>
