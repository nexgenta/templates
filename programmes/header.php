<?php

if(!isset($page_type)) $page_type = '';
$page_type .= ' programmes';

$global_nav = array(
	'home' => array('link' => 'http://nexgenta.com/', 'name' => 'Nexgenta'),
	'baird' => array('link' => 'http://projectbaird.com/', 'name' => 'Project Baird'),
	);


require_once($templates_path . 'nexgenta/header.php');
