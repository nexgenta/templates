<?php
if(isset($objects) && !$objects->EOF)
{
?>
<div class="section prog-list">

<ul>
<?php

	 while(($prog = $objects->next()))
	 {
		 echo '<li><a href="' . _e($app_root . $prog->relativeURI) . '">' . _e($prog->title) . '</a></li>';
	 }

?>
</ul>
<?php
}
?>