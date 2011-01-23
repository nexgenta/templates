<?php

if(!isset($page_type)) $page_type = '';
$page_type .= ' git';

$global_nav = array(
	'home' => array('link' => 'http://nexgenta.com/', 'name' => 'Nexgenta'),
	'baird' => array('link' => 'http://projectbaird.com/', 'name' => 'Project Baird'),
	);

function format_time($dt)
{
	return strftime('%B %d, %Y', $dt);
}

require_once(dirname(__FILE__) . '/../nexgenta/header.php');
