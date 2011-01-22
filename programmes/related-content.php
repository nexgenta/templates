<?php
if(isset($object['links']) && count($object['links']))
{
?>
<div class="section link-list">
<h3>Links:</h3>
<ul>
<?php
foreach($object['links'] as $link)
{
	$buf = '<a href="' . _e($link['href'])  .'"';
	if(isset($link['rel']))
	{
		$buf .= ' rel="' . _e($link['rel']) . '"';
	}
	$buf .= '>' . _e($link['title']) . '</a>';
	echo '<li>' . $buf . '</li>' . "\n";
}
?>	   
</ul>
</div>
<?php
}
?>


<?php
if((isset($object['genres']) && count($object['genres'])) ||
   (isset($object['formats']) && count($object['formats'])))
{
?>
<div class="section genre-list tag-list">
<h3>More like this:</h3>
<ul>
<?php
if(isset($object['genres']))
{
	foreach($object['genres'] as $obj)
	{	
		$links = array();
		while($obj && $obj->kind != 'scheme')
		{
			array_unshift($links, '<a href="' . _e(isset($obj->uri) ? $obj->uri : $app_root . $obj->relativeURI) . '">' . _e($obj->title) . '</a>');
			$obj = $obj['parent'];
		}
		echo '<li>' . implode(' &gt; ', $links) . '</li>';
	}
}
if(isset($object['formats']))
{
	foreach($object['formats'] as $obj)
	{	
		$links = array();
		while($obj && $obj->kind != 'scheme')
		{
			array_unshift($links, '<a href="' . _e(isset($obj->uri) ? $obj->uri : $app_root . $obj->relativeURI) . '">' . _e($obj->title) . '</a>');
			$obj = $obj['parent'];
		}
		echo '<li>' . implode(' &gt; ', $links) . '</li>';
	}
}
?>
</ul>
</div>
<?php } ?>


<?php if(isset($object['topics']) && count($object['topics']))
{
?>
<div class="section topic-list tag-list">
<h3>Topics:</h3>
<ul>
<?php
foreach($object['topics'] as $obj)
{
	echo '<li><a href="' . _e(isset($obj->uri) ? $obj->uri : $app_root . $obj->relativeURI) . '">' . _e($obj->title) . '</a></li>';
}
?>
</ul>
</div>
<?php
}
?>

<?php if(isset($object['people']) && count($object['people']))
{
?>
<div class="section person-list tag-list">
<h3>People:</h3>
<ul>
<?php
foreach($object['people'] as $obj)
{
	echo '<li><a href="' . _e(isset($obj->uri) ? $obj->uri : $app_root . $obj->relativeURI) . '">' . _e($obj->title) . '</a></li>';
}
?>
</ul>
</div>
<?php
}
?>


<?php if(isset($object['places']) && count($object['places']))
{
?>
<div class="section place-list tag-list">
<h3>Places:</h3>
<ul>
<?php
foreach($object['places'] as $obj)
{
	echo '<li><a href="' . _e(isset($obj->uri) ? $obj->uri : $app_root . $obj->relativeURI) . '">' . _e($obj->title) . '</a></li>';
}
?>
</ul>
</div>
<?php
}
?>

<?php if(isset($object['licenses']) && count($object['licenses']))
{
?>
<div class="section license-list tag-list">
<h3>License:</h3>
<ul>
<?php
foreach($object['licenses'] as $obj)
{
	echo '<li><a href="' . _e(isset($obj->uri) ? $obj->uri : $app_root . $obj->relativeURI) . '">' . _e($obj->title) . '</a></li>';
}
?>
</ul>
</div>
<?php
}
?>
