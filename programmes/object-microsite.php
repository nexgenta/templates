<?php

if(isset($object['uri']))
{
	echo '<div class="section microsite-block"><p>Find out more at the <a href="' . _e($object['uri']) . '">' . _e($object['title']) . ' site</a>.</p></div>';
}
