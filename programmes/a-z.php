<div class="a-z-list">
<ul>
	 <li><a href="<?php e($app_root . 'a-z/by/*'); ?>">0-9</a></li>
<?php
	 for($c = ord('a'); $c <= ord('z'); $c++)
	 {
		 echo '<li><a href="' . _e($app_root . 'a-z/by/' . chr($c)) . '">' . strtoupper(chr($c)) . '</a></li>' . "\n";
	 }
?>
</ul>
</div>
