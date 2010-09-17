
<?php if(isset($object['genres']) && count($object['genres']))
{
?>
<div class="section genre-list tag-list">
<h3>Genres:</h3>
<ul>
<?php
foreach($object['genres'] as $genre)
{	
	echo '<li><a href="' . _e(isset($genre->uri) ? $genre->uri : $app_root . 'genres/' . $genre->relativeURI) . '">' . _e($genre->title) . '</a></li>';
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
	echo '<li><a href="' . _e(isset($obj->uri) ? $obj->uri : $app_root . 'formats/' . $obj->relativeURI) . '">' . _e($obj->title) . '</a></li>';
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
	echo '<li><a href="' . _e(isset($obj->uri) ? $obj->uri : $app_root . 'topics/' . $obj->relativeURI) . '">' . _e($obj->title) . '</a></li>';
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
	echo '<li><a href="' . _e(isset($obj->uri) ? $obj->uri : $app_root . 'people/' . $obj->relativeURI) . '">' . _e($obj->title) . '</a></li>';
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
	echo '<li><a href="' . _e(isset($obj->uri) ? $obj->uri : $app_root . 'licenses/' . $obj->relativeURI) . '">' . _e($obj->title) . '</a></li>';
}
?>
</ul>
</div>
<?php
}
?>
