<?php

if(!isset($page_type)) $page_type = null;
$page_types = explode(' ', $page_type);

array_unshift($links, array('rel' => 'stylesheet', 'type' => 'text/css', 'href' => $skin_iri . 'screen.css', 'media' => 'screen'));
if($skin != 'nexgenta')
{
	array_unshift($links, array('rel' => 'stylesheet', 'type' => 'text/css', 'href' => $templates_iri . 'nexgenta/screen.css', 'media' => 'screen'));
}

?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="generator" content="Eregansu">
<?php	
		foreach($links as $link)
		{
			$s = '<link';
			foreach($link as $k => $v)
			{
				$s .= ' ' . $k . '="' . htmlspecialchars($v) . '"';
			}
			$s .= '>';
			echo "\t\t" . $s . "\n";
		}
		foreach($scripts as $script)
		{
			echo "\t\t" . '<script type="text/javascript" src="' . htmlspecialchars($script) . '"></script>' . "\n";
		}

		?>
		<title><?php e($page_title); ?></title>
	</head>
	<body class="<?php e($page_type . (isset($site_nav) ? ' site-nav' : '')); ?>">
		<div id="surround">
			<h1 id="top"><?php e($page_title); ?></h1>
			<?php if(isset($global_nav) && is_array($global_nav) && count($global_nav)) { ?>
			<div id="nav-header">
				<ul id="nav-crumb">
					<li id="nav-home"><a href="<?php e($global_nav['home']['link']); ?>"><?php e($global_nav['home']['name']); ?></a></li>
<?php 
foreach($crumb as $entry) {
	if(strlen($entry['link']) && $entry['link'] != '#')
	{
		echo '<li><a href="' . htmlspecialchars($entry['link']) . '">' . htmlspecialchars($entry['name']) . '</a></li>';
	}
	else
	{
		echo '<li>' . htmlspecialchars($entry['name']) . '</li>';
	}
}?>
				</ul>
			</div>
			<?php } ?>
