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


<?php if(isset($object['genres']) && count($object['genres']))
{
?>
<div class="section genre-list tag-list">
<h3>Genres:</h3>
<ul>
<?php
foreach($object['genres'] as $genre)
{	
	echo '<li><a href="' . _e(isset($genre->uri) ? $genre->uri : $app_root . $genre->relativeURI) . '">' . _e($genre->title) . '</a></li>';
}
?>
</ul>
</div>
<?php } ?>

<?php if(isset($object['formats']) && count($object['formats']))
{
?>
<div class="section format-list tag-list">
<h3>Formats:</h3>
<ul>
<?php
foreach($object['formats'] as $obj)
{
	echo '<li><a href="' . _e(isset($obj->uri) ? $obj->uri : $app_root . $obj->relativeURI) . '">' . _e($obj->title) . '</a></li>';
}
?>
</ul>
</div>
<?php
}
?>

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
